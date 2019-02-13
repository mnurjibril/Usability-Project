<html>
	<head>
		<title>HiLCoE</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="common.css">
		<link rel="stylesheet" type="text/css" href="layout.css">
	</head>
	<body>

	<div id class="Container">

	<div id="Header">
	<span id="logo" > <img src="logo.png"  font-size="30"></span>
	<span style="vertical-align: middle; display: table-cell;">
	
	 		 <div id class  ="topnav" align="center">

   <h3> <a class href="index.php">Home</a>
   <a class href="recored.php">Recored</a>
   <a class href="report.php">Report</a>
   <a class href="about.php">About Us</a></h3>
</br>
     
 </div>
		  </span></div>

<div id="Leftnav"> <br>
External site links <br>
    <a class href="moe.php">moe.gov.et</a>
	</div>

	<div class="Rightnav">
            <span style="vertical-align: middle; display: table-cell;">
   <a class href="login1.php">logout</a>
   <a class href="changepass.php">password change</a></span></div>

	<div id="Body"> <h3> <table align="center">



<?php
$c = mysql_connect("localhost","root");
$d = mysql_select_db("project");
//$insert = "insert into course(name) values('php')";
$query = "SELECT * FROM course";
$query1 = "select * from instructor";
$q1 = mysql_query($d,$c);
//$q2 = mysql_query($insert,$c);
$q3 = mysql_query($query1,$c);
$q4 = mysql_query($query,$c);
$options = "";
$options1 = "";
$o = "";
$o1 = "";
while($row2 = mysql_fetch_array($q4)){
$options = $options."<option> $row2[1] </option>";
$o = $o."<option> $row2[0] </option>";
}


while($row3 = mysql_fetch_array($q3)){
$options1 = $options1."<option> $row3[1] </option>";
$o1 = $o1."<option> $row3[0] </option>";
}
?>



<form method="POST" action="saveResult.php">

Select instructor name<select name="course">
<?php  echo $options1;  ?>
</select>
Select Course<select name="course">
<?php  echo $options;  ?>
</select><br/>




<?php
$given2 = "select name from evaluations";//evaluations
$data2 = mysql_query( $given2, $c);
$given3 = "select name from givenValue";
$data3 = mysql_query( $given3, $c);
function givenValue(){
for($ss=0;$ss<1;$ss++){
$ss = $ss+1;
//echo"r";
$c = mysql_connect("localhost","root");
$given3 = "select name from givenValue";
$data3 = mysql_query( $given3, $c);
$ff = 0;
while($rowG2 = mysql_fetch_array($data3, MYSQL_NUM))
{

echo "{$rowG2[0]} "."<input"." type"."="."radio" .  " name"."="."{$ff}"       .">";
//radioNumber($ff);
echo"$ff";
}
$ff++;
}
}

function radioNumber($ff){
$ff++;
}

if(!$data2)
{
  die('Could not get data: ' . mysql_error());
}
$x=0;
while($rowG = mysql_fetch_array($data2, MYSQL_NUM))
{$y =0;
echo"<table >";
echo"<tr>";
echo"<td>";
 echo "{$rowG[0]} ";echo"</td>"; 
 echo"<td>";echo ""."<input"." type"."="."radio" .  " name"."="."$x"   .  " value"."="."strongly disagree"    .">"."strongly disagree";echo"</td>";
 echo"<td>";echo ""."<input"." type"."="."radio" .  " name"."="."$x"    .  " value"."="."disagree"   .">"."disagree";echo"</td>";
 echo"<td>";echo ""."<input"." type"."="."radio" .  " name"."="."$x"   .  " value"."="."certain"    .">"."certain";echo"</td>";
 echo"<td>";echo ""."<input"." type"."="."radio" .  " name"."="."$x"   .  " value"."="."agree"    .">"."agree";echo"</td>";
 echo"<td>";echo ""."<input"." type"."="."radio" .  " name"."="."$x"    .  " value"."="."strongly agree"   .">"."strongly agree";echo"</td>";
  echo"</tr>";
 echo"</table>";
  $x = $x+1;
echo"<br/>";
}
?>
<button type="submit" align="center" value="save"  >save</button>
</form>

<tr><td >

</td></tr>
</table>
 </h3> 
	</div>
	<div id="Footer">
		<p>Copyright &copy; HiLCoE . All Rights Reserved . Contact Us</p>
	</div>

	</body>
</html>