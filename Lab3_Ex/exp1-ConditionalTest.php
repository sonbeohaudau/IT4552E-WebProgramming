<html>
    <head>
        
    </head>
    <body>
        <?php
            $first = $_GET["firstName"];
            $middle = $_GET["middleName"];
            $last = $_GET["lastName"];
            print("Hi $first! Your full name is $last $middle $first. <br></br>");
            if ($first == $last){
                print("$first and $last are equal");
            }
            if ($first < $last){
                print("$first is less than $last");
            }
            if ($first > $last){
                print("$first is greater than $last");
            }
            print("<br></br>");
            
            $grade1 = $_GET["grade1"];
            $grade2 = $_GET["grade2"];
            $final = (2 * $grade1 + 3 * $grade2)/5;
            
            if($final > 89){
                printf("Your final grade is %.1f. You got an A.", $final);
            } else if ($final > 79){
                printf("Your final grade is %.1f. You got a B.", $final);
            } else if ($final > 69){
                printf("Your final grade is %.1f. You got a C.", $final);
            } else if ($final > 59){
                printf("Your final grade is %.1f. You got a D.", $final);
            } else if ($final > 39){
                printf("Your final grade is %.1f. You got an E.", $final);
            } else if ($final >= 0){
                printf("Your final grade is %.1f. You got a F.", $final);
            } else{
                printf("Illegal grade less than 0. Final grade = %.1f.", $final);
            }
            ?>
    </body>
</html>