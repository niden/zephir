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

namespace Zephir\Optimizers\FunctionCall;

use Zephir\Call;
use Zephir\CompilationContext;
use Zephir\CompiledExpression;
use Zephir\Exception\CompilerException;
use Zephir\Optimizers\OptimizerAbstract;

/**
 * HashEqualsOptimizer.
 *
 * Optimizes calls to 'hash_equals' using internal function
 */
class HashEqualsOptimizer extends OptimizerAbstract
{
    /**
     * @param array              $expression
     * @param Call               $call
     * @param CompilationContext $context
     *
     * @return bool|CompiledExpression|mixed
     *
     * @throws CompilerException
     */
    public function optimize(array $expression, Call $call, CompilationContext $context)
    {
        if (!isset($expression['parameters']) || 2 != \count($expression['parameters'])) {
            throw new CompilerException("'hash_equals' requires two parameters", $expression);
        }

        /*
         * Process the expected symbol to be returned
         */
        $call->processExpectedReturn($context);

        $symbolVariable = $call->getSymbolVariable(true, $context);
        if ($symbolVariable->isNotVariableAndString()) {
            throw new CompilerException('Returned values by functions can only be assigned to variant variables', $expression);
        }

        $context->headersManager->add('kernel/string');

        /**
         * Process parameters.
         */
        $resolvedParams = $call->getReadOnlyResolvedParams($expression['parameters'], $context, $expression);

        if ($call->mustInitSymbolVariable()) {
            $symbolVariable->initVariant($context);
        }

        return new CompiledExpression('bool', 'zephir_hash_equals('.$resolvedParams[0].', '.$resolvedParams[1].')', $expression);
    }
}
