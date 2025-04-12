<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Doctor Details</title>
</head>
<center>
<body>
    <h1 style="color:red;">DOCTOR DATABASE</h1>
    <hr>
    <h2>Update Doctor details</h2>
    <hr>
    <?php
    $del=$_POST["a10"];

    $con = mysql_connect("localhost", "root", "");
    mysql_select_db("adminlogin", $con);
    $rs = mysql_query("DELETE FROM doctor WHERE id='$del'");
    
   
        echo "<br><br>DOCTOR DELETED SUCCESSFULLY....";
    ?>
    <br>
    <br>
    <a href="dashborad.html">BACK</a>
</body>
</center>
</html>
