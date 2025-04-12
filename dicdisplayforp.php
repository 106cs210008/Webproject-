
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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
    </style>
</head>
<body>
    <center><h1 style="color:red;">DOCTOR DATABASE</h1></center><hr>

    <?php
    $a = $_POST['a1'];

    $con = mysqli_connect("localhost", "root", "", "adminlogin");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $rs = mysqli_query($con, "SELECT * FROM doctor where specialist='$a'");

    echo "<table border=2>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email Id</th><th>Mobile No</th><th>Specialist in</th><th>Gender</th><th>Timings</th><th>City</th><th>Address</th><th>Book appointment</th></tr>";

    while ($row = mysqli_fetch_array($rs)) {
        echo "<tr>";
                echo"<td>".$row[9]."</td>
                     <td>".$row[0]."</td>
                     <td>".$row[1]."</td>
                     <td>".$row[2]."</td>
                     <td>".$row[3]."</td>
                     <td>".$row[4]."</td>
                     <td>".$row[5]."</td>
                     <td>".$row[6]."</td>
                     <td>".$row[7]."</td>
                     <td>".$row[8]."</td>

                     <td><a href='patientsreg.html'>BOOK</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>

    <br>
    <br>
    <center>
        <a href="n.html">Back</a>
    </center>
</body>
</html>
