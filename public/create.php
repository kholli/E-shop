<?php

require 'vendor/autoload.php';

// This is a sample test API key. Sign in to see examples pre-filled with your key.
\Stripe\Stripe::setApiKey('sk_test_51IeJyqGqxTFkMeeJPuIbfHcw6hhrNUqcyzji3x0QRmwY9pOYNMrOXi2srQ3NQxVzfWv0ul0KiakGJTHCA9nwbKVl00GOjudUIR');


function calculateOrderAmount(array $items): int {
  // Replace this constant with a calculation of the order's amount
  // Calculate the order total on the server to prevent
  // customers from directly manipulating the amount on the client
  return 968000;
}

header('Content-Type: application/json');

try {


  // retrieve JSON from POST body
  $json_str = file_get_contents('php://input');
  $json_obj = json_decode($json_str);



  $paymentIntent = \Stripe\PaymentIntent::create([
    'amount' => calculateOrderAmount($json_obj->items),
    'currency' => 'czk',


  ]);



  $output = [
    'clientSecret' => $paymentIntent->client_secret,
  ];

  echo json_encode($output);
} catch (Error $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
}
