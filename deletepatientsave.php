<html>
<head>
    <title>Update Doctor Details</title>
</head>
<body>
    <center>
        <h2>Update patient details</h2>
        <hr>
        <?php
        $doc_id = $_POST["a8"];


        $con = mysql_connect("localhost", "root", "");
        mysql_select_db("adminlogin", $con);

        $rs = mysql_query("delete from patient WHERE doc_id='$doc_id'");

      
            echo "<br><br>PATIENT UPDATION COMPLETED....";
        ?>
        <br><br><br>
        <a href="dashborad.html">Back</a>
    </center>
</body>
</html>
