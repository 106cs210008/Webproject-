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

         td {
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
    <body>
    
        
    <center><h1 style=color:red;>PATIENT DATABASE</h1></center><hr>
    <?php

    $con=mysql_connect("localhost","root","");
    mysql_select_db("team",$con);
    $rs=mysql_query("select * from patient");
    ?>

    <table border=2>
        <tr><th>Name</th><th>Contect No</th><th>Gender</th><th>Address</th><th>diseas</th><th>Date of Admission</th></tr>
        <?php

        while($row=mysql_fetch_array($rs))
        {
            echo"<tr><th>".$row[0]."</th>"."<th>".$row[1]."<th>".$row[2]."</th>"."<th>".$row[3]."</th>"."<th>".$row[4]."</th>"."<th>".$row[5]."</th></tr>";

        }


    ?>
    </table>
    <a href="#">Back</a>
    
</body>

    </html>