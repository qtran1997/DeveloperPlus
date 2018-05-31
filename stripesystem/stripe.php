<?php
include "../loginsystem/dbh.php";
session_start();
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

$id = $_SESSION['id'];
echo '<h1>Successfully charged $0.50!</h1>';
$sql = "UPDATE aclickerlogin SET pb= '1' WHERE id ='$id'";
$result = mysqli_query($conn, $sql);
$_SESSION['pb'] = 1;
header("Location: ../accountpage.php?purchased=1");
?>