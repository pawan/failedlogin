<?php

namespace Pawan\FailedLogin\Logger;

use \Monolog\Logger;
use \Magento\Framework\Logger\Handler\Base;

class Handler extends Base
{
    /**
     * Logging Level
     * @var int
     */
    public $loggerType = Logger::INFO;

    /**
     * File Name
     * @var string
     */
    public $fileName = '/var/log/failedlogin.log';
}
