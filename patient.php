<html>
    <body>
        <?php

        $a=$_POST['first'];
        $b=$_POST['con'];
        $c=$_POST['gen'];
        $d=$_POST['addr'];
        $e=$_POST['ill'];
        $f=$_POST['admi'];

        $con=mysql_connect("localhost", "root", "");
        mysql_select_db("team",$con);
        mysql_query("insert into patient values('$a','$b','$c','$d','$e','$f')");
        echo "<br>new patient records added successfully...";
        ?>
        <br><br>
        <a href="pati.html">Back</a>
</body>
</html>