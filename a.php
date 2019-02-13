<?php
mysql_connect('localhost','root','mysql');
mysql_select_db('project');
$evaluation = @$_POST['evaluation'];
$course = @$_POST['course'];
$message = "";
if($evaluation!=null && $course!=null){
$query=mysql_query("select cId from course where name='$course'");
while($row=mysql_fetch_array($query))
		{
			$cid=$row['cId'];
	    }
$query2=mysql_query("insert into evaluations(name,cId) values('$evaluation','$cid')");
echo"yesssss";
header("Location:register.php");
}
else
{
header("Location:register.php");
$message = "No Data";
}
?>