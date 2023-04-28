<?php

declare(strict_types=1);

namespace YellowCard\ProductsExporter\Cron;

use Psr\Log\LoggerInterface;

class Cron
{
    /**
     * @param LoggerInterface $logger
     */
    public function __construct(private readonly LoggerInterface $logger)
    {
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
