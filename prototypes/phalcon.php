<?php

/**
 * This file is part of the Zephir.
 *
 * (c) Phalcon Team <team@zephir-lang.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Phalcon {
    class Di
    {
        protected static $di;

        public static function setDi($di)
        {
            self::$di = $di;
        }

        public static function getDefault()
        {
            return self::$di;
        }
    }
}

namespace Phalcon\Mvc {
    class Application
    {
    }
}

namespace Phalcon\Mvc\Model {
    class Query
    {
        const TYPE_SELECT = 309;

        const TYPE_INSERT = 306;

        const TYPE_UPDATE = 300;

        const TYPE_DELETE = 303;
    }
}
