<html>
<body>
<center>
<?php  
       $username=$_POST['username'];
       $emailid=$_POST['emailid'];
       $number=$_POST['number'];
       $password=$_POST['password'];

         $con=mysql_connect("localhost","root","");
         mysql_select_db("user",$con);
        
        $admin=mysql_query("insert into userlogin values('$username','$emailid',$number,'$password')");
        
        echo "<BR><BR> New Account Created Successfully...";
?>   
</center>
</body>
</html>