<?php
namespace Fifo;

class Fifo
{
    private $config;

    private $storages = [];

    private $allStorage = [];

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->setAllStorages();
        $this->addStorage(array_keys($config));
    }

    public function putJob()
    {
        // TODO :
    }

    public function save()
    {
        
    }

    /**
     * Add storage
     *
     * @param array $storages
     * @throws FifoException
     */
    protected function addStorage(array $storages): void
    {
        foreach ($storages as $storage) {
            if (!in_array(strtolower($storage), $this->allStorage)) {
                throw new FifoException("Unable to add storage : $storage");
            }
            $this->storages[] = $storage;
        }
    }

    /**
     * Set available storage in function of driver
     */
    private function setAllStorages(): void
    {
        $storageDrivers = scandir(__DIR__ . "/Storage/Driver/");
        foreach ($storageDrivers as $storageDriver) {
            $this->allStorage[] = strtolower(str_replace('.php', '', $storageDriver));
        }
    }
}
