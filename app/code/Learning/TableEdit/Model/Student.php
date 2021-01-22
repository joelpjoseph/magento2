<?php

namespace Learning\TableEdit\Model;



class Student extends \Magento\Framework\Model\AbstractModel
{
     public function _construct()
    {
        $this->_init(\Learning\TableEdit\Model\ResourceModel\Student::class);
    }
}