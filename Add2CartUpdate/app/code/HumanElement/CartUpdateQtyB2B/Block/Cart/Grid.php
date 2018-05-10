<?php
namespace HumanElement\CartUpdateQtyB2B\Block\Cart;

use HumanElement\CartUpdateQtyB2B\Helper\Data as QtyDataHelper;

class Grid extends \Magento\Checkout\Block\Cart\Grid
{
    /**
     * @var \HumanElement\CartUpdateQtyB2B\Helper\Data $qtyDataHelper
     */
    protected $qtyDataHelper;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Customer\Model\Session $customerSession
     * @param \Magento\Checkout\Model\Session $checkoutSession
     * @param \Magento\Catalog\Model\ResourceModel\Url $catalogUrlBuilder
     * @param \Magento\Checkout\Helper\Cart $cartHelper
     * @param \Magento\Framework\App\Http\Context $httpContext
     * @param \Magento\Quote\Model\ResourceModel\Quote\Item\CollectionFactory $itemCollectionFactory
     * @param \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $joinProcessor
     * @param array $data
     */

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Catalog\Model\ResourceModel\Url $catalogUrlBuilder,
        \Magento\Checkout\Helper\Cart $cartHelper,
        \Magento\Framework\App\Http\Context $httpContext,
        \Magento\Quote\Model\ResourceModel\Quote\Item\CollectionFactory $itemCollectionFactory,
        \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $joinProcessor,
        QtyDataHelper $qtyDataHelper,
        array $data = []
    ){
        $this->qtyDataHelper = $qtyDataHelper;
        parent::__construct(
            $context,
            $customerSession,
            $checkoutSession,
            $catalogUrlBuilder,
            $cartHelper,
            $httpContext,
            $itemCollectionFactory,
            $joinProcessor,
            $data
        );
    }

    public function _toHtml()
    {
        if ($this->qtyDataHelper->isEnabled()) {
            return parent::_toHtml();
        }
        return '';
    }
}