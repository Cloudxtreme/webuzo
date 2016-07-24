<?php
/*
* Start page
*/
$config['start_page'] = "6";
$config['rules_page'] = "4";
$config['page_search'] = "17";
$config['basket_page'] = "15";
$config['order_page'] = "16";
$config['order_print'] = "18";

$config['products_list'] = "6";

$config['currency_symbol'] = "EUR";
$config['orders_email'] = "";

/*
* Your website's title, description
*/
$config['logo'] = "Quick<span>.</span><strong>Cart</strong>";
$config['title'] = "[[site_name]]";
$config['description'] = "[[site_desc]]";
$config['slogan'] = "Fast and simple shopping cart";
$config['foot_info'] = "All rights reserved";

// Define all page ids where page tree for product list should be displayed
$aDisplayPagesTreeInProductsList = Array( $config['page_search']=>true );

/*
// Define characters that you want to be replaced in URL addresses, for example: ą to a, ü to u, etc
// Default charsets are specified in the core/libraries/trash.php in function change2Latin()
function change2Latin( $sContent ){
  return str_replace(
    Array( 'ś', 'ą' ), // from
    Array( 's', 'a' ), // to
    $sContent
  );
} // end function change2Latin
*/
?>