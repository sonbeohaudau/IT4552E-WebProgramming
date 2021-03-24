<html>
    <head>
        <title>
            Response to form
        </title>
        <style>
            h2{
                text-align: center;
                position: relative;
            }
        </style>
    </head>
    <body style="background-color: pink">
        <h2>RESPONSE TO YOUR FORM!</h2>
        <?php
            $name = $_POST["name"];
            $class = $_POST["class"];
            $uni = $_POST["uni"];
            $hobbies = $_POST["hobbies"];
            $goal = $_POST["goal"];
            print("Your name is $name.<br>");
            print("You are in class $class of $uni university.<br>");
            print("<br> Your hobbies is (are): <br>");
            if(is_array($hobbies)){
                foreach($hobbies as $value){
                    print("&emsp; $value<br>");
                }
            }else{
                print($hobbies);
            }
            print("You see your self in the future as: $goal <br>");
        ?>
    </body>
</html>

