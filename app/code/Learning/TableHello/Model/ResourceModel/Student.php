<?php

namespace Learning\TableHello\Model\ResourceModel;


class Student extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    
    public function _construct()
    {
        $this->_init('student', 'id');
    }
}