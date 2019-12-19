# ExpertAnalysisGroup 2019

## **Installation**

### Wordpress Configuration:

#### Page Steup

| Page                 |         Slug         |                  Content |
| -------------------- | :------------------: | -----------------------: |
| Front Page           |          -           |    handled by ACF fields |
| Shop                 |       reports        |                        - |
| Cart                 |         cart         |     `[woocommerce_cart]` |
| Checkout             |       checkout       | `[woocommerce_checkout]` |
| Contact              |       contact        | contact form 7 shortcode |
| My Account           |      my-account      | [woocommerce_my_account] |
| Investments          |     investments      |    handled by ACF fields |
| Regulated Servicess  |       services       |    handled by ACF fields |
| Privacy Policy       |    privacy-policy    |       use content editor |
| Registration         |       register       |                        - |
| Terms and Conditions | terms-and-conditions |       use content editor |

**Use a Static Front Page:**
_Settings > Reading > Use static front page_

**Disable guest checkout:**
_WooCommerce > Settings > Accounts & Privacy > untick Allow customers to place orders without an account_

**Disable checkout account creation:**
_WooCommerce > Settings > Accounts & Privacy > untick Allow customers to create an account during checkout_

**Disable My Account user registration:**
_WooCommerce > Settings > Accounts & Privacy > untick Allow customers to create an account on the "My account" page_

**Generate user name on account creation:**
_WooCommerce > Settings > Accounts & Privacy > tick When creating an account, automatically generate an account username for the customer based on their name, surname or email_

**Force file downloads on purchase:**
_WooCommerce > Settings > Downloads > File download method > Force Downloads_

**Files Require Login:**
_WooCommerce > Settings > Downloads > tick Downloads Require Login_

#### **Additional Notes:**

- Only one of a unique report can be purchased per checkout
- Download limits (time + amount) are not displayed on the My Account > Downloads section
- No payment gateways configured yet, as the WC stylesheet is not used, CSS for each payment gateway will have to be added manually
-

## **Required Plugins**

- [WooCommerce ](https://en-gb.wordpress.org/plugins/woocommerce/)\*
- [Advanced Custom Fields ](https://www.advancedcustomfields.com/)\*
- [EAG Functionality Plugin ](https://github.com/oliwright1994/EAG-Functionality-Plugin)\*
- [Advanced Woo Search](https://en-gb.wordpress.org/plugins/advanced-woo-search/)
- [Contact Form 7](https://en-gb.wordpress.org/plugins/contact-form-7/)

\* Important plugin for core functionality of the site

## **Related Repositories**

[EAG Functionality Plugin](https://github.com/oliwright1994/EAG-Functionality-Plugin)

## TODO:

- Display error messages on error registering with the WC registration proces on the _Register_ page
- Add a way for users to view PDFs of purchased files in browser
- Improve Web Accessability
- Polish and test mobile menus and responsiveness
- Style My Account pages layout
- Configure WC store set-up and test payment gateways

#### Contributors:

[Oli Wright](https://github.com/oliwright1994)

Based on Underscores https://underscores.me/, (C) 2012-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)

normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
