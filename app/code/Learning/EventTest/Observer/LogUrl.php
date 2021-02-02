<?php

namespace Learning\EventTest\Observer;

class LogUrl implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		// $url = request->getPathInfo('url');
        // var_dump($url);
        // $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        // $logger = new \Zend\Log\Logger();
        // $logger->addWriter($writer);
        // $logger->info($url);
    }
}