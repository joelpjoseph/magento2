<?php
namespace Learning\SayHello\Controller\Index;

class Display extends \Magento\Framework\App\Action\Action
{
	protected $_resultPageFactory;
	protected $resultPage;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory)
	{
		$this->_pageFactory = $resultPageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$resultPage = $this->_resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__(' heading '));

        $block = $resultPage->getLayout()
                ->createBlock('Learning\SayHello\Block\Display')
                ->setTemplate('Learning_SayHello::sayhello.phtml')
                ->toHtml();
        $this->getResponse()->setBody($block);
	}
}