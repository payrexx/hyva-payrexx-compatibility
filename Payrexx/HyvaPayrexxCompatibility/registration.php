<?php
/**
 * Hyva Payrexx Compatibility
 *
 * @author      Payrexx <support@payrexx.com>
 * @copyright   Payrexx AG
 * @package     magento2
 * @subpackage  Payrexx_HyvaPayrexxCompatibility
 */

use Magento\Framework\Component\ComponentRegistrar;
ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Payrexx_HyvaPayrexxCompatibility',
    __DIR__
);
