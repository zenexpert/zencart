<?php
// -----
// Since the languages are now loaded via classes, the $locales definition
// needs to be globalized for use in payment-methods (e.g. paypalwpp) and
// other processing.
//
global $locales;
$locales = ['en_US', 'en_US.utf8', 'en', 'English_United States.1252'];
@setlocale(LC_TIME, $locales);

$define = [
    'ARIA_DELETE_ITEM_FROM_CART' => 'Delete this item from the cart',
    'ARIA_EDIT_QTY_IN_CART' => 'Edit quantity in cart',
    'ARIA_PAGINATION_' => '',
    'ARIA_PAGINATION_CURRENTLY_ON' => ', now on page %s',
    'ARIA_PAGINATION_CURRENT_PAGE' => 'Current Page',
    'ARIA_PAGINATION_ELLIPSIS_NEXT' => 'Get next group of pages',
    'ARIA_PAGINATION_ELLIPSIS_PREVIOUS' => 'Get previous group of pages',
    'ARIA_PAGINATION_GOTO' => 'Go to ',
    'ARIA_PAGINATION_NEXT_PAGE' => 'Go to Next Page',
    'ARIA_PAGINATION_PAGE_NUM' => 'Page %s',
    'ARIA_PAGINATION_PREVIOUS_PAGE' => 'Go to Previous Page',
    'ARIA_PAGINATION_ROLE_LABEL_FOR' => '%s Pagination',
    'ARIA_PAGINATION_ROLE_LABEL_GENERAL' => 'Pagination',
    'ARIA_QTY_ADD_TO_CART' => 'Enter quantity to add to cart',
    'ASK_A_QUESTION' => 'Ask a question about this item',
    'ATTRIBUTES_PRICE_DELIMITER_PREFIX' => ' ( ',
    'ATTRIBUTES_PRICE_DELIMITER_SUFFIX' => ' )',
    'ATTRIBUTES_WEIGHT_DELIMITER_PREFIX' => ' (',
    'ATTRIBUTES_WEIGHT_DELIMITER_SUFFIX' => ') ',
    'BOX_HEADING_BANNER_BOX' => 'Sponsors',
    'BOX_HEADING_BANNER_BOX2' => 'Have you seen ...',
    'BOX_HEADING_BANNER_BOX_ALL' => 'Sponsors',
    'BOX_HEADING_BESTSELLERS' => 'Bestsellers',
    'BOX_HEADING_BRANDS' => 'Shop by Brand',
    'BOX_HEADING_CATEGORIES' => 'Categories',
    'BOX_HEADING_CURRENCIES' => 'Currencies',
    'BOX_HEADING_CUSTOMER_ORDERS' => 'Quick Re-Order',
    'BOX_HEADING_FEATURED_PRODUCTS' => 'Featured',
    'BOX_HEADING_INFORMATION' => 'Information',
    'BOX_HEADING_LANGUAGES' => 'Languages',
    'BOX_HEADING_LINKS' => '&nbsp;&nbsp;[more]',
    'BOX_HEADING_MANUFACTURERS' => 'Manufacturers',
    'BOX_HEADING_MANUFACTURER_INFO' => 'Manufacturer Info',
    'BOX_HEADING_MORE_INFORMATION' => 'More Information',
    'BOX_HEADING_NOTIFICATIONS' => 'Notifications',
    'BOX_HEADING_REVIEWS' => 'Reviews',
    'BOX_HEADING_SEARCH' => 'Search',
    'BOX_HEADING_SHOPPING_CART' => 'Shopping Cart',
    'BOX_HEADING_SPECIALS' => 'Specials',
    'BOX_HEADING_WHATS_NEW' => 'New Products',
    'BOX_INFORMATION_ABOUT_US' => 'About Us',
    'BOX_INFORMATION_ACCESSIBILITY' => 'Accessibility',
    'BOX_INFORMATION_CONDITIONS' => 'Conditions of Use',
    'BOX_INFORMATION_CONTACT' => 'Contact Us',
    'BOX_INFORMATION_DISCOUNT_COUPONS' => 'Discount Coupons',
    'BOX_INFORMATION_ORDER_STATUS' => 'Order Status',
    'BOX_INFORMATION_PAGE_2' => 'Page 2',
    'BOX_INFORMATION_PAGE_3' => 'Page 3',
    'BOX_INFORMATION_PAGE_4' => 'Page 4',
    'BOX_INFORMATION_PRIVACY' => 'Privacy Notice',
    'BOX_INFORMATION_SHIPPING' => 'Shipping &amp; Returns',
    'BOX_INFORMATION_SITE_MAP' => 'Site Map',
    'BOX_INFORMATION_UNSUBSCRIBE' => 'Newsletter Unsubscribe',
    'BOX_MANUFACTURER_INFO_HOMEPAGE' => '%s Homepage',
    'BOX_MANUFACTURER_INFO_OTHER_PRODUCTS' => 'Other products',
    'BOX_NOTIFICATIONS_NOTIFY' => 'Notify me of updates to <strong>%s</strong>',
    'BOX_NOTIFICATIONS_NOTIFY_REMOVE' => 'Do not notify me of updates to <strong>%s</strong>',
    'BOX_REVIEWS_NO_REVIEWS' => 'There are currently no product reviews.',
    'BOX_REVIEWS_TEXT_OF_5_STARS' => '%s of 5 Stars!',
    'BOX_REVIEWS_WRITE_REVIEW' => 'Write a review on this product.',
    'BOX_SEARCH_ADVANCED_SEARCH' => 'Advanced Search',
    'BOX_SHOPPING_CART_EMPTY' => 'Your cart is empty.',
    'CAPTION_UPCOMING_PRODUCTS' => 'These items will be in stock soon',
    'CART_ITEMS' => 'Items in Cart: ',
    'CART_QUANTITY_SUFFIX' => '&nbsp;x ',
    'CART_SHIPPING_METHOD_ADDRESS' => 'Address:',
    'CART_SHIPPING_METHOD_ALL_DOWNLOADS' => '- Downloads',
    'CART_SHIPPING_METHOD_FREE_TEXT' => 'Free Shipping',
    'CART_SHIPPING_METHOD_RATES' => 'Rates',
    'CART_SHIPPING_METHOD_TEXT' => 'Available Shipping Methods',
    'CART_SHIPPING_METHOD_TO' => 'Ship to: ',
    'CART_SHIPPING_OPTIONS' => 'Estimate Shipping Costs',
    'CART_SHIPPING_QUOTE_CRITERIA' => 'Shipping quotes are based on the address information you selected:',
    'CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS' => 'Featured Products ...',
    'CATEGORIES_BOX_HEADING_PRODUCTS_ALL' => 'All Products ...',
    'CATEGORIES_BOX_HEADING_SPECIALS' => 'Specials ...',
    'CATEGORIES_BOX_HEADING_WHATS_NEW' => 'New Products ...',
    'CATEGORY_COMPANY' => 'Company Details',
    'CATEGORY_PERSONAL' => 'Your Personal Details',
    'CHARSET' => 'utf-8',
    'DATE_FORMAT' => 'm/d/Y',
    'DATE_FORMAT_LONG' => '%A %d %B, %Y',
    'DB_ERROR_NOT_CONNECTED' => 'Error - Could not connect to Database',
    'DOB_FORMAT_STRING' => 'mm/dd/yyyy',
    'DOWNLOADS_CONTROLLER_ON_HOLD_MSG' => 'NOTE: Downloads are not available until payment has been confirmed',
    'EMAIL_SALUTATION' => 'Dear',
    'EMAIL_SEND_FAILED' => 'ERROR: Failed sending email to: "%s" <%s> with subject: "%s"',
    'EMPTY_CART_TEXT_NO_QUOTE' => 'Whoops! Your session has expired ... Please update your shopping cart for Shipping Quote ...',
    'EMP_SHOPPING_FOR_MESSAGE' => 'Currently shopping for %1$s (%2$s).',
    'ENTRY_CITY' => 'City:',
    'ENTRY_CITY_ERROR' => 'Your City must contain a minimum of ' . ENTRY_CITY_MIN_LENGTH . ' characters.',
    'ENTRY_CITY_TEXT' => '*',
    'ENTRY_COMPANY' => 'Company Name:',
    'ENTRY_COMPANY_ERROR' => 'Please enter a company name.',
    'ENTRY_COMPANY_TEXT' => '',
    'ENTRY_COUNTRY' => 'Country:',
    'ENTRY_COUNTRY_ERROR' => 'You must select a country from the Countries pull down menu.',
    'ENTRY_COUNTRY_TEXT' => '*',
    'ENTRY_CUSTOMERS_REFERRAL' => 'Referral Code:',
    'ENTRY_DATE_FROM' => 'Date From:',
    'ENTRY_DATE_OF_BIRTH' => 'Date of Birth:',
    'ENTRY_DATE_OF_BIRTH_ERROR' => 'Is your birth date correct? Our system requires the date in this format: MM/DD/YYYY (eg 05/21/1970)',
    'ENTRY_DATE_OF_BIRTH_TEXT' => '* (eg. 05/21/1970)',
    'ENTRY_DATE_TO' => 'Date To:',
    'ENTRY_EMAIL' => 'Email Address:',
    'ENTRY_EMAIL_ADDRESS' => 'Email Address:',
    'ENTRY_EMAIL_ADDRESS_CHECK_ERROR' => 'Sorry, our system does not understand your email address. Please try again.',
    'ENTRY_EMAIL_ADDRESS_ERROR' => 'Is your email address correct? It should contain at least ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' characters. Please try again.',
    'ENTRY_EMAIL_ADDRESS_ERROR_EXISTS' => 'Our system already has a record of that email address - please try logging in with that email address. If you do not use that address any longer you can correct it in the My Account area.',
    'ENTRY_EMAIL_ADDRESS_TEXT' => '*',
    'ENTRY_EMAIL_CONTENT_CHECK_ERROR' => 'Did you forget your message? We would like to hear from you. You can type your comments in the text area below.',
    'ENTRY_EMAIL_HTML_DISPLAY' => 'HTML',
    'ENTRY_EMAIL_NAME_CHECK_ERROR' => 'Sorry, is your name correct? Our system requires a minimum of ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' characters. Please try again.',
    'ENTRY_EMAIL_TEXT_DISPLAY' => 'TEXT-Only',
    'ENTRY_ENQUIRY' => 'Message:',
    'ENTRY_FAX_NUMBER' => 'Fax Number:',
    'ENTRY_FAX_NUMBER_TEXT' => '',
    'ENTRY_FIRST_NAME' => 'First Name:',
    'ENTRY_FIRST_NAME_ERROR' => 'Is your first name correct? Our system requires a minimum of ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' characters. Please try again.',
    'ENTRY_FIRST_NAME_TEXT' => '*',
    'ENTRY_GENDER' => 'Salutation:',
    'ENTRY_GENDER_ERROR' => 'Please choose a salutation.',
    'ENTRY_GENDER_TEXT' => '*',
    'ENTRY_INCLUDE_SUBCATEGORIES' => 'Include Subcategories',
    'ENTRY_LAST_NAME' => 'Last Name:',
    'ENTRY_LAST_NAME_ERROR' => 'Is your last name correct? Our system requires a minimum of ' . ENTRY_LAST_NAME_MIN_LENGTH . ' characters. Please try again.',
    'ENTRY_LAST_NAME_TEXT' => '*',
    'ENTRY_NAME' => 'Full Name:',
    'ENTRY_NEWSLETTER' => 'Subscribe to Our Newsletter.',
    'ENTRY_NEWSLETTER_TEXT' => '',
    'ENTRY_NICK' => 'Forum Nick Name:',
    'ENTRY_NICK_DUPLICATE_ERROR' => 'That Nick Name is already being used. Please try another.',
    'ENTRY_NICK_TEXT' => '*',
    'ENTRY_PASSWORD' => 'Password:',
    'ENTRY_PASSWORD_CONFIRMATION' => 'Confirm Password:',
    'ENTRY_PASSWORD_CONFIRMATION_TEXT' => '*',
    'ENTRY_PASSWORD_CURRENT' => 'Current Password:',
    'ENTRY_PASSWORD_CURRENT_TEXT' => '*',
    'ENTRY_PASSWORD_ERROR' => 'Your Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.',
    'ENTRY_PASSWORD_ERROR_NOT_MATCHING' => 'The Password Confirmation must match your Password.',
    'ENTRY_PASSWORD_NEW' => 'New Password:',
    'ENTRY_PASSWORD_NEW_ERROR' => 'Your new Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.',
    'ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING' => 'The Password Confirmation must match your new Password.',
    'ENTRY_PASSWORD_NEW_TEXT' => '*',
    'ENTRY_PASSWORD_TEXT' => '* (at least ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters)',
    'ENTRY_POST_CODE' => 'Post/Zip Code:',
    'ENTRY_POST_CODE_ERROR' => 'Your Post/ZIP Code must contain a minimum of ' . ENTRY_POSTCODE_MIN_LENGTH . ' characters.',
    'ENTRY_POST_CODE_TEXT' => '*',
    'ENTRY_PRICE_FROM' => 'Price From:',
    'ENTRY_PRICE_TO' => 'Price To:',
    'ENTRY_RECIPIENT_NAME' => 'Recipient\'s Name:',
    'ENTRY_REQUIRED_SYMBOL' => '*',
    'ENTRY_STATE' => 'State/Province:',
    'ENTRY_STATE_ERROR' => 'Your State must contain a minimum of ' . ENTRY_STATE_MIN_LENGTH . ' characters.',
    'ENTRY_STATE_ERROR_SELECT' => 'Please select a state from the States pull down menu.',
    'ENTRY_STATE_TEXT' => '*',
    'ENTRY_STREET_ADDRESS' => 'Street Address:',
    'ENTRY_STREET_ADDRESS_ERROR' => 'Your Street Address must contain a minimum of ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' characters.',
    'ENTRY_STREET_ADDRESS_TEXT' => '*',
    'ENTRY_SUBURB' => 'Address Line 2:',
    'ENTRY_SUBURB_TEXT' => '',
    'ENTRY_TELEPHONE_NUMBER' => 'Telephone Number:',
    'ENTRY_TELEPHONE_NUMBER_ERROR' => 'Your Telephone Number must contain a minimum of ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters.',
    'ENTRY_TELEPHONE_NUMBER_TEXT' => '*',
    'ERROR_AT_LEAST_ONE_INPUT' => 'At least one of the fields in the search form must be entered.',
    'ERROR_CART_UPDATE' => '<strong>Please update your order.</strong> ',
    'ERROR_CONDITIONS_NOT_ACCEPTED' => 'Please confirm you have read and agree to the terms and conditions bound to this order by ticking the box.',
    'ERROR_CORRECTIONS_HEADING' => 'Please correct the following: <br>',
    'ERROR_CUSTOMERS_ID_INVALID' => 'Customer information cannot be validated!<br>Please login or recreate your account ...',
    'ERROR_DATABASE_MAINTENANCE_NEEDED' => '<a href="https://docs.zen-cart.com/user/troubleshooting/error_71_maintenance_required/" rel="noopener" target="_blank">ERROR 0071 There appears to be a problem with the database. Maintenance is required.</a>',
    'ERROR_DESTINATION_DOES_NOT_EXIST' => 'Error: destination does not exist.',
    'ERROR_DESTINATION_NOT_WRITEABLE' => 'Error:  destination not writeable.',
    'ERROR_FILETYPE_NOT_ALLOWED' => 'Error:  File type not allowed.',
    'ERROR_FILE_NOT_SAVED' => 'Error:  File not saved.',
    'ERROR_FILE_TOO_BIG' => 'Warning: File was too large to upload!<br>Order can be placed but please contact us for help with upload',
    'ERROR_INVALID_FROM_DATE' => 'Invalid From Date.',
    'ERROR_INVALID_KEYWORDS' => 'Invalid keywords.',
    'ERROR_INVALID_TO_DATE' => 'Invalid To Date.',
    'ERROR_MAXIMUM_QTY' => 'The quantity added to your cart has been adjusted because of a restriction on maximum you are allowed. See this item:<br>',
    'ERROR_MISSING_SEARCH_OPTIONS' => 'Missing search options',
    'ERROR_NO_PAYMENT_MODULE_SELECTED' => 'Please select a payment method for your order.',
    'ERROR_PRICE_FROM_MUST_BE_NUM' => 'Price From must be a number.',
    'ERROR_PRICE_TO_LESS_THAN_PRICE_FROM' => 'Price To must be greater than or equal to Price From.',
    'ERROR_PRICE_TO_MUST_BE_NUM' => 'Price To must be a number.',
    'ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED' => 'Please confirm the privacy statement by ticking the box below.',
    'ERROR_PRODUCT' => '<br>The item: ',
    'ERROR_PRODUCT_ATTRIBUTES' => '<br>The item: ',
    'ERROR_PRODUCT_OPTION_SELECTION' => '<br> ... Invalid Option Values Selected ',
    'ERROR_PRODUCT_QUANTITY_MAX' => ' ... Maximum Quantity errors - ',
    'ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART' => ' ... Maximum Quantity errors - ',
    'ERROR_PRODUCT_QUANTITY_MIN' => ',  ... Minimum Quantity errors - ',
    'ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART' => ', has a minimum quantity restriction. ',
    'ERROR_PRODUCT_QUANTITY_ORDERED' => '<br>You ordered a total of: ',
    'ERROR_PRODUCT_QUANTITY_UNITS' => ' ... Quantity Units errors - ',
    'ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART' => ' ... Quantity Units errors - ',
    'ERROR_PRODUCT_STATUS_SHOPPING_CART' => '<br>We are sorry but this product has been removed from our inventory at this time.<br>This item has been removed from your shopping cart.',
    'ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES' => '<br>We are sorry but selected options have changed for this product and have been removed from our inventory at this time.<br>This item has been removed from your shopping cart.',
    'ERROR_QUANTITY_ADJUSTED' => 'The quantity added to your cart has been adjusted. The item you wanted is not available in fractional quantities. The quantity of item:<br>',
    'ERROR_QUANTITY_CHANGED_FROM' => ', has been changed from: ',
    'ERROR_QUANTITY_CHANGED_TO' => ' to ',
    'ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE' => 'Sorry, but we no longer accept billing or shipping addresses in "%s".  Please update this address to continue.',
    'ERROR_TO_DATE_LESS_THAN_FROM_DATE' => 'To Date must be greater than or equal to From Date.',
    'FAILED_TO_ADD_UNAVAILABLE_PRODUCTS' => 'The selected Product(s) are not currently available for purchase...',
    'FEMALE' => 'Ms.',
    'FOOTER_TEXT_BODY' => 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. Powered by <a href="https://www.zen-cart.com" rel="noopener noreferrer" target="_blank">Zen Cart</a>',
    'FORM_REQUIRED_INFORMATION' => '* Required information',
    'FREE_SHIPPING_DESCRIPTION' => 'Free shipping for orders over %s',
    'HEADING_ADDRESS_INFORMATION' => 'Address Information',
    'HEADING_BILLING_ADDRESS' => 'Billing Address',
    'HEADING_DELIVERY_ADDRESS' => 'Delivery Address',
    'HEADING_DOWNLOAD' => 'To download your files click the download button and choose "Save to Disk" from the popup menu.',
    'HEADING_ORDER_COMMENTS' => 'Special Instructions or Order Comments',
    'HEADING_ORDER_DATE' => 'Order Date:',
    'HEADING_ORDER_HISTORY' => 'Status History &amp; Comments',
    'HEADING_ORDER_NUMBER' => 'Order #%s',
    'HEADING_PAYMENT_METHOD' => 'Payment Method',
    'HEADING_PRODUCTS' => 'Products',
    'HEADING_QUANTITY' => 'Qty.',
    'HEADING_SEARCH_HELP' => 'Search Help',
    'HEADING_SHIPPING_METHOD' => 'Shipping Method',
    'HEADING_TAX' => 'Tax',
    'HEADING_TOTAL' => 'Total',
    'HTML_PARAMS' => 'dir="ltr" lang="en"',
    'ICON_ERROR_ALT' => 'Error',
    'ICON_IMAGE_ERROR' => 'error.png',
    'ICON_IMAGE_SUCCESS' => 'success.png',
    'ICON_IMAGE_TINYCART' => 'cart.gif',
    'ICON_IMAGE_TRASH' => 'small_delete.png',
    'ICON_IMAGE_UPDATE' => 'button_update_cart.png',
    'ICON_IMAGE_WARNING' => 'warning.png',
    'ICON_SUCCESS_ALT' => 'Success',
    'ICON_TINYCART_ALT' => 'Add this product to your cart by clicking here.',
    'ICON_TRASH_ALT' => 'Delete this item from the cart by clicking this icon.',
    'ICON_UPDATE_ALT' => 'Change your quantity by highlighting the number in the box, correcting the quantity and clicking this button.',
    'ICON_WARNING_ALT' => 'Warning',
    'IMAGE_ALT_PREFIX' => '(image for)',
    'IMAGE_ALT_TEXT_NO_TITLE' => 'A generic image',
    'JS_ERROR' => 'Errors have occurred during the processing of your form.\n\nPlease make the following corrections:\n\n',
    'JS_ERROR_NO_PAYMENT_MODULE_SELECTED' => '* Please select a payment method for your order.',
    'JS_ERROR_SUBMITTED' => 'This form has already been submitted. Please press OK and wait for this process to be completed.',
    'JS_REVIEW_RATING' => '* Please choose a rating for this item.',
    'JS_REVIEW_TEXT' => '* Please add a few more words to your comments. The review needs to have at least ' . REVIEW_TEXT_MIN_LENGTH . ' characters.',
    'LANGUAGE_CURRENCY' => 'USD',
    'MALE' => 'Mr.',
    'META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT' => 'It\'s Free!',
    'MORE_INFO_TEXT' => '... more info',
    'NOT_LOGGED_IN_TEXT' => 'Not logged in',
    'ORDER_HEADING_DIVIDER' => '&nbsp;-&nbsp;',
    'OTHER_BOX_NOTIFY_REMOVE_ALT' => 'Remove this product notification.',
    'OTHER_BOX_NOTIFY_YES_ALT' => 'Notify me of updates to this product.',
    'OTHER_BOX_WRITE_REVIEW_ALT' => 'Write a review on this product.',
    'OTHER_DOWN_FOR_MAINTENANCE_ALT' => 'The site is currently down for maintenance. Please come back later.',
    'OTHER_IMAGE_BLACK_SEPARATOR' => 'pixel_black.gif',
    'OTHER_IMAGE_BOX_NOTIFY_REMOVE' => 'box_products_notifications_remove.gif',
    'OTHER_IMAGE_BOX_NOTIFY_YES' => 'box_products_notifications.gif',
    'OTHER_IMAGE_BOX_WRITE_REVIEW' => 'box_write_review.gif',
    'OTHER_IMAGE_CALL_FOR_PRICE' => 'call_for_prices.png',
    'OTHER_IMAGE_CUSTOMERS_AUTHORIZATION' => 'customer_authorization.gif',
    'OTHER_IMAGE_CUSTOMERS_AUTHORIZATION_ALT' => 'CUSTOMER APPROVAL IS PENDING ...',
    'OTHER_IMAGE_DOWN_FOR_MAINTENANCE' => 'down_for_maintenance.png',
    'OTHER_IMAGE_PRICE_IS_FREE' => 'free.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_FIVE' => 'stars_5_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_FOUR' => 'stars_4_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_ONE' => 'stars_1_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_THREE' => 'stars_3_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_TWO' => 'stars_2_small.png',
    'OTHER_REVIEWS_RATING_STARS_FIVE_ALT' => 'Five Stars',
    'OTHER_REVIEWS_RATING_STARS_FOUR_ALT' => 'Four Stars',
    'OTHER_REVIEWS_RATING_STARS_ONE_ALT' => 'One Star',
    'OTHER_REVIEWS_RATING_STARS_THREE_ALT' => 'Three Stars',
    'OTHER_REVIEWS_RATING_STARS_TWO_ALT' => 'Two Stars',
    'OUT_OF_STOCK_CANT_CHECKOUT' => 'Products marked with ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' are out of stock or there are not enough in stock to fill your order.<br>Please change the quantity of products marked with (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Thank you',
    'OUT_OF_STOCK_CAN_CHECKOUT' => 'Products marked with ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' are out of stock.<br>Items not in stock will be placed on backorder.',
    'PAGE_ACCOUNT' => 'My Account',
    'PAGE_ACCOUNT_EDIT' => 'Account Information',
    'PAGE_ACCOUNT_HISTORY' => 'Order History',
    'PAGE_ACCOUNT_NOTIFICATIONS' => 'Newsletter Subscriptions',
    'PAGE_ADDRESS_BOOK' => 'Address Book',
    'PAGE_ADVANCED_SEARCH' => 'Search',
    'PAGE_CHECKOUT_SHIPPING' => 'Checkout',
    'PAGE_FEATURED' => 'Featured',
    'PAGE_PRODUCTS_ALL' => 'All Products',
    'PAGE_PRODUCTS_NEW' => 'New Products',
    'PAGE_REVIEWS' => 'Reviews',
    'PAGE_SHOPPING_CART' => 'Shopping Cart',
    'PAGE_SPECIALS' => 'Specials',
    'PAYMENT_JAVASCRIPT_DISABLED' => 'We could not continue with checkout as Javascript is disabled. You must enable it to continue',
    'PAYMENT_METHOD_GV' => 'Gift Certificate/Coupon',
    'PAYMENT_MODULE_GV' => 'GV/DC',
    'PLEASE_SELECT' => 'Please select ...',
    'PREVNEXT_BUTTON_NEXT' => '[Next&nbsp;&raquo;]',
    'PREVNEXT_BUTTON_PREV' => '[&laquo;&nbsp;Prev]',
    'PREVNEXT_TITLE_NEXT_PAGE' => 'Next Page',
    'PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE' => 'Next Set of %d Pages',
    'PREVNEXT_TITLE_PAGE_NO' => 'Page %d',
    'PREVNEXT_TITLE_PREVIOUS_PAGE' => 'Previous Page',
    'PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE' => 'Previous Set of %d Pages',
    'PREV_NEXT_PRODUCT' => 'Product ',
    'PRIMARY_ADDRESS_TITLE' => 'Primary Address',
    'PRODUCTS_ORDER_QTY_TEXT' => 'Add to Cart: ',
    'PRODUCTS_ORDER_QTY_TEXT_IN_CART' => 'Quantity in Cart: ',
    'PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT' => 'Call for Price',
    'PRODUCTS_PRICE_IS_FREE_TEXT' => 'It\'s Free!',
    'PRODUCTS_QUANTITY_MAX_TEXT_LISTING' => 'Max:',
    'PRODUCTS_QUANTITY_MIN_TEXT_LISTING' => 'Min: ',
    'PRODUCTS_QUANTITY_UNIT_TEXT_LISTING' => 'Units: ',
    'PRODUCT_PRICE_DISCOUNT_AMOUNT' => '&nbsp;off',
    'PRODUCT_PRICE_DISCOUNT_PERCENTAGE' => '% off',
    'PRODUCT_PRICE_DISCOUNT_PREFIX' => 'Save:&nbsp;',
    'PRODUCT_PRICE_SALE' => 'Sale:&nbsp;',
    'PRODUCT_PRICE_WHOLESALE' => 'Your Price:&nbsp;',
    'PULL_DOWN_ALL' => 'Please Select',
    'PULL_DOWN_ALL_RESET' => '- RESET - ',
    'PULL_DOWN_DEFAULT' => 'Please Choose Your Country',
    'PULL_DOWN_MANUFACTURERS' => '- Reset -',
    'PULL_DOWN_SHIPPING_ESTIMATOR_SELECT' => 'Please Select',
    'SEND_TO_TEXT' => 'Send Email To:',
    'SET_AS_PRIMARY' => 'Set as Primary Address',
    'SUCCESS_ADDED_TO_CART_PRODUCT' => 'Successfully added Product to the cart ...',
    'SUCCESS_ADDED_TO_CART_PRODUCTS' => 'Successfully added selected Product(s) to the cart ...',
    'SUCCESS_FILE_SAVED_SUCCESSFULLY' => 'Success:  file saved successfully.',
    'TABLE_ATTRIBUTES_QTY_PRICE_PRICE' => 'PRICE',
    'TABLE_ATTRIBUTES_QTY_PRICE_QTY' => 'QTY',
    'TABLE_HEADING_ADDRESS_DETAILS' => 'Address Details',
    'TABLE_HEADING_BUY_NOW' => 'Buy Now',
    'TABLE_HEADING_BYTE_SIZE' => 'File Size',
    'TABLE_HEADING_CREDIT_PAYMENT' => 'Credits Available',
    'TABLE_HEADING_DATE_EXPECTED' => 'Date Expected',
    'TABLE_HEADING_DATE_OF_BIRTH' => 'Verify Your Age',
    'TABLE_HEADING_DOWNLOAD_COUNT' => 'Remaining',
    'TABLE_HEADING_DOWNLOAD_DATE' => 'Link Expires',
    'TABLE_HEADING_DOWNLOAD_FILENAME' => 'Filename',
    'TABLE_HEADING_FEATURED_PRODUCTS' => 'Featured Products',
    'TABLE_HEADING_IMAGE' => 'Product Image',
    'TABLE_HEADING_LOGIN_DETAILS' => 'Login Details',
    'TABLE_HEADING_MANUFACTURER' => 'Manufacturer',
    'TABLE_HEADING_MODEL' => 'Model',
    'TABLE_HEADING_NEW_PRODUCTS' => 'New Products For %s',
    'TABLE_HEADING_PHONE_FAX_DETAILS' => 'Additional Contact Details',
    'TABLE_HEADING_PRICE' => 'Price',
    'TABLE_HEADING_PRIVACY_CONDITIONS' => 'Privacy Statement',
    'TABLE_HEADING_PRODUCTS' => 'Product Name',
    'TABLE_HEADING_PRODUCT_NAME' => 'Item Name',
    'TABLE_HEADING_QUANTITY' => 'Qty.',
    'TABLE_HEADING_REFERRAL_DETAILS' => 'Were You Referred to Us?',
    'TABLE_HEADING_SHIPPING_ADDRESS' => 'Shipping Address',
    'TABLE_HEADING_SPECIALS_INDEX' => 'Monthly Specials For %s',
    'TABLE_HEADING_STATUS_COMMENTS' => 'Comments',
    'TABLE_HEADING_STATUS_DATE' => 'Date',
    'TABLE_HEADING_STATUS_ORDER_STATUS' => 'Order Status',
    'TABLE_HEADING_TOTAL' => 'Total',
    'TABLE_HEADING_UPCOMING_PRODUCTS' => 'Upcoming Products',
    'TABLE_HEADING_WEIGHT' => 'Weight',
    'TEXT_ADMIN_DOWN_FOR_MAINTENANCE' => 'NOTICE: The website is currently down for maintenance to the public',
    'TEXT_ALL_CATEGORIES' => 'All Categories',
    'TEXT_ALL_MANUFACTURERS' => 'All Manufacturers',
    'TEXT_ALSO_PURCHASED_PRODUCTS' => 'Customers who bought this product also purchased...',
    'TEXT_APPROVAL_REQUIRED' => '<strong>NOTE:</strong>  Reviews require prior approval before they will be displayed.',
    'TEXT_ASCENDINGLY' => 'ascendingly',
    'TEXT_ATTRIBUTES_PRICE_WAS' => ' [was: ',
    'TEXT_ATTRIBUTES_QTY_PRICES_HELP' => 'Option Quantity Discounts',
    'TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP' => 'Option Quantity Discounts Onetime Charges',
    'TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK' => 'Quantity Discounts Available',
    'TEXT_ATTRIBUTE_IS_FREE' => ' now is: Free]',
    'TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE' => 'APPROVAL PENDING',
    'TEXT_AUTHORIZATION_PENDING_CHECKOUT' => 'Checkout Unavailable - Approval Pending',
    'TEXT_AUTHORIZATION_PENDING_PRICE' => 'Price Unavailable',
    'TEXT_BANNER_BOX' => 'Please Visit Our Sponsors ...',
    'TEXT_BANNER_BOX2' => 'Check this out today!',
    'TEXT_BANNER_BOX_ALL' => 'Please Visit Our Sponsors ...',
    'TEXT_BASE_PRICE' => 'Starting at: ',
    'TEXT_BEFORE_DOWN_FOR_MAINTENANCE' => 'NOTICE: This website is scheduled to be down for maintenance on: ',
    'TEXT_BY' => ' by ',
    'TEXT_CALL_FOR_PRICE' => 'Call for price',
    'TEXT_CCVAL_ERROR_INVALID_DATE' => 'The expiration date entered for the credit card is invalid. Please check the date and try again.',
    'TEXT_CCVAL_ERROR_INVALID_NUMBER' => 'The credit card number entered is invalid. Please check the number and try again.',
    'TEXT_CCVAL_ERROR_UNKNOWN_CARD' => 'The credit card number starting with %s was not entered correctly, or we do not accept that kind of card. Please try again or use another credit card.',
    'TEXT_CHARGES_LETTERS' => 'Calculated Charge:',
    'TEXT_CHARGES_WORD' => 'Calculated Charge:',
    'TEXT_CLICK_TO_ENLARGE' => 'larger image',
    'TEXT_CLOSE_WINDOW_IMAGE' => ' - Click Image to Close',
    'TEXT_COUPON_GV_RESTRICTION_ZONES' => 'Billing Address Restrictions apply.',
    'TEXT_COUPON_HELP_DATE' => 'The coupon is valid between %s and %s',
    'TEXT_COUPON_HELP_HEADER' => 'The Discount Coupon Redemption Code you have entered is for ',
    'TEXT_COUPON_HELP_MINORDER' => 'You need to spend %s to use this coupon, on qualifying products.',
    'TEXT_COUPON_LINK_TITLE' => 'see the Coupon conditions',
    'TEXT_CURRENT_CLOSE_WINDOW' => '[ Close Window ]',
    'TEXT_CURRENT_REVIEWS' => 'Current Reviews:',
    'TEXT_DATE_ADDED' => 'This product was added to our catalog on %s.',
    'TEXT_DATE_ADDED_LISTING' => 'Date Added:',
    'TEXT_DATE_AVAILABLE' => 'This product will be in stock on %s.',
    'TEXT_DESCENDINGLY' => 'descendingly',
    'TEXT_DISPLAY_NUMBER_OF_ORDERS' => 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> Orders)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS' => 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> Products)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL' => 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> Products)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS' => 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> Featured Products)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW' => 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> New Products)',
    'TEXT_DISPLAY_NUMBER_OF_REVIEWS' => 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> Reviews)',
    'TEXT_DISPLAY_NUMBER_OF_SPECIALS' => 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> Specials)',
    'TEXT_DOWNLOADS_UNLIMITED' => 'Unlimited',
    'TEXT_DOWNLOADS_UNLIMITED_COUNT' => '--- *** ---',
    'TEXT_ERROR' => 'An error has occurred',
    'TEXT_ERROR_OPTION_FOR' => ' On the Option for: ',
    'TEXT_EZPAGES_STATUS_FOOTER_ADMIN' => 'WARNING: EZ-PAGES FOOTER - On for Admin IP Only',
    'TEXT_EZPAGES_STATUS_HEADER_ADMIN' => 'WARNING: EZ-PAGES HEADER - On for Admin IP Only',
    'TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN' => 'WARNING: EZ-PAGES SIDEBOX - On for Admin IP Only',
    'TEXT_FIELD_REQUIRED' => '&nbsp;<span class="alert">*</span>',
    'TEXT_FILESIZE_BYTES' => ' bytes',
    'TEXT_FILESIZE_KBS' => ' KB',
    'TEXT_FILESIZE_MEGS' => ' MB',
    'TEXT_FILESIZE_UNKNOWN' => 'Unknown',
    'TEXT_FOOTER_DISCOUNT_QUANTITIES' => '* Discounts may vary based on options above',
    'TEXT_GV_NAME' => 'Gift Certificate',
    'TEXT_GV_NAMES' => 'Gift Certificates',
    'TEXT_GV_REDEEM' => 'Redemption Code',
    'TEXT_HEADER_DISCOUNTS_OFF' => 'Qty Discounts Unavailable ...',
    'TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE' => 'Qty Discounts New Price',
    'TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF' => 'Qty Discounts Off Price',
    'TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE' => 'Qty Discounts Off Price',
    'TEXT_INFO_SORT_BY' => 'Sort by:',
    'TEXT_INFO_SORT_BY_RECOMMENDED' => 'Recommended',
    'TEXT_INFO_SORT_BY_PRODUCTS_DATE' => 'Date Added - Old to New',
    'TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC' => 'Date Added - New to Old',
    'TEXT_INFO_SORT_BY_PRODUCTS_MODEL' => 'Model',
    'TEXT_INFO_SORT_BY_PRODUCTS_NAME' => 'Product Name',
    'TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC' => 'Product Name - desc',
    'TEXT_INFO_SORT_BY_PRODUCTS_PRICE' => 'Price - low to high',
    'TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC' => 'Price - high to low',
    'TEXT_INVALID_COUPON_ORDER_LIMIT' => 'You have exceeded the total number of orders permitted (%2$u), to use the Coupon "%1$s".',
    'TEXT_INVALID_COUPON_PRODUCT' => 'The Coupon "%1$s" is not valid for any product in your shopping cart.',
    'TEXT_INVALID_FINISHDATE_COUPON' => 'The Coupon "%1$s" is now not valid (expired %2$s).',
    'TEXT_INVALID_REDEEM_COUPON' => 'Coupon code "%s" is not a valid code.',
    'TEXT_INVALID_REDEEM_COUPON_MINIMUM' => 'You must spend at least %2$s to redeem Coupon "%1$s".',
    'TEXT_INVALID_SELECTION' => ' You picked an Invalid Selection: ',
    'TEXT_INVALID_STARTDATE_COUPON' => 'The Coupon "%1$s" is not valid for use until %2$s.',
    'TEXT_INVALID_USER_INPUT' => 'User Input Required<br>',
    'TEXT_INVALID_USES_COUPON' => 'Coupon "%1$s" has already been used the maximum permitted times (%2$u).',
    'TEXT_INVALID_USES_USER_COUPON' => 'You have used Coupon "%1$s" the maximum number of times allowed per customer (%2$u).',
    'TEXT_LETTERS_FREE' => ' Letter(s) free ',
    'TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE' => 'Login for price',
    'TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM' => 'Show Room Only',
    'TEXT_LOGIN_FOR_PRICE_PRICE' => 'Price Unavailable',
    'TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM' => '',
    'TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE' => 'Login to Shop',
    'TEXT_MANUFACTURER' => 'Manufacturer:',
    'TEXT_MAXIMUM_CHARACTERS_ALLOWED' => ' maximum characters allowed',
    'TEXT_MORE_INFORMATION' => 'For more information, please visit this product\'s <a href="%s" rel="noreferrer noopener" target="_blank">webpage</a>.',
    'TEXT_NO_ALL_PRODUCTS' => 'More products will be added soon. Please check back later.',
    'TEXT_NO_CAT_RESTRICTIONS' => 'This coupon is valid for all categories.',
    'TEXT_NO_CAT_TOP_ONLY_DENY' => 'This coupon has specific Product Restrictions.',
    'TEXT_NO_FEATURED_PRODUCTS' => 'More featured products will be added soon. Please check back later.',
    'TEXT_NO_NEW_PRODUCTS' => 'More new products will be added soon. Please check back later.',
    'TEXT_NO_PROD_RESTRICTIONS' => 'This coupon is valid for all products.',
    'TEXT_NO_PROD_SALES' => 'This coupon is not valid for products on sale.',
    'TEXT_NO_SHIPPING_AVAILABLE_ESTIMATOR' => 'Sorry, we have no online options for shipping this order to the address shown.  Please contact us for alternate arrangements!',
    'TEXT_NO_REVIEWS' => 'There are currently no product reviews.',
    'TEXT_NUMBER_SYMBOL' => '# ',
    'TEXT_OF_5_STARS' => '',
    'TEXT_ONETIME_CHARGES' => '*onetime charges = ',
    'TEXT_ONETIME_CHARGES_EMAIL' => "\t" . '*onetime charges = ',
    'TEXT_ONETIME_CHARGE_DESCRIPTION' => ' One time charges may apply',
    'TEXT_ONETIME_CHARGE_SYMBOL' => ' *',
    'TEXT_OPTION_DIVIDER' => '&nbsp;-&nbsp;',
    'TEXT_OUT_OF_STOCK' => 'Out of Stock',
    'TEXT_PASSWORD_FORGOTTEN' => 'Forgot your password?',
    'TEXT_PER_LETTER' => '<br>Price per letter: ',
    'TEXT_PER_WORD' => '<br>Price per word: ',
    'TEXT_PRICE' => 'Price:',
    'TEXT_PRIVACY_CONDITIONS_CONFIRM' => 'I have read and agreed to your privacy statement.',
    'TEXT_PRIVACY_CONDITIONS_DESCRIPTION' => 'Please acknowledge you agree with our privacy statement by ticking the following box. The privacy statement can be read <a href="' . zen_href_link(FILENAME_PRIVACY) . '"><span class="pseudolink">here</span></a>.',
    'TEXT_PRODUCTS_LISTING_ALPHA_SORTER' => '',
    'TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES' => 'Items starting with ...',
    'TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET' => '-- Reset --',
    'TEXT_PRODUCTS_MIX_OFF' => '*Mixed OFF',
    'TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART' => '<br>*You can not mix the options on this item to meet the minimum quantity requirement.*<br>',
    'TEXT_PRODUCTS_MIX_ON' => '*Mixed ON',
    'TEXT_PRODUCTS_MIX_ON_SHOPPING_CART' => '*Mixed Option Values is ON<br>',
    'TEXT_PRODUCTS_QUANTITY' => 'In Stock: ',
    'TEXT_PRODUCTS_WEIGHT' => 'Weight: ',
    'TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART' => 'Add: ',
    'TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART' => 'Add: ',
    'TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART' => 'Add: ',
    'TEXT_PRODUCT_MANUFACTURER' => 'Manufactured by: ',
    'TEXT_PRODUCT_MODEL' => 'Model: ',
    'TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART' => 'Add: ',
    'TEXT_PRODUCT_NOT_FOUND' => 'Sorry, the product was not found.',
    'TEXT_PRODUCT_OPTIONS' => 'Please Choose: ',
    'TEXT_PRODUCT_QUANTITY' => ' Units in Stock',
    'TEXT_PRODUCT_WEIGHT' => 'Shipping Weight: ',
    'TEXT_PRODUCT_WEIGHT_UNIT' => ' lbs',
    'TEXT_REMOVE_REDEEM_COUPON_ZONE' => 'The Coupon "%s" is not valid for the address you have selected.',
    'TEXT_RESULT_PAGE' => '',
    'TEXT_REVIEW_BY' => 'by %s',
    'TEXT_REVIEW_DATE_ADDED' => 'Date Added: %s',
    'TEXT_SEARCH_HELP' => '<p>Keywords may be separated by AND and/or OR statements for greater control of the search results.<br>For example, Microsoft AND mouse would return results that contain both words.<br>However, for mouse OR keyboard, the results returned would contain both or either words.</p><p>Exact matches can be found by enclosing the keywords in double-quotes.<br>For example, "notebook computer" would return results containing the exact string.</p><p>Parentheses may also be used for even finer control of results.<br>For example, Microsoft AND (keyboard OR mouse OR "visual basic").</p>',
    'TEXT_SEARCH_HELP_LINK' => 'Search Help [?]',
    'TEXT_SEARCH_IN_DESCRIPTION' => 'Search In Product Descriptions',
    'TEXT_SHIPPING_BOXES' => 'Boxes',
    'TEXT_SHIPPING_WEIGHT' => ' lbs',
    'TEXT_SHOWCASE_ONLY' => 'Contact Us',
    'TEXT_SORT_PRODUCTS' => 'Sort products ',
    'TEXT_TOP' => 'Top',
    'TEXT_TOTAL_AMOUNT' => '&nbsp;&nbsp;Amount: ',
    'TEXT_TOTAL_ITEMS' => 'Total Items: ',
    'TEXT_TOTAL_WEIGHT' => '&nbsp;&nbsp;Weight: ',
    'TEXT_UNKNOWN_TAX_RATE' => 'Sales Tax',
    'TEXT_VALID_COUPON' => 'Congratulations you have redeemed the Discount Coupon',
    'TEXT_WORDS_FREE' => ' Word(s) free ',
    'TEXT_YOUR_IP_ADDRESS' => 'Your IP Address is: ',
    'TYPE_BELOW' => 'Type a choice below ...',
    'WARNING_COULD_NOT_LOCATE_LANG_FILE' => 'WARNING: Could not locate language file: ',
    'WARNING_NO_FILE_UPLOADED' => 'Warning:  no file uploaded.',
    'WARNING_PRODUCT_QUANTITY_ADJUSTED' => 'Quantity has been adjusted to what is in stock. ',
    'WARNING_SHOPPING_CART_COMBINED' => 'NOTICE: For your convenience, your current shopping cart has been combined with your shopping cart from your last visit. Please review your shopping cart before checking out.',
];

// Definitions that require references to other definitions
    $define['ATTRIBUTES_QTY_PRICE_SYMBOL'] = zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', $define['TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK'], 10, 10) . '&nbsp;';
    $define['BOX_HEADING_GIFT_VOUCHER'] = $define['TEXT_GV_NAME'] . ' Account';
    $define['BOX_INFORMATION_GV'] = $define['TEXT_GV_NAME'] . ' FAQ';
    $define['ENTRY_EMAIL_PREFERENCE'] = 'Newsletter and Email Details';
    if (ACCOUNT_NEWSLETTER_STATUS === '0') {
       $define['ENTRY_EMAIL_PREFERENCE'] = 'Email Details';
    }
    $define['ERROR_NO_INVALID_REDEEM_GV'] = 'Invalid ' . $define['TEXT_GV_NAME'] . ' ' . $define['TEXT_GV_REDEEM'];
    $define['ERROR_NO_REDEEM_CODE'] = 'You did not enter a ' . $define['TEXT_GV_REDEEM'] . '.';
    $define['ERROR_REDEEMED_AMOUNT'] = 'Congratulations, you have redeemed ';
    $define['GV_FAQ'] = $define['TEXT_GV_NAME'] . ' FAQ';
    $define['TABLE_HEADING_CREDIT'] = 'Credits Available';
    $define['TEXT_AVAILABLE_BALANCE'] = 'Your ' . $define['TEXT_GV_NAME'] . ' Account';
    $define['TEXT_BALANCE_IS'] = 'Your ' . $define['TEXT_GV_NAME'] . ' balance is: ';
    $define['TEXT_COUPON_GV_RESTRICTION'] = '<p class="smallText">Discount Coupons may not be applied towards the purchase of ' . $define['TEXT_GV_NAMES'] . '. Limit 1 coupon per order.</p>';
    $define['TEXT_SEND_OR_SPEND'] = 'You have a balance available in your ' . $define['TEXT_GV_NAME'] . ' account. You may spend it or send it to someone else. To send click the button below.';
    $define['VOUCHER_BALANCE'] = $define['TEXT_GV_NAME'] . ' Balance ';

return $define;
