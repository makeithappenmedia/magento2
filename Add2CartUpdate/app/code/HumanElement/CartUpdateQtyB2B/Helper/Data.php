<?php
namespace HumanElement\CartUpdateQtyB2B\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const CONFIG_PATH_BASE = 'cart_update_qty_b2b/general';
    const CONFIG_PATH_ENABLED = 'cart_update_qty_b2b/general/enabled';

    protected $storeManager;

    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager,
        CollectionFactory $categoryCollectionFactory
    ) {
        parent::__construct($context);
        $this->storeManager = $storeManager;
    }

    public function isEnabled($store = null) {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_PATH_ENABLED, ScopeInterface::SCOPE_STORE, $store);
    }

}