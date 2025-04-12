<html>
    <body>
        <CENTER>
        <?php
        $a=$_POST['a1'];
        $b=$_POST['a2'];
        $c=$_POST['a3'];
        $d=$_POST['a4'];
        $e=$_POST['a5'];
        $f=$_POST['a6'];
        $g=$_POST['a7'];
        $h=$_POST['hello'];
       
        $con=mysql_connect("localhost","root", "");
        mysql_select_db("adminlogin",$con);
        mysql_query("insert into patient values('$a','$b','$c','$d','$e','$f','$g','$h')");

        echo "<br>Register added successfully...";
        ?>
        <br><br>

        <a href="dashborad.html">Back</a>
</center>
</body>
</html>