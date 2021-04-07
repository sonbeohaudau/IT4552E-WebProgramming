<?php
    if(!isset($_POST["randomNumber"])){
        $_POST["randomNumber"] = rand(0,100);
    }else{
        
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
            <input type="hidden" name="randomNumber" value="<?php $_POST["randomNumber"]?>">
            <input type="submit" value="Submit">
        </form>

    </body>
</html>