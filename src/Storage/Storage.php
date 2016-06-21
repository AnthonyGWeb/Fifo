<?php
namespace Fifo\Storage;

use Fifo\Model\StorageCollection;

interface Storage
{
    public function __construct(array $config);

    public function save(StorageCollection $storageCollection);
    
    public function get();
}
