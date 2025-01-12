<?php

declare(strict_types=1);

/**
 * This file is part of the Zephir.
 *
 * (c) Phalcon Team <team@zephir-lang.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Zephir\Statements\Let;

use Zephir\CompilationContext;
use Zephir\CompiledExpression;
use Zephir\Statements\LetStatement;
use Zephir\Variable\Variable as ZephirVariable;

/**
 * ExportSymbol.
 *
 * Exports a symbol to the current PHP symbol table using a variable as parameter
 */
class ExportSymbol
{
    /**
     * Compiles {var} = {expr}.
     *
     * @param string             $variable
     * @param ZephirVariable     $symbolVariable
     * @param CompiledExpression $resolvedExpr
     * @param CompilationContext $compilationContext,
     * @param array              $statement
     */
    public function assign($variable, ZephirVariable $symbolVariable, CompiledExpression $resolvedExpr, CompilationContext $compilationContext, $statement): void
    {
        $codePrinter = $compilationContext->codePrinter;

        $variable = $compilationContext->symbolTable->getTempVariable('variable', $compilationContext, $statement);
        $variable->setMustInitNull(true);

        $letStatement = new LetStatement([
            'type' => 'let',
            'assignments' => [
                [
                    'assign-type' => 'variable',
                    'variable' => $variable->getName(),
                    'operator' => 'assign',
                    'expr' => [
                        'type' => $resolvedExpr->getType(),
                        'value' => $resolvedExpr->getCode(),
                        'file' => $statement['file'],
                        'line' => $statement['line'],
                        'char' => $statement['char'],
                    ],
                    'file' => $statement['file'],
                    'line' => $statement['line'],
                    'char' => $statement['char'],
                ],
            ],
        ]);
        $letStatement->compile($compilationContext);

        $symbol = $compilationContext->backend->getVariableCode($symbolVariable);
        $variable = $compilationContext->backend->getVariableCode($variable);

        $codePrinter->output('if (zephir_set_symbol('.$symbol.', '.$variable.') == FAILURE) {');
        $codePrinter->output("\t".'return;');
        $codePrinter->output('}');
    }
}
