<?php
namespace Fifo\Model;

class JobCollection implements \Countable, \IteratorAggregate
{
    private $storageEntity = [];
    
    public function count()
    {
        // TODO: Implement count() method.
    }
    
    public function getIterator()
    {
        // TODO: Implement getIterator() method.
    }
    
    public function add(JobEntity $storageEntity)
    {
        $storageEntity[] = $storageEntity;
    }
}
