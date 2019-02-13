<?php
$c = mysql_connect("localhost","root","mysql");
$db = mysql_select_db("project");
$ct = 'create table account(Id int not null, user_name varchar(50),password varchar(50),PRIMARY KEY (Id))';
$q1 = mysql_query($db,$c);
$q2 = mysql_query($ct,$c);
$uname = $_POST['username'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
if($pass == $pass2){
$insert = "insert into account(user_name,password) values('$uname','$pass')";
$q3 = mysql_query($insert,$c);
if(!$q3 ||$uname == "" ||$pass==""||$pass2==""){
//throw new Exception("Value must be 1 or below");
echo"not create";
header("Location:login1.php"); 
}
else{
echo"success";
header("Location:index.php");

}
}
else{
header("Location:login1.php");
}
?>