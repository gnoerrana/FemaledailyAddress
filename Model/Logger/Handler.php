<?php

/**
 * @Author: Gilang
 * @Date:   2022-04-03 16:19:43
 * @Last Modified by:   Gilang
 * @Last Modified time: 2022-04-03 22:49:59
 */
namespace Femaledaily\Address\Model\Logger;

use Magento\Framework\Filesystem\DriverInterface;

/**
 * Class Handler
 * @package Femaledaily\Address\Model\Logger
 */
class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Handler constructor.
     * @param DriverInterface $filesystem
     * @param null $filePath
     */
    public function __construct(DriverInterface $filesystem, $filePath = null)
    {
        parent::__construct($filesystem, $filePath);
        $this->getFormatter()->ignoreEmptyContextAndExtra(true);
    }

    /**
     * Logging level
     * @var int
     */
    protected $loggerType = \Monolog\Logger::INFO;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/rest_api.log';
}
