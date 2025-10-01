# Hyvä Compatibility for Payrexx Payments

The **Hyvä Compatibility for Payrexx Payments** extension enables seamless integration of **Payrexx Payment Solutions** with **Hyvä Themes** and **Hyvä Checkout** in Magento 2.

**Note:** The **PayrexxPaymentGateway** plugin is required for this compatibility extension.

---

## Installation

### 1. Download the latest version of the extension as a ZIP file.

### 2. Place the Plugin in Magento
1. Open the `/app/` directory in your Magento 2 root folder.  
2. Create the folder structure:
   app/code/Payrexx/HyvaPayrexxCompatibility/

3. Extract the contents of the ZIP file into this directory.

### 3. Activate the Extension
1. Enable Extension via command line.
2. Go to Magento root directory and execute the following commands
```bash
bin/magento setup:upgrade

bin/magento setup:di:compile

bin/magento cache:clean
