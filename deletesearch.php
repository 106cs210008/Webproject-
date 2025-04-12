<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            position:absolute;
            top:200px;
        }

        td, th {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: white;
            color: blue;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .delete{
            position: absolute;
            top:400px;
            
        }
        .back{
            position: absolute;
            top:500px;
            left:950px;
        }
    </style>
</head>
<body>
    <center>
        <h1 style="color:red;">DOCTOR DATABASE</h1>
        <hr>
        <h2>Update Doctor details</h2>
        <hr>

        <form method="POST" action="deletesave.php">
        <?php
        $id = $_POST["id"];
        $con = mysqli_connect("localhost", "root", "", "adminlogin");
        $rs = mysqli_query($con, "SELECT * FROM doctor WHERE id='$id'");
        $delete=$id;
        echo "<table border='2'>";
        echo "<tr><th>First Name</th><th>Last Name</th><th>Email Id</th><th>Mobile No</th><th>Specialist in</th><th>Gender</th><th>Timings</th><th>City</th><th>Address</th><th>ID</th></tr>";

        while ($row = mysqli_fetch_array($rs)) {
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "<td>".$row[6]."</td>";
            echo "<td>".$row[7]."</td>";
            echo "<td>".$row[8]."</td>";
            echo "<td>".$row[9]."</td>";
            echo "</tr>";
        }
        mysqli_close($con);
        ?>
        DOCTOR ID IS:<input type="text" name="a10" readonly value="<?php echo $id;?>"><br><br>
        <br>
        <br>
    </center>
    </form>
    <center>
        <input type="submit" name="button" class=" delete" value="DELETE">
        <br>
        <br>
        <div class="back">
        <a href="123.html"> BACK</a>
        </div>
        <br>
        <br>
    </center>
</body>
</html>
