<html>
<head>
  <script type="text/javascript">
    function redirectToDashboard() {
      window.location.href = "dashborad.html";
    }
  </script>
</head>
<body>
<?php  
$username = $_POST['username'];
$password = $_POST['password'];

$con = mysql_connect("localhost", "root", "");
mysql_select_db("adminlogin", $con);

$admin = mysql_query("SELECT * FROM admin WHERE user_name='$username' AND password='$password'");

if ($row = mysql_fetch_array($admin)) {
  echo "<script>redirectToDashboard();</script>";
} else {
  echo "<br>PLEASE ENTER VALID DETAILS";
}
?>
</body>
</html>
