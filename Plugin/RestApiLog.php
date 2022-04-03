<?php
/**
 * @Author: Gilang
 * @Date:   2022-04-03 16:19:43
 * @Last Modified by:   Gilang
 * @Last Modified time: 2022-04-03 22:50:40
 */

namespace Femaledaily\Address\Plugin;

/**
 * Class RestApiLog
 * @package Femaledaily\Address\Plugin
 */
class RestApiLog
{
    /**
     * @var \Femaledaily\Address\Model\Logger\Logger
     */
    protected $logger;

    /**
     * Plugin constructor.
     * @param \Femaledaily\Address\Model\Logger\Logger $logger
     */
    public function __construct(\Femaledaily\Address\Model\Logger\Logger $logger)
    {
        $this->logger = $logger;
    }

    public function beforeDispatch(
        \Magento\Webapi\Controller\Rest $subject,
        \Magento\Framework\App\RequestInterface $request
    )
    {
        $this->logger->info('SOURCE: ' . $request->getClientIp());
        $this->logger->info('METHOD: ' . $request->getMethod());
        $this->logger->info('PATH: ' . $request->getPathInfo());
        $this->logger->info('CONTENT: ' . $request->getContent() . PHP_EOL);
    }
}