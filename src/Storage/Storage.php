<?php
namespace Fifo\Storage;

use Fifo\Model\JobCollection;

interface Storage
{
    public function __construct(array $config);

    public function save(JobCollection $storageCollection);
    
    public function get();
}
