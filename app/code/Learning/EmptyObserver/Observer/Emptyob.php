<?php

namespace Learning\EmptyObserver\Observer;

class Emptyob implements \Magento\Framework\Event\ObserverInterface
{
    protected $logger;

    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
	{
    }

}