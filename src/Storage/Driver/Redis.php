<?php
namespace Fifo\Storage\Driver;

use Fifo\Model\JobCollection;
use Fifo\Storage\InterfaceStorage;

class Redis implements InterfaceStorage
{
    const DRIVER_NAME = "redis";

    public function __construct(array $config)
    {
        // TODO: Implement config
    }

    public function save(JobCollection $storageCollection)
    {
        // TODO: Implement save() method.
    }

    public function get()
    {
        // TODO: Implement get() method.
    }
}
