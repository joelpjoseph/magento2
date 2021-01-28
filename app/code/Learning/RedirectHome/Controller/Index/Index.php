<?php
namespace Learning\RedirectHome\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    
    protected $resultFactory;

    public function __construct(
        \Magento\Framework\Controller\ResultFactory $resultFactory,
        \Magento\Framework\App\Action\Context $context
    )
    {
       $this->resultFactory = $resultFactory;

       parent::__construct($context);
    }

    public function execute()
    {
        $redirect = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT);
        $redirect->setUrl('/joelstore/');
        return $redirect;
    }
    
}
