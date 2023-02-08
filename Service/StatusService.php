<?php

declare(strict_types=1);

namespace YellowCard\ProductsExporter\Service;

use Magento\Framework\App\Config\ScopeConfigInterface;

class StatusService
{
    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(private ScopeConfigInterface $scopeConfig)
    {
    }

    /**
     * Returns status of orders, that client would like to export products from. Provided in module configuration
     *
     * @return string
     */
    public function getStatus(): string
    {
        $status = $this->scopeConfig->getValue('yellowcard/general/statuses');
        return $status;
    }
}
