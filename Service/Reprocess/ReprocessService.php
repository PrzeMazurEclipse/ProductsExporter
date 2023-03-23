<?php

declare(strict_types=1);

namespace YellowCard\ProductsExporter\Service\Reprocess;

class ReprocessService
{
    public function __construct(
        private readonly LoadOrdersService $loadOrderService
    ) {
    }
    public function Reprocess(array $specificRaport)
    {
        $orders = $this->loadOrderService->execute($specificRaport);
    }
}
