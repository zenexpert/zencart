<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: brittainmark 2022 Aug 14 Modified in v1.5.8-alpha2 $
 */
require('includes/application_top.php');

require(DIR_WS_CLASSES . 'currencies.php');
$currencies = new currencies();

$_GET['start_date'] = (!isset($_GET['start_date']) ? date("m-d-Y", (time())) : $_GET['start_date']);
$_GET['end_date'] = (!isset($_GET['end_date']) ? date("m-d-Y", (time())) : $_GET['end_date']);
$_GET['referral_code'] = (!isset($_GET['referral_code']) ? '0' : $_GET['referral_code']);

include DIR_FS_CATALOG . DIR_WS_CLASSES . 'order.php';
?>
<!doctype html>
<html <?php echo HTML_PARAMS; ?>>
  <head>
      <?php require DIR_WS_INCLUDES . 'admin_html_head.php'; ?>
  </head>
  <body>
    <!-- header //-->
    <?php
    require(DIR_WS_INCLUDES . 'header.php');
    ?>
    <!-- header_eof //-->
    <!-- body //-->
    <div class="container-fluid">
      <!-- body_text //-->

      <h1 class="pageHeading"><?php echo HEADING_TITLE; ?></h1>
      <?php
// select all customer_referrals
      $customers_referral_query = "SELECT customers_referral, count(*) AS count FROM " . TABLE_CUSTOMERS . " WHERE customers_referral != '' GROUP BY customers_referral";
      $customers_referral = $db->Execute($customers_referral_query);

      $customers_referrals = array();
      $customers_referrals[] = array(
        'id' => '0',
        'text' => TEXT_REFERRAL_UNKNOWN);

      foreach ($customers_referral as $customer_referral) {
        $customers_referrals[] = array(
          'id' => $customer_referral['customers_referral'],
          'text' => $customer_referral['customers_referral'] . ' (' . $customer_referral['count'] . ')');
      }
      ?>
      <?php echo zen_draw_form('new_date', FILENAME_STATS_CUSTOMERS_REFERRALS, '', 'get', 'class="form-horizontal"'); ?>
      <?php echo zen_hide_session_id(); ?>
      <?php echo zen_draw_hidden_field('action', 'new_date'); ?>
      <?php echo zen_draw_hidden_field('start_date', $_GET['start_date']); ?>
      <?php echo zen_draw_hidden_field('end_date', $_GET['end_date']); ?>
      <div class="form-group row mb-3">
          <?php echo zen_draw_label(TEXT_INFO_SELECT_REFERRAL, 'referral_code', 'class="form-label col-sm-3"'); ?>
        <div class="col-sm-9 col-md-6">
            <?php echo zen_draw_pull_down_menu('referral_code', $customers_referrals, $_GET['referral_code'], 'onChange="this.form.submit();" class="form-control"'); ?>
        </div>
      </div>
      <?php echo '</form>'; ?>
      <?php echo zen_draw_form('search', FILENAME_STATS_CUSTOMERS_REFERRALS, '', 'get', 'class="form-horizontal"'); ?>
      <?php echo zen_draw_hidden_field('referral_code', $_GET['referral_code']); ?>
      <?php echo zen_hide_session_id(); ?>
      <div class="form-group row mb-3">
          <?php echo zen_draw_label(TEXT_INFO_START_DATE, 'start_date', 'class="form-label col-sm-3"'); ?>
        <div class="col-sm-9 col-md-6">
            <?php echo zen_draw_input_field('start_date', $_GET['start_date'], 'class="form-control"'); ?>
        </div>
      </div>
      <div class="form-group row mb-3">
          <?php echo zen_draw_label(TEXT_INFO_END_DATE, 'end_date', 'class="form-label col-sm-3"'); ?>
        <div class="col-sm-9 col-md-6">
            <?php echo zen_draw_input_field('end_date', $_GET['end_date'], 'class="form-control"'); ?>
        </div>
      </div>
      <div class="col-sm-12 text-right"><button type="submit" class="btn btn-primary"><?php echo IMAGE_DISPLAY; ?></button></div>
      <?php echo '</form>'; ?>


      <?php
// reverse date from m-d-y to y-m-d
      $date1 = explode("-", $_GET['start_date']);
      $m1 = $date1[0];
      $d1 = $date1[1];
      $y1 = $date1[2];

      $date2 = explode("-", $_GET['end_date']);
      $m2 = $date2[0];
      $d2 = $date2[1];
      $y2 = $date2[2];

      $sd = $y1 . '-' . $m1 . '-' . $d1 . ' 00:00:00';
      $ed = $y2 . '-' . $m2 . '-' . $d2 . ' 23:59:59';

//  $sd = $_GET['start_date'];
//  $ed = $_GET['end_date'];
      if ($_GET['referral_code'] == '0') {
        $customers_orders_query = "SELECT c.customers_id, c.customers_referral, o.orders_id, o.date_purchased, o.order_total, o.coupon_code
                                   FROM " . TABLE_CUSTOMERS . " c,
                                        " . TABLE_ORDERS . " o
                                   WHERE c.customers_id = o.customers_id
                                   AND c.customers_referral = ''
                                   AND (o.date_purchased >= :sd: AND o.date_purchased <= :ed:)
                                   ORDER BY o.date_purchased, o.orders_id";
      } else {
        $customers_orders_query = "SELECT c.customers_id, c.customers_referral, o.orders_id, o.date_purchased, o.order_total, o.coupon_code
                                   FROM " . TABLE_CUSTOMERS . " c,
                                        " . TABLE_ORDERS . " o
                                   WHERE c.customers_id = o.customers_id
                                   AND c.customers_referral = :refcode:
                                   AND (o.date_purchased >= :sd: AND o.date_purchased <= :ed:)
                                   ORDER BY o.date_purchased, o.orders_id";
      }
      $customers_orders_query = $db->bindVars($customers_orders_query, ':ed:', $ed, 'date');
      $customers_orders_query = $db->bindVars($customers_orders_query, ':sd:', $sd, 'date');
      $customers_orders_query = $db->bindVars($customers_orders_query, ':refcode:', $_GET['referral_code'], 'string');
      $customers_orders = $db->Execute($customers_orders_query);
      ?>
        <div class="table-responsive">
        <table class="table">
          <?php
          foreach ($customers_orders as $customers_order) {
            $current_orders_id = $customers_order['orders_id'];
            $order = new order($customers_order['orders_id']);
            ?>
          <tr>
            <td colspan="4"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr>
            <td class="main"><?php echo zen_date_long($customers_order['date_purchased']); ?></td>
            <td class="main"><?php echo TEXT_ORDER_NUMBER; ?> <?php echo $customers_order['orders_id']; ?></td>
            <td class="main"><?php echo (!empty($customers_order['coupon_code']) ? TEXT_COUPON_ID . ' ' . $customers_order['coupon_code'] : ''); ?></td>
            <td class="main"><a href="<?php echo zen_href_link(FILENAME_ORDERS, zen_get_all_get_params(array('oID', 'action')) . 'oID=' . $customers_order['orders_id'] . '&action=edit', 'NONSSL'); ?>" class="btn btn-primary" role="button"><?php echo IMAGE_DETAILS; ?></a></td>
          </tr>

          <?php for ($i = 0, $n = sizeof($order->totals); $i < $n; $i++) { ?>
            <tr>
              <td colspan="2" class="<?php echo str_replace('_', '-', $order->totals[$i]['class']); ?>-Text"><?php echo $order->totals[$i]['title']; ?></td>
              <td colspan="2" class="<?php echo str_replace('_', '-', $order->totals[$i]['class']); ?>-Amount text-right"><?php echo $order->totals[$i]['text']; ?></td>
            </tr>
          <?php } ?>
        <?php } ?>
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
