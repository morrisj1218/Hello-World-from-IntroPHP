<!--
---------------
-- Programmer:    Jack Morris
-- Course:        ITSE-1306 (Intro to PHP)
-- Instructor:    Cesar "Coach" Marrero
-- Assignment:    Week 4 Programming Task 
-- Description:   Receives data from personInfo.html
---------------
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Congratulations!</title>
</head>
<body>
<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];

print "<p>Thank you $firstName $lastName for your pledge!</p>

<p>A pledge to support the campaign for establishing America's <br>
first modern monarchy and naming Donald Trump king!</p>

<p>To show our gratitude, the information you provided: </p>

<p>$firstName <br>
$lastName <br>
$email <br>
$phone <br>
$dob</p>

<p>will proudly be displayed across ALL social media outlets <br>
so that your family, friends, and even complete strangers <br>
will know that $firstName $lastName is committed to Make America Great Again!</p>";

?>
</body>
</html>