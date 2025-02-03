<?php

// CHECKS WHETHER USER HAS COMPLETED FORM
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$selection = htmlspecialchars($_POST["selection"]);
$top = htmlspecialchars($_POST["top-size"]);
$coverage = htmlspecialchars($_POST["coverage"]);
$hip = htmlspecialchars($_POST["hip-size"]);
$colour = htmlspecialchars($_POST["colour"]);
$shipping = htmlspecialchars($_POST["shipping"]);

if (empty($name)) {
exit();
header("Location: ../index.htm");
}

echo "YOU HAVE A NEW ORDER FROM:";
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo "<br>";
echo "THEY HAVE SELECTED:";
echo "<br>";

echo $selection;
echo " (bikini order)";
echo "<br>";

echo $top;
echo " (top size)";
echo "<br>";

echo $coverage;
echo " (coverage)";
echo "<br>";

echo $hip;
echo " (hip size)";
echo "<br>";

echo $colour;
echo " (colour)";
echo "<br>";
echo "<br>";

echo "TO BE SHIPPED TO:";
echo "<br>";
echo $shipping;

header("Location: ../index.htm");
} else {
  header("Location: ../index.htm");
}

// SECURITY RULES USING PHP:
// > never trust data submitted by a user