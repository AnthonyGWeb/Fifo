<?php
namespace Fifo;

use Fifo\Model\JobCollection;
use Fifo\Model\JobEntity;
use Fifo\Storage\InterfaceStorage;
use Fifo\Storage\Storage;

class Fifo
{
    private $storage;

    private $jobCollection;

    public function __construct(array $config)
    {
        $this->storage = Storage::getInstance($config);
        $this->jobCollection = new JobCollection();
    }

    public function putJob(JobEntity $jobEntity)
    {
        $this->jobCollection->add($jobEntity);
    }

    public function save()
    {
        $this->storage->save($this->jobCollection);
    }
}
