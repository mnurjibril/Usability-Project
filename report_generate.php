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
   <a class href="report.php">Report</a>
   <a class href="about.php">About Us</a></h3>
  </br>
     
 </div>
		  </span></div>

	<div id="Leftnav">
 THis is left van
	</div>

	<div class="Rightnav">
            <span style="vertical-align: middle; display: table-cell;">
   <a class href="login1.php">logout</a>
   <a class href="register.php">password change</a></span></div>


	<div id="Body"> <h3> This Teacher evaluation system Report </h3> 
	
	
<?php
$conn = mysql_connect("localhost", "root");
$db = mysql_select_db("project");
$inst_name = $_POST['instructor'];
$course_name = $_POST['course'];
$query = "SELECT E_name,E_VALUE FROM evaluation_result where C_name = '$course_name' and I_name = '$inst_name'";
$data3 = mysql_query($query, $conn);
echo"<h4>Course Name:- $course_name</h4>";
echo"<h4>Instructor Name:- $inst_name</h4>";
//$ct = "INSERT INTO evaluation_result(`Id`, `I_name`, `C_name`, `E_name`, `E_VALUE`) values(NULL,'$I_name','$C_name','$E_name','$E_VALUE')";
echo"<table border >";
if(mysql_fetch_array($data3, MYSQL_NUM)){
while ($rowG2 = mysql_fetch_array($data3, MYSQL_NUM)) {
echo"<tr>";
echo"<td>";
                                        echo "{$rowG2[0]} " ;echo"</td>";
										echo"<td>";echo "{$rowG2[1]} " ;echo"<br/>";
										echo"</td>";
										echo"</tr>";

//radioNumber($ff);
                                    }
									}else{
									echo"There is no data!!!";
									}
									echo"</table>";
?>
	
	
	
	
	
	
	</div>
	<div id="Footer">
		<p>Copyright &copy; HiLCoE . All Rights Reserved . Contact Us</p>
	</div>

	</body>
</html>