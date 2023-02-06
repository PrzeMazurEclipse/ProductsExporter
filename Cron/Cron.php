<?php

declare(strict_types=1);

namespace YellowCard\ProductsExporter\Cron;

use Psr\Log\LoggerInterface;

class Cron
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return $this
     */
    public function execute()
    {
        $this->logger->info('yellowcard');

        return $this;
    }
}
