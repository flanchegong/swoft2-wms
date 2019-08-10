<?php declare(strict_types=1);

namespace App;

use Swoft\SwoftApplication;
use function date_default_timezone_set;

/**
 * Class Application
 *
 * @since 2.0
 */
class Application extends SwoftApplication
{
    protected function beforeInit(): void
    {
        parent::beforeInit();

        date_default_timezone_set('Asia/Shanghai');
    }

//    public function getCLoggerConfig(): array
//    {
//        $config = parent::getCLoggerConfig();
//        // disable print console start log
//        $config['enable'] = false;
//
//        return $config;
//    }
}
