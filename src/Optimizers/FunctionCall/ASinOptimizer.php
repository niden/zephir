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

use Zephir\Optimizers\MathOptimizer;

/**
 * ASinOptimizer.
 *
 * Optimizes calls to 'asin' using internal function
 */
class ASinOptimizer extends MathOptimizer
{
    public function getFunctionName()
    {
        return 'asin';
    }
}
