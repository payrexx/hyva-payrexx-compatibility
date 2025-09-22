<?php
/**
 * Hyva Payrexx Compatibility
 *
 * @author      Payrexx <support@payrexx.com>
 * @copyright   Payrexx AG
 * @package     magento2
 * @subpackage  Payrexx_HyvaPayrexxCompatibility
 */

namespace Payrexx\HyvaPayrexxCompatibility\Model\Payment;

use Hyva\Checkout\Model\Magewire\Payment\AbstractPlaceOrderService;
use Magento\Quote\Model\Quote;

class PayrexxPlaceOrderService extends AbstractPlaceOrderService
{

    public function canRedirect(): bool
    {
        return true;
    }

    /**
     * Return the Payrexx redirect URL after placing order
     */
    public function getRedirectUrl(Quote $quote, ?int $orderId = null): string
    {
        return 'payrexx/payment/redirect';
    }
}
