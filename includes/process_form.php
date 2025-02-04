<?php

// CHECKS WHETHER USER HAS COMPLETED FORM
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // get the form data
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$selection = htmlspecialchars($_POST["selection"]);
$top = htmlspecialchars($_POST["top-size"]);
$coverage = htmlspecialchars($_POST["coverage"]);
$hip = htmlspecialchars($_POST["hip-size"]);
$colour = htmlspecialchars($_POST["colour"]);
$shipping = htmlspecialchars($_POST["shipping"]);

if (empty($name)) {
header("Location: ../index.htm");
exit();
}

// SEND TO
$to = "user@gmail.com";

// EMAIL SUBJECT
$subject = "New Order";

// EMAIL BODY
$body = "YOU HAVE A NEW ORDER FROM:\n$name\n$email\n\nTHEY HAVE SELECTED:\n$selection (bikini order)\n$top (top size)\n$coverage (coverage)\n$hip (hip size)\n$colour (colour)\n\nTO BE SHIPPED TO:\n$shipping\n\n ---♥---";


// SEND EMAIL
mail($to, $subject, $body);

// REDIRECT TO ORDER-SUCCESS PAGE
header("Location: ../order-success.htm");
} else {
  header("Location: ../index.htm");
}
