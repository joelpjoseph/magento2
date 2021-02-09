<?php

namespace Learning\EventDemo\Observer;

class LogUrl implements \Magento\Framework\Event\ObserverInterface
{

	public function execute(\Magento\Framework\Event\Observer $observer)
	{

		$url = $observer->getPathInfo();
        var_dump($url);
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/hello.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info($url);
    }
}