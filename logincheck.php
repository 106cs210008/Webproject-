<html>
<body>

<center><h2><font color=red>
I Am server To Verify Login <hr>

<?php
	$n=$_POST['uname'];
	$p=$_POST['pass'];
                   $a=$_POST['ad'];
{
echo "<br> NAME IS :",$n;
echo "<br> PASSWORD IS :",$p;
echo "<br> ADDRESS IS :",$a;
}

	if($n=="")
	{
		echo "<br><br> Please Enter User name";
	}
	else if($p=="")
	{
		echo "<BR><BR> Please Enter Password";
	}
	else if($n=="jafar" && $p=="bca")
	{
		echo "<BR><BR> Valid user Account"; 
	}
	else
	{
		echo "<BR> Invalid user name  or Password";
	}
?>
<a href="login.html"><input type="button" value="Back"></a>
</body>
 </html>