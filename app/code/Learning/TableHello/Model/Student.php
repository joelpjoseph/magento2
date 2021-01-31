<?php

namespace Learning\TableHello\Model;



class Student extends \Magento\Framework\Model\AbstractModel
{
     public function _construct()
    {
        $this->_init(\Learning\TableHello\Model\ResourceModel\Student::class);
    }
}