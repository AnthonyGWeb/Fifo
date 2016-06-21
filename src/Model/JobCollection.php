<?php
namespace Fifo\Model;

class JobCollection implements \Countable, \IteratorAggregate
{
    private $storageEntity = [];
    
    public function count()
    {
        return count($this->storageEntity);
    }
    
    public function getIterator()
    {
        // TODO: Implement getIterator() method.
    }

    /**
     * Add a new jobEntity in collection
     *
     * @param JobEntity $storageEntity
     */
    public function add(JobEntity $storageEntity): void
    {
        $storageEntity[] = $storageEntity;
    }

    /**
     * Flush storageEntity
     */
    public function flush(): void
    {
        $this->storageEntity = [];
    }
}
