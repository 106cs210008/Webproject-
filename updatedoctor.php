<html>
<head>
    <title>Update Doctor Details</title>
</head>
<body>
    <center>
        <h2>Update Doctor details</h2>
        <hr>
        <?php
        $F_name = $_POST["a1"];
        $L_name = $_POST["a2"];
        $Email = $_POST["a3"];
        $phone_number = $_POST["a4"];
        $specialist = $_POST["a5"];
        $gender = $_POST["a6"];
        $timings = $_POST["a7"];
        $city = $_POST["a8"];
        $address = $_POST["a9"];
        $id = $_POST["a10"];

        $con = mysql_connect("localhost", "root", "");
        mysql_select_db("adminlogin", $con);

        $rs = mysql_query("UPDATE doctor SET 
            F_name='$F_name', 
            L_name='$L_name', 
            Email='$Email', 
            phone_number='$phone_number', 
            specialist='$specialist', 
            gender='$gender',
            timings='$timings', 
            city='$city', 
            address='$address' 
            WHERE id='$id'");

      
            echo "<br><br>DOCTOR UPDATION COMPLETED....";
    
        
        ?>
        <br><br><br>
        <a href="123.html">Back</a>
    </center>
</body>
</html>
