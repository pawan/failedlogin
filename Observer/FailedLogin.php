<?php

namespace Pawan\FailedLogin\Observer;

use Magento\Framework\Event\ObserverInterface;
use Pawan\FailedLogin\Logger\Logger;
use Magento\Framework\HTTP\PhpEnvironment\RemoteAddress;

class FailedLogin implements ObserverInterface
{
    private $logger;
    private $remoteAddress;

    public function __construct(
        Logger $logger,
        RemoteAddress $remoteAddress
    ) {
        $this->logger = $logger;
        $this->remoteAddress = $remoteAddress;
    }
    
    
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $ip = $this->remoteAddress->getRemoteAddress();
        $this->logger->info($ip);
    }
}
