<html>
<head>
    <title>Update patient Details</title>
</head>
<body>
    <center>
        <h2>Patient Details</h2>
        <hr>
        <form method="POST" action="deletepatientsave.php">
            <?php
            $b=$_POST["search"];

            $con=mysql_connect("localhost","root","");
            mysql_select_db("adminlogin",$con);
            $rs=mysql_query("select * from patient where F_name='$b'");

            $row = mysql_fetch_array($rs);
            ?>
            <h5></h5>
            FIRST NAME:<input type="text" name="a1" value="<?php echo $row['0'];?>"><br><br>

            LAST NAME:<input type="text" name="a2" value="<?php echo $row['1'];?>"><br><br>

            MOBILE NO:<input type="text" name="a3" value="<?php echo $row['2'];?>"><br><br>

            GENDER:<input type="text" name="a4" value="<?php echo $row['3'];?>"><br><br>

            AGE:<input type="text" name="a5" value="<?php echo $row['4'];?>"><br><br>

            CITY:<input type="text" name="a6" value="<?php echo $row['5'];?>"><br><br>

            ADDRESS:<input type="text" name="a7" value="<?php echo $row['6'];?>"><br><br>

            DOCTOR ID:<input type="text" name="a8" value="<?php echo $row['7'];?>"><br><br>

            <input type="submit" name="update" value="DELETE">
            <?php
            if(!$row)
                echo "<br><br>NO PATIENT FOUND...";
            ?>
            <br><br>
            <a href="123.html">HOME</a>
        </form>
    </center>
</body>
</html>
