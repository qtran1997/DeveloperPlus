<?php
require_once('C:/xampp/htdocs/SheekClicker/stripesystem/stripe-php-6.6.0/init.php');

$stripe = array(
    "secret_key"      => "sk_test_UmL11d78fHX8EnJYHWffxr9w",
    "publishable_key" => "pk_test_Zpooc1w4cUlZMOMsrHrs85V9"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>