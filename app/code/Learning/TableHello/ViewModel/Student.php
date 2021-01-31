<?php

namespace Learning\TableHello\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

use Learning\TableEdit\Model\StudentFactory;
use Learning\TableEdit\Model\ResourceModel\Student\CollectionFactory;

class Student implements ArgumentInterface
{
    protected $studentFactory;
    
    protected $collectionFactory;
    
    public function __construct(StudentFactory $studentFactory, CollectionFactory $collectionFactory)
    {
        $this->studentFactory = $studentFactory;
        $this->collectionFactory = $collectionFactory;
        
    }
    
    public function getAllStudent()
    {
        return $this->collectionFactory->create();
    }
    
    public function getStudent($id)
    {   
        var_dump(99);
        $s = $this->studentFactory->create();
        $s->load($id);
        
        return $s;
    }
}
    