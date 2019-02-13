<?php
$c = mysql_connect("localhost","root","mysql");
$db = mysql_select_db("project",$c);
$message = "";
$un = @$_POST['username'];
$ps = @$_POST['password'];
//$query = mysql_query("");

$query = mysql_query("select * from account WHERE user_name= '".$un."' && password= '".$ps."'");
$num_rows = mysql_num_rows($query); 
if(!empty($un) || !empty($ps)){
if($num_rows !=0)
{
header('location:index.php');
}else{
$message = "No Data";
}
}
?>