<?php
session_start();

    mysql_connect("localhost","root","mysql");
	mysql_select_db('project');
$uname=$_POST['username'];
$pas=$_POST['pass'];
$UserName="";
$UserPass="";

	$query=mysql_query("select * from account where user_name='$uname' && password='$pas'");
		while($row=mysql_fetch_array($query))
		{
			$UserName=$row['user_name'];
			$UserPass=$row['password'];
	    }
		if(($uname==$UserName && $UserName!='')  && ($pas==$UserPass && $UserPass!=''))
		{
            $_SESSION["check"] = $UserName;
			header("Location:index.php");
			
		}
		
    	else
		{
			header("Location:login1.php"); 
		}
?>