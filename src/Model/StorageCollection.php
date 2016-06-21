<?php
namespace Fifo\Model;

class StorageCollection implements \Countable, \IteratorAggregate
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
    
    public function add(StorageEntity $storageEntity)
    {
        $storageEntity[] = $storageEntity;
    }
}
