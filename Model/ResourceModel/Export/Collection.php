<?php

declare(strict_types=1);

namespace YellowCard\ProductsExporter\Model\ResourceModel\Export;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use YellowCard\ProductsExporter\Model\Export;
use YellowCard\ProductsExporter\Model\ResourceModel\Export as ExportResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Export::class, ExportResource::class);
    }
}
