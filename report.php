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

	<div id="Leftnav"> <br>
External site links <br>
    <a class href="http://www.neaea.gov.et/">Ministry of Education</a>
	</div>

	<div class="Rightnav">
            <span style="vertical-align: middle; display: table-cell;">
   <a class href="login1.php">logout</a>
   <a class href="register.php">password change</a></span></div>


	<div id="Body"> <h3> This evaluation system is design for creating responsible teachers for </h3> 
	<form method="POST" action="report_generate.php">
	
	
	
	
	
	
	
	
	
	
	
	
	
						<?php
$c = mysql_connect("localhost","root","mysql");
$d = mysql_select_db("project");
//$insert = "insert into course(name) values('php')";
$query = "SELECT * FROM course";
$q1 = mysql_query($d,$c);
$q4 = mysql_query($query,$c);
$options = "";
while($row2 = mysql_fetch_array($q4)){
$options = $options."<option> $row2[1] </option>";
}
?>



<?php
                        $c = mysql_connect("localhost", "root","mysql");
                        $d = mysql_select_db("project");
//$insert = "insert into course(name) values('php')";
                        $query = "SELECT * FROM course";
                        $query1 = "select * from instructor";
                        $q1 = mysql_query($d, $c);
//$q2 = mysql_query($insert,$c);
                        $q3 = mysql_query($query1, $c);
                        $q4 = mysql_query($query, $c);
                        $options = "";
                        $options1 = "";
                        $o = "";
                        $o1 = "";
                        while ($row2 = mysql_fetch_array($q4)) {
                            $options = $options . "<option> $row2[1] </option>";
                            $o = $o . "<option> $row2[0] </option>";
                        }


                        while ($row3 = mysql_fetch_array($q3)) {
                            $options1 = $options1 . "<option> $row3[1] </option>";
                            $o1 = $o1 . "<option> $row3[0] </option>";
                        }
                        ?>

Select instructor name<select name="instructor">
                                <?php echo $options1; ?>
                            </select>


Select Course<select name="course">
<?php  echo $options;  ?>
</select><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-lg btn-primary btn-block" onclick="forAll()" type="submit">Generate Report</button>

                        <p class="mt-5 mb-3 text-muted"> </p>
	
	
	
	
	</form>
	
	
	
	
	
	
	
	
	
	
	
	</div>
	<div id="Footer">
		<p>Copyright &copy; HiLCoE . All Rights Reserved . Contact Us</p>
	</div>

	</body>
</html>