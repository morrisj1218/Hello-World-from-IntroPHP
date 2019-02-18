<?php
# --------------
# -- Programmer:   Jack Morris
# -- Course:       ITSE-1306 (Intro to PHP)
# -- Instructor:   Cesar "Coach" Marrero
# -- Assignment:   Week6 - Lab Mad Lib 
# -- Description:  Mad Lib HTML form
# --------------   

    $adj1 = $_POST['adj1'];
    $adj2 = $_POST['adj2'];
    $adj3 = $_POST['adj3'];
    $adj4 = $_POST['adj4'];
    $adj5 = $_POST['adj5'];
    $adj6 = $_POST['adj6'];
    $adj7 = $_POST['adj7'];
    $celeb = $_POST['celeb'];
    $noun1 = $_POST['noun1'];
    $noun2 = $_POST['noun2'];
    $noun3 = $_POST['noun3'];
    $place = $_POST['place'];
    $liquid = $_POST['liquid'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $verb1 = $_POST['verb1'];
    $verb2 = $_POST['verb2'];
    $verbING = $_POST['verbING'];

    echo("<h1>Result</h1>");
    echo("<p>Ladies and gentlemen, welcome aboard $adj1 Airline's Flight 750. This is your captain and pilot, $celeb. The plane you are traveling on is the latest Strato-$noun1 with four $adj2 engines. At present, we are $verbING directly over $place. Our speed is $num1 miles per hour, and we are flying at an altitude of $num2 feet. If you care for a cup of $liquid or a $adj3 sandwhich, please push the $noun2 located over your seat, and one of our flight attendants will be glad to $verb1 you. We have a $adj4 tailwind and will soon be flying through a heavy $noun3 storm. So I'll have to ask you all to fasten your $adj5 belts and $verb2 your trays to the $adj6 position. In the meantime, I hope you have a $adj7 trip.");
?>