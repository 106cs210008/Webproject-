<html>
<body>
<center>
<?php  
       $username=$_POST['username'];
       $emailid=$_POST['emailid'];
       $password=$_POST['password'];

         $con=mysql_connect("localhost","root","");
         mysql_select_db("user",$con);
        
        $admin=mysql_query("select * from userlogin where user_name='$username' ");
        $admin=mysql_query("select * from userlogin where email_id='$emailid' ");
         $admin=mysql_query("select * from userlogin where password='$password' ");


        if($row=mysql_fetch_array($admin))
       {
       ?>
    <center>
         <a href="n.html">ok</a>
       </center>  

       <?php
       }
        else
      {
       echo"<br>PLEASE ENTER VALID DETAILS";
       }
      ?>
</center>
       </body>
       </html>



