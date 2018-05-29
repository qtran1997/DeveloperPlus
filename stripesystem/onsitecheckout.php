<?php
  require_once('./config.php');

  $token  = $_POST['stripeToken'];
  $email  = $_SESSION['email'];

  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 50,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $0.50!</h1>';
?>