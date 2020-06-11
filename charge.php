<?php

require_once('vendor/autoload.php');


\Stripe\Stripe::setApiKey('sk_test_51GsE6hG468jMlYSeFKa9nxErCZ9oJCCryIPOTcVUDRCM3DWV0q6NScWa2LNv11lVVUMeORoF4ShWvPsbj7AknXRr00JDZe1SZD');

// Hide POST ARRAY

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $POST['stripeToken'];

//echo $token;

//Creating customer in Stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

//Charge Customer with amount, currency used, and what transaction was for.
$charge = \Stripe\Charge::create(array(
    "amount" => 4000,
    "currency" => "usd",
    "description" => "Web Services Inc Subscription",
    "customer" => $customer-> id
));

// customer data
$customerData = [
    'id' => $charge->customer,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email
];

//print_r($charge);

// Redirect to successs page to let them know if it was successful and what they bought
header('location: success.php?tid=' .$charge->id. '&product='.$charge->description);