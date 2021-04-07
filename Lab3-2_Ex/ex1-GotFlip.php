<html>
    <head>
        <title>
            Title of GotFlip.php
        </title>
    </head>
    <body>
        <?php
        //srand(int $seed): void
        srand((double) microtime() * 10000000);
        $flip = rand(0, 1);
        if (array_key_exists("pick", $_POST)) {
            $pick = $_POST["pick"];
            if ($flip == 0 && $pick == 0) {
                print "The flip=$flip, which is heads! <br> ";
                print '<font color="blue"> You got it right!</font>';
            } elseif ($flip == 0 && $pick == 1) {
                print "The flip=$flip, which is heads! <br> ";
                print '<font color="red"> You got it wrong!</font>';
            } elseif ($flip == 1 && $pick == 1) {
                print "The flip=$flip, which is tails! <br> ";
                print '<font color="blue"> You got it right!</font>';
            } elseif ($flip == 1 && $pick == 0) {
                print "The flip=$flip, which is tails! <br> ";
                print '<font color="red"> You got it wrong!</font>';
            } else {
                print '<br>Illegal state error!';
            }
        } else {
            print '<br>Illegal state error!';
        }
        ?>
    </body>
</html>
