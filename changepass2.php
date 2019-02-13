<?php
session_start();

    mysql_connect("localhost","root","mysql");
	mysql_select_db('project');
$uname=$_POST['username'];
$newpas=$_POST['newpass'];
$confirmpas=$_POST['newpass2'];
$UserName="";
$UserPass="";

	$query=mysql_query("select * from account where user_name='$uname'");
	//ALTER TABLE Persons
//ADD PRIMARY KEY (ID);
		while($row=mysql_fetch_array($query))
		{
			$UserName=$row['user_name'];
	    }
		if(($uname==$UserName)  && ($newpas==$confirmpas && $confirmpas!=''))
		{
            $_SESSION["check"] = $UserName;
			
//$alte =mysql_query("ALTER TABLE account ADD PRIMARY KEY (c_Id)");
			$update =mysql_query("UPDATE account SET password='$confirmpas' WHERE user_name='$uname'");
			header("Location:login1.php");
			
		}else{
		header("Location:changepass.php");
		}
?>