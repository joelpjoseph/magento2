<?php

namespace Learning\FooterEdit\Plugin;

class FooterPlugin
{

	public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $title)
	{
		$title = "CopyRight to JoelStore";
		return $title;
	}
}