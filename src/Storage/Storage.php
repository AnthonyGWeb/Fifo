<?php
namespace Fifo\Storage;

use Fifo\FifoException;
use Fifo\Storage\Driver\MySql;
use Fifo\Storage\Driver\Redis;

class Storage
{
    private static $instance;
    
    private function __construct(array $config)
    {
        if (empty($config['driver'])) {
            throw new FifoException("Storage driver is empty");
        }
        self::$instance = $this->getDriver($config['driver'], $config);
    }

    /**
     * Retrieve instance of InterfaceStorage
     * 
     * @param array $config
     * @return InterfaceStorage
     */
    public static function getInstance(array $config): InterfaceStorage
    {
        if (self::$instance instanceof InterfaceStorage) {
            return self::$instance;
        }
        new Storage($config);

        return self::$instance;
    }

    /**
     * Retrieve instance of a storage
     * 
     * @param string $driver
     * @param array $config
     * @return MySql|Redis
     * @throws FifoException
     */
    protected function getDriver(string $driver, array $config)
    {
        switch ($driver) {
            case MySql::DRIVER_NAME:
                return new MySql($config);
                break;
            case Redis::DRIVER_NAME:
                return new Redis($config);
                break;
            default:
                throw new FifoException("Storage driver is unavailable");
        }
    }
}
