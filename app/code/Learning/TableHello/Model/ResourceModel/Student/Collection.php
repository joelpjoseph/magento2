<?php

namespace Learning\TableHello\Model\ResourceModel\Student;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
  
    public function _construct()
    {
        $this->_init(\Learning\TableHello\Model\Student::class, \Learning\TableHello\Model\ResourceModel\Student::class);
    }
}
