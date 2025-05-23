<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(blue3.jpg);
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #FF5733;
            margin-top: 20px;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 20px 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: white;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            text-transform: uppercase;
        }

        tr:hover {
            background-color: red;
        }

        a {
            display: block;
            width: 100px;
            margin: 20px auto;
            text-align: center;
            padding: 10px;
            background-color: #FF5733;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #FF814A;
        }
    </style>
</head>
<body>
    <h1>DOCTOR DATABASE</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Id</th>
                <th>Mobile No</th>
                <th>Specialist in</th>
                <th>Gender</th>
                <th>Timings</th>
                <th>City</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $con = mysqli_connect("localhost", "root", "", "adminlogin");
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }

            $rs = mysqli_query($con, "SELECT * FROM doctor");

            while ($row = mysqli_fetch_array($rs)) {
                echo "<tr>
                        <td>".$row[9]."</td>
                        <td>".$row[0]."</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[4]."</td>
                        <td>".$row[5]."</td>
                        <td>".$row[6]."</td>
                        <td>".$row[7]."</td>
                        <td>".$row[8]."</td>
                    </tr>";
            }

            mysqli_close($con);
            ?>
        </tbody>
    </table>

    <a href="dashborad.html">BACK</a>
</body>
</html>
