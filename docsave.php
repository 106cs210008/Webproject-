<!DOCTYPE html>
<html>
<head>
    <title>Update Doctor Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }
        center {
            margin-top: 50px;
        }
        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #007bff;
        }
        h4 {
            text-align: center;
            color: #007bff;
        }
        hr {
            width: 50%;
            margin: 10px auto;
            border-color: #007bff;
        }
        input[type="text"], select, input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <center>
        <h2>Update Doctor Details</h2>
        <hr>
        <form method="POST" action="updatedoctor.php">
            <?php
            $b=$_POST["search"];

            $con=mysql_connect("localhost","root","");
            mysql_select_db("adminlogin",$con);
            $rs=mysql_query("select * from doctor where id='$b'");

            $row = mysql_fetch_array($rs);
            ?>
            

            <h4>
            ID:<input type="text" name="a10" value="<?php echo $row['9'];?>"><br>

            FIRST NAME:<input type="text" name="a1" value="<?php echo $row['0'];?>"><br>

            LAST NAME:<input type="text" name="a2" value="<?php echo $row['1'];?>"><br>

            EMAIL ID:<input type="text" name="a3" value="<?php echo $row['2'];?>"><br>

            PHONE NUMBER:<input type="text" name="a4" value="<?php echo $row['3'];?>"><br>

            SPECIALIST:
            <select name="a5" required>
                <option value="">Select Specialist</option>
                <option value="Anaesthesia">Anaesthesia</option>
                <option>Andrology</option>
                <option>Audiology and Speech Therapy</option>
                <option>Ayurvedic</option>
                <option>Cardiologist</option>
                <option>Dentist</option>
                <option>Dermatologist</option>
                <option>Diabetologist</option>
                <option>Dietician</option>
                <option>Endocrinologist</option>
                <option>ENT</option>
                <option>Gastroenterologist</option>
                <option>Gynaecilogist</option>
                <option>Haematology</option>
                <option>Homoeopathy</option>
                <option>Medicine</option>
                <option>Nephtologist</option>
                <option>Neurologist</option>
                <option>Neurosurgeon</option>
                <option>Nutrionist</option>
                <option>Oncologist</option>
                <option>Ophthalmologist</option>
                <option>Orthopaedics</option>
                <option>Orthopedic Surgeon</option>
                <option>Paediatrics</option>
                <option>Pathologist</option>
                <option>Radiologist</option>
                <option>Rheumatologist</option>
                <option>Sexologist</option>
                <option>Skin</option>
                <option>Surgeon</option>
                <option>Urologist</option>
            </select><br>

            GENDER:
            <select name="a6" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br>

            TIMINGS:<input type="text" name="a7" value="<?php echo $row['6'];?>"><br>

            CITY:<input type="text" name="a8" value="<?php echo $row['7'];?>"><br>

            ADDRESS:<input type="text" name="a9" value="<?php echo $row['8'];?>"><br></h4>
            
            
            <input type="submit" name="update" value="UPDATE">
            <?php
            if(!$row)
                echo "<br><br>NO DOCTOR FOUND...";
            ?>
            <br><br>
            <a href="123.html">HOME</a>
        </form>
    </center>
</body>
</html>
