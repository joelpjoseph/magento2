<?php
namespace Learning\CustomRouter\Controller\Demo;

class Demo extends \Magento\Framework\App\Action\Action
{
    protected $_request;

    /**
     * Demo constructor.
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        echo (__METHOD__);
        exit();
    }
}