<!--
---------------
Programmer:    Jack Morris
Course:        ITSE-1306 (Intro to PHP)
Instructor:    Cesar "Coach" Marrero
Assignment:    Chapter 03 Pursue
Description:   PHP script to handle Ch03_Pursue.html Form
---------------
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sales Tax Calculator</title>
</head>
<body>
<?php

$_TAXRATE = 0.0825;
$subtotal = $_POST['subtotal'];

$sales_tax = $subtotal * $_TAXRATE;
$total = $subtotal + $sales_tax;

$sales_tax = number_format($sales_tax, 2);
$total = number_format($total, 2);

print "<p>Subtotal:    $subtotal</p>";
print "<p>Sales Tax:   $sales_tax</p>";
print "<p>Total:       $total</p>";

?>
</body>
</html>