<?php
namespace Fifo\Model;

class StorageEntity
{
    const PRIORITY_LOW = 0;    
    const PRIORITY_NORMAL = 1;    
    const PRIORITY_HIGH = 2;

    const STATUS_PROCESSING = 0;
    const STATUS_SEND = 1;
    const STATUS_ERROR = 3;    
    const STATUS_RETRY = 4;

    /**
     * Service used for handling data
     * 
     * @var string $service
     */
    private $service;

    /**
     * Value(s) use for call service
     * 
     * @var string $value
     */
    private $value;

    /**
     * Status of request
     * 
     * @var int $status
     */
    private $status;

    /**
     * Priority of the request
     * 
     * @var int $priority
     */
    private $priority = self::PRIORITY_NORMAL;

    /**
     * Number of retry
     * 
     * @var int $retry
     */
    private $retry;

    /** 
     * @var \DateTime $createdAt
     */
    private $createdAt;

    /**
     * Last access of request (retry or send)
     * 
     * @var \DateTime $lastAccess
     */
    private $lastAccess;
}
