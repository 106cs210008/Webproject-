<html>
    <body>
        <CENTER>
        <?php
        $a=$_POST['a1'];
        
       
        $con=mysql_connect("localhost","root","");
        mysql_select_db("adminlogin",$con);
        mysql_query("insert into query values('$a')");

        echo "<br>your issus added ...";
        ?>
        <br><br>

        <a href="asdf.html">Back</a>
</center>
</body>
</html>