<!--
---------------
-- Programmer:    Jack Morris
-- Course:        ITSE-1306 (Intro to PHP)
-- Instructor:    Cesar "Coach" Marrero
-- Assignment:    Chapter02 Pursue01
-- Description:   PHP Script with variable examples
---------------
-->

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
print "<p>My name is $firstName $lastName.</p>";
print "<p>I am $age years old.</p>";
print "<p>My favorite bands are: </p>";
print_r($favoriteBands);
?>