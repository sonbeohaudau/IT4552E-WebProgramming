<html>
    <head>
        <title>
            Date time processing title
        </title>
    </head>
    <body>
        <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
            <table>
                <tr>
                    <td>
                        Your name:
                    </td>
                    <td colspan="3">
                        <input type="text" name="name" size="24" maxlength="30">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date:
                    </td>
                    <td>
                        <select name="date">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                print "<option>$i</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="month">
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                print "<option>$i</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="year" size="4" maxlength="4")>
                    </td>
                </tr>
                <tr>
                     <td>
                        Time:
                    </td>
                    <td>
                        <select name="hour">
                            <?php
                            for ($i = 0; $i <= 23; $i++) {
                                print "<option>$i</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="minute">
                            <?php
                            for ($i = 0; $i <= 60; $i++) {
                                print "<option>$i</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="second">
                            <?php
                            for ($i = 0; $i <= 60; $i++){
                                print "<option>$i</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST["name"])){
                $name = $_POST["name"];
                $date = $_POST["date"];
                $month = $_POST["year"];
                
                $hour = $_POST["hour"];
                $month = $_POST["month"];
                $year = $_POST["year"];
                
                
            }
        ?>
    </body>
</html>