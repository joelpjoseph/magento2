<?php
namespace Training\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'training_helloworld_post';

	protected $_cacheTag = 'training_helloworld_post';

	protected $_eventPrefix = 'training_helloworld_post';

	protected function _construct()
	{
		$this->_init('training\HelloWorld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}