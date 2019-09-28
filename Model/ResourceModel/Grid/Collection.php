<?php

namespace Xigen\CustomerInfo\Model\ResourceModel\Grid;

use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;

/**
 * Class Collection
 * @package Xigen\CustomerInfo\Model\ResourceModel\Grid
 */
class Collection extends SearchResult
{
    /**
     * Init collection select
     * @return $this
     */
    protected function _initSelect()
    {
        parent::_initSelect();
        $this->getSelect()->joinLeft(
            ['customer_log' => $this->getTable('customer_log')],
            'customer_log.customer_id = main_table.entity_id',
            ['last_login_at']
        )->joinLeft(
            ['sales_order_grid' => $this->getTable('sales_order_grid')],
            'sales_order_grid.customer_id = customer_log.customer_id',
            ['max(sales_order_grid.created_at) as order_created_at']
        )
            ->group('main_table.entity_id');

        $this->addFilterToMap('customer_id', 'customer_log.customer_id');
        $this->addFilterToMap('created_at', 'main_table.created_at');

        // echo (string) $this->getSelect();

        return $this;
    }
}
