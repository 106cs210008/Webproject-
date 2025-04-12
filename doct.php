<!DOCTYPE html>
<html>
    <head>
        <title>Add Doctor Record</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .container {
                margin-top: 50px;
                text-align: center;
            }
            .success {
                color: green;
            }
            .back-link {
                margin-top: 20px;
                display: block;
                text-decoration: none;
                color: blue;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php

            $a=$_POST['a1'];
            $b=$_POST['a2'];
            $c=$_POST['a3'];
            $d=$_POST['a4'];
            $e=$_POST['a5'];
            $f=$_POST['a6'];
            $g=$_POST['a7'];
            $h=$_POST['a8'];
            $i=$_POST['a9'];
            $k=$_POST['a10'];

            $con=mysql_connect("localhost", "root", "");
            mysql_select_db("adminlogin",$con);
            mysql_query("insert into doctor values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$k')");
            echo "<div class='success'>New Doctor records added successfully...</div>";

            ?>
            <br><br>
            <a class="back-link" href="123.html">Back</a>
        </div>
    </body>
</html>
