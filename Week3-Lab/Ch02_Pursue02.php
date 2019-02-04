<!--
---------------
Programmer:     Jack Morris
Course:         ITSE-1306 (Intro to PHP)
Instructor:     Cesar "Coach" Marrero
Assignment:     Chapter02 Pursue02         
Description:    PHP variables within some HTML
---------------
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Predefined Variables</title>
</head>
<body>
<pre>

<?php
$firstName = "Jack";
$lastName = "Morris";
$age = 31;
$favoriteBands = array(
    1 => "Nine Inch Nails",
    2 => "Primus",
    3 => "Tool",
    4 => "A Perfect Circle"
);
print("My name is $firstName $lastName. \n");
print("I am $age years old. \n");
print("My favorite bands are: \n");
print_r($favoriteBands);
?>

</pre>
</body>
</html>