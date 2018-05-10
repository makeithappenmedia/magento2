<?php

namespace HumanElement\CartUpdateQtyB2B\Controller\Cart;

use Magento\Checkout\Controller\Cart\UpdatePost as ParentUpdatePost;

class UpdatePost extends ParentUpdatePost
{
    /**
     * Update customer's shopping cart
     *
     * @return void
     */
    protected function _updateShoppingCart()
    {
        try {
            $cartData = $this->getRequest()->getParam('cart');
            if (is_array($cartData)) {
                $filter = new \Zend_Filter_LocalizedToNormalized(
                    ['locale' => $this->_objectManager->get('Magento\Framework\Locale\ResolverInterface')->getLocale()]
                );
                foreach ($cartData as $index => $data) {
                    if (isset($data['qty'])) {
                        $cartData[$index]['qty'] = $filter->filter(trim($data['qty']));
                    }
                }
                if (!$this->cart->getCustomerSession()->getCustomerId() && $this->cart->getQuote()->getCustomerId()) {
                    $this->cart->getQuote()->setCustomerId(null);
                }

                $cartData = $this->cart->suggestItemsQty($cartData);
                $this->cart->updateItems($cartData)->save();
            }
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $this->messageManager->addError(
                $this->_objectManager->get('Magento\Framework\Escaper')->escapeHtml($e->getMessage())
            );

            if (isset($cartData) && is_array($cartData)) {
                foreach ($cartData as $index => $data) {
                    $cartItem = $this->cart->getQuote()->getItemById($index);
                    if ($cartItem) {
                        $product = $cartItem->getProduct();
                        $productName = $product->getName();
                        $cartItemOrigQty = $cartItem->getOrigData('qty');
                        if (isset($data['before_suggest_qty'], $data['qty'])
                            && $data['before_suggest_qty'] === $data['qty']
                            && $data['qty'] != $cartItemOrigQty
                            && preg_match('/You can buy this product only in quantities of .* at a time/', $e->getMessage())
                        ) {
                            $this->messageManager->addError(
                                $this->_objectManager->get('Magento\Framework\Escaper')->escapeHtml('We don\'t have as many "' . $productName . '" as you requested.')
                            );
                        }
                    }
                }
            }
        } catch (\Exception $e) {
            $this->messageManager->addException($e, __('We can\'t update the shopping cart.'));
            $this->_objectManager->get('Psr\Log\LoggerInterface')->critical($e);
        }
    }

    protected function _updateShoppingCartSingle($lineItemProductId)
    {
        try {

            $cartData = $this->getRequest()->getParam('cart');

            // get product id of individual line item the update button was hit for
            $prodId = $lineItemProductId;

            if (is_array($cartData)) {
                $filter = new \Zend_Filter_LocalizedToNormalized(
                    ['locale' => $this->_objectManager->get('Magento\Framework\Locale\ResolverInterface')->getLocale()]
                );


                foreach ($cartData as $index => $data) {

                    // only get the qty of individual prod id and not the whole cart
                    if($index == $prodId) {

                        if (isset($data['qty'])) {
                            $cartData[$index]['qty'] = $filter->filter(trim($data['qty']));
                        }
                        $cartDataSingle[$index] = $cartData[$index];
                        $cartDataSingle[$index]['qty'] = $cartData[$index]['qty'];

                    }

                }


                if (!$this->cart->getCustomerSession()->getCustomerId() && $this->cart->getQuote()->getCustomerId()) {
                    $this->cart->getQuote()->setCustomerId(null);
                }

                // update qty for individual prod id processed in the foreach above
                $cartDataSingle = $this->cart->suggestItemsQty($cartDataSingle);
                $this->cart->updateItems($cartDataSingle)->save();

            }
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $this->messageManager->addError(
                $this->_objectManager->get('Magento\Framework\Escaper')->escapeHtml($e->getMessage())
            );

            if (isset($cartData) && is_array($cartData)) {
                foreach ($cartData as $index => $data) {

                    if($index == $prodId) {

                        $cartItem = $this->cart->getQuote()->getItemById($index);
                        if ($cartItem) {
                            $product = $cartItem->getProduct();
                            $productName = $product->getName();
                            $cartItemOrigQty = $cartItem->getOrigData('qty');
                            if (isset($data['before_suggest_qty'], $data['qty'])
                                && $data['before_suggest_qty'] === $data['qty']
                                && $data['qty'] != $cartItemOrigQty
                                && preg_match('/You can buy this product only in quantities of .* at a time/', $e->getMessage())
                            ) {
                                $this->messageManager->addError(
                                    $this->_objectManager->get('Magento\Framework\Escaper')->escapeHtml('We don\'t have as many "' . $productName . '" as you requested.')
                                );
                            }
                        }

                    }

                }
            }


        } catch (\Exception $e) {
            $this->messageManager->addException($e, __('We can\'t update the shopping cart.'));
            $this->_objectManager->get('Psr\Log\LoggerInterface')->critical($e);
        }

    }

    /**
     * Update shopping cart data action
     *
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function execute()
    {
        if (!$this->_formKeyValidator->validate($this->getRequest())) {
            return $this->resultRedirectFactory->create()->setPath('*/*/');
        }

        $updateAction = (string)$this->getRequest()->getParam('update_cart_action');

        // product id comes through when editing by lineitem
        // we need it later but need to ignore it right now
        if(strpos($updateAction,'update_qty_lineitem') !== false) {
            if(preg_match("/\[\d+\]/", $updateAction, $test)){
                $lineItemProdId = trim($test[0],"[]");
            }
            $updateAction = preg_replace("/\[\d+\]/", "", $updateAction);
        }

        switch ($updateAction) {
            case 'empty_cart':
                $this->_emptyShoppingCart();
                break;
            case 'update_qty':
                $this->_updateShoppingCart();
                break;
            // new case for individual line item update
            case 'update_qty_lineitem':
                $this->_updateShoppingCartSingle($lineItemProdId);
                break;
            default:
                $this->_updateShoppingCart();
        }

        return $this->_goBack();
    }

}
