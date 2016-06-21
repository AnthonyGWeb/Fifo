<?php
namespace Fifo\Storage\Driver;

use Fifo\Model\JobCollection;
use Fifo\Storage\InterfaceStorage;

class MySql implements InterfaceStorage
{
    const DRIVER_NAME = "mysql";

    public function __construct(array $config)
    {
        // TODO: Implement config
    }

    public function save(JobCollection $storageCollection)
    {
        // TODO: Implement save() method.
        // Flush jobCollection
    }
    
    public function get()
    {
        // TODO: Implement get() method.
    }
}
