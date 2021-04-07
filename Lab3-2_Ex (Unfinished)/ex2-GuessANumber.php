<?php
session_start();


if (isset($_POST["pick"])) {
    $pick = $_POST["pick"];
    $_SESSION["count"]++;
//    print ($_SESSION["result"]);
    if ($pick < $_SESSION["result"]) {
        print "Wrong! Try higher. (You have tried ".$_SESSION["count"]." time(s))";
    } else if ($pick > $_SESSION["result"]) {
        print "Wrong! Try lower. (You have tried ".$_SESSION["count"]." time(s))";
    } else {
        print "Correct! You've guessed correctly after ".$_SESSION["count"]." times";
        unset($_SESSION["count"]);
        unset($_SESSION["results"]);
        session_destroy();
    }
} else {
    srand((double) microtime() * 1000000);
    $_SESSION["result"] = rand(0, 100);
    $_SESSION["count"] = 0;
    print "You must enter a number!";
}
?>
<html>
    <head>
        <title>
            A title.
        </title>
    </head>
    <body>
        <form action = "" method="POST">
            Guess a number from 0 to 100:
            <br>
            <input type="number" min="0" max="100" name="pick">
            <input type="submit" value="Submit">
        </form>

    </body>
</html>