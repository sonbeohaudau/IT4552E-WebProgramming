<!doctype html>
	<?php
session_start();

if (!isset($_POST["guess"])) {
     $_SESSION["count"] = 0; //Initialize count
     $message = "Welcome to the guessing machine!";
     $_POST["numtobeguessed"] = rand(0,100);
//     echo $_POST["numtobeguessed"];
} else if ($_POST["guess"] > $_POST["numtobeguessed"]) { //greater than
	$_SESSION["count"]++; //Declare the variable $count to increment by 1.
    $message = $_POST["guess"]." is too big! Try a smaller number.You have tried ".$_SESSION["count"]." time";

} else if ($_POST["guess"] < $_POST["numtobeguessed"]) { //less than
	$_SESSION["count"]++; //Declare the variable $count to increment by 1.
    $message = $_POST["guess"]." is too small! Try a larger number.You have tried ".$_SESSION["count"]." time";

} else { // must be equivalent
    $_SESSION["count"]++;
    $message = "Well done! You guessed the right number in ".$_SESSION["count"]." attempt(s)!"; 
    unset($_SESSION["count"]);
	session_destroy();
        //Include the $count variable to the $message to show the user how many tries to took him.
}
?>
<html>

    <head>
        <title>A PHP number guessing script</title>
    </head>
    <body>
    <h1><?php echo $message; ?></h1>
        <form action="" method="POST">
        <p><strong>Type your guess here:</strong>
            <input type="text" name="guess"></p>
            <input type="hidden" name="numtobeguessed" 
                   value="<?php echo $_POST["numtobeguessed"]; ?>" ></p>
    <p><input type="submit" value="Submit your guess"/></p>
        </form>
</body>
</html>
