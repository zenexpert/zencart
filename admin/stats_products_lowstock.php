<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: stats_products_lowstock.php 1969 2005-09-13 06:57:21Z drbyte $
//
require('includes/application_top.php');
?>
<!doctype html>
<html <?php echo HTML_PARAMS; ?>>
  <head>
      <?php require DIR_WS_INCLUDES . 'admin_html_head.php'; ?>
  </head>
  <body>
    <!-- header //-->
    <?php require(DIR_WS_INCLUDES . 'header.php'); ?>
    <!-- header_eof //-->
    <div class="container-fluid">
      <h1 class="pageHeading"><?php echo HEADING_TITLE; ?></h1>
      <!-- body //-->
        <div class="table-responsive">
      <table class="table table-hover">
        <thead class="table-dark">
          <tr class="dataTableHeadingRow">
            <th class="dataTableHeadingContent right"><?php echo TABLE_HEADING_NUMBER; ?></th>
            <th class="dataTableHeadingContent"><?php echo TABLE_HEADING_PRODUCTS_NAME; ?></th>
            <th class="dataTableHeadingContent text-center"><?php echo TABLE_HEADING_VIEWED; ?></th>
          </tr>
        </thead>
        <tbody>
            <?php
            $products_query_raw = "SELECT p.products_id, pd.products_name, p.products_quantity
                                   FROM " . TABLE_PRODUCTS . " p,
                                        " . TABLE_PRODUCTS_DESCRIPTION . " pd
                                   WHERE p.products_id = pd.products_id
                                   AND pd.language_id = " . (int)$_SESSION['languages_id'] . "
                                   ORDER BY p.products_quantity, pd.products_name";
            $products_split = new splitPageResults($_GET['page'], MAX_DISPLAY_SEARCH_RESULTS_REPORTS, $products_query_raw, $products_query_numrows);
            $products = $db->Execute($products_query_raw);

            foreach ($products as $productRecord) {
                $productData = (new Product((int)$productRecord['products_id']))->withDefaultLanguage();
                $product = $productData->getData();

              // only show low stock on products that can be added to the cart
              if ($productData->allowsAddToCart()) {
                $cPath = zen_get_product_path($product['products_id']);
                ?>
              <tr class="dataTableRow" onclick="document.location.href = '<?php echo zen_href_link(FILENAME_PRODUCT, '&product_type=' . $product['products_type'] . '&cPath=' . $cPath . '&pID=' . $product['products_id'] . '&action=new_product'); ?>'">
                <td class="dataTableContent text-right"><?php echo $product['products_id']; ?></td>
                <td class="dataTableContent"><a href="<?php echo zen_href_link(FILENAME_PRODUCT, '&product_type=' . $product['products_type'] . '&cPath=' . $cPath . '&pID=' . $product['products_id'] . '&action=new_product'); ?>"><?php echo $product['products_name']; ?></a></td>
                <td class="dataTableContent text-center"><?php echo $product['products_quantity']; ?></td>
              </tr>
              <?php
            }
          }
          ?>
        </tbody>
      </table>
        </div>
        <div class="table-responsive">
      <table class="table">
        <tr>
          <td><?php echo $products_split->display_count($products_query_numrows, MAX_DISPLAY_SEARCH_RESULTS_REPORTS, $_GET['page'], TEXT_DISPLAY_NUMBER_OF_PRODUCTS); ?></td>
          <td class="text-right"><?php echo $products_split->display_links($products_query_numrows, MAX_DISPLAY_SEARCH_RESULTS_REPORTS, MAX_DISPLAY_PAGE_LINKS, $_GET['page']); ?></td>
        </tr>
      </table>
        </div>
      <!-- body_text_eof //-->
    </div>
    <!-- body_eof //-->

    <!-- footer //-->
    <?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
    <!-- footer_eof //-->
  </body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>
