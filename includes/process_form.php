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
//  $to = "n33dabikini@gmail.com"
$to = "rupa.morzaria@gmail.com";

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

// SECURITY RULES USING PHP:
// > never trust data submitted by a user


// ---- OLD ... FROM YOUTUBE TUTORIAL

// echo "YOU HAVE A NEW ORDER FROM:";
// echo "<br>";
// echo $name;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo "<br>";
// echo "THEY HAVE SELECTED:";
// echo "<br>";

// echo $selection;
// echo " (bikini order)";
// echo "<br>";

// echo $top;
// echo " (top size)";
// echo "<br>";

// echo $coverage;
// echo " (coverage)";
// echo "<br>";

// echo $hip;
// echo " (hip size)";
// echo "<br>";

// echo $colour;
// echo " (colour)";
// echo "<br>";
// echo "<br>";

// echo "TO BE SHIPPED TO:";
// echo "<br>";
// echo $shipping;