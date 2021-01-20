<?php

namespace Learning\EventTest\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$displayText = $observer->getData('mp_text');
		echo $displayText->getText() . " Home </br>";
		$displayText->setText('Execute event successfully.');

		return $this;
	}
}