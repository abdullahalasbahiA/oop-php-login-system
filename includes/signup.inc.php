<?php

if(isset($_POST["submit"])){


    // get the data from the HTML Form
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // include the needed classes
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    // create object from the central class
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
    // run the method from the previous object
    $signup->signupUser();
    // go back to the front page if everything is correct
    header("location: ../index.php?error=none");

} else {
    header("location: ../index.php");
    exit();
}