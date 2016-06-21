<?php
namespace Fifo\Storage;

use Fifo\Model\JobCollection;

interface InterfaceStorage
{
    public function __construct(array $config);

    public function save(JobCollection $jobCollection);
    
    public function get();
}
