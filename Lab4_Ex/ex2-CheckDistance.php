<html>
    <head>
        <title>
            Distance and time calculations
        </title>
    </head>
    <body>
        <?php
        $cities = array('Dallas' => 803, 'Toronto' => 435, 'Boston' => 848, 'Nashville' =>
            406, 'Las Vegas' => 1526, 'San Francisco' => 1835, 'Washington, DC' => 595,
            'Miami' => 1189, 'Pittsburgh' => 409);
        if (isset($_GET["destination"])) {
            $destination = $_GET["destination"];
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>No</th>";
            echo "<th>Destination</th>";
            echo "<th>Distance</th>";
            echo "<th>Driving time</th>";
            echo "<th>Walking time</th>";
            $i=1;
            foreach ($destination as $value) {
                if (isset($cities[$value])) {
                    $distance = $cities[$value];
                    $time = round(($distance / 60), 2);
                    $walktime = round(($distance / 5), 2);
//                    print "The distance between Chicago and <i>$value</i> is $distance miles";
//                    print "<br>Driving at 60 miles per hour it would take $time hours.";
//                    print "<br>Walking at 5 miles per hour it would take $walktime hours.<br>";
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$value</td>";
                    echo "<td>$distance</td>";
                    echo "<td>$time</td>";
                    echo "<td>$walktime</td>";
                    echo "</tr>";
                } else {
                    print "Sorry, do not have destination information for $value.";
                }
            }
            echo "<table>";
        } else {
            print "Sorry, your options were invalid!";
        }
        ?>
    </body>
</html>
