<?php

namespace Learning\TableEdit\Model\ResourceModel\Student;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
  
    public function _construct()
    {
        $this->_init(\Learning\TableEdit\Model\Student::class, \Learning\TableEdit\Model\ResourceModel\Student::class);
    }
}
