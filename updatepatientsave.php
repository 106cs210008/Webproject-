<html>
<head>
    <title>Update Doctor Details</title>
</head>
<body>
    <center>
        <h2>Update patient details</h2>
        <hr>
        <?php
        $F_name = $_POST["a1"];
        $L_name = $_POST["a2"];
        $phone_number = $_POST["a3"];
        $gender= $_POST["a4"];
        $age = $_POST["a5"];
        $city = $_POST["a6"];
        $address = $_POST["a7"];
        $doc_id = $_POST["a8"];
    
        $con = mysql_connect("localhost", "root", "");
        mysql_select_db("adminlogin", $con);

        $rs = mysql_query("UPDATE patient SET 
            F_name='$F_name', 
            L_name='$L_name', 
          phone_number='$phone_number', 
            gender='$gender', 
            age='$age', 
            gender='$gender',
            city='$city', 
            address='$address', 
           doc_id='$doc_id' 
            WHERE F_name='$F_name'");

      
            echo "<br><br>PATIENT UPDATION COMPLETED....";
    
        
        ?>
        <br><br><br>
        <a href="1234.html">Back</a>
    </center>
</body>
</html>
