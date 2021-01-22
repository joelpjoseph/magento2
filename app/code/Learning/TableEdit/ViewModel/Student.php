<?php

namespace Learning\TableEdit\ViewModel;

use Magento\Frameworl\View\Element\Block\ArgumentInterface;

use Learning\TableEdit\Model\StudentFactory;
use Learning\TableEdit\Model\ResourceModel\Student\CollectionFactory;

class Student implements ArgumentFactory
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
        $s = $this->studentFactory->create();
        $s->load($id);
        
        return $s;
    }
}
    