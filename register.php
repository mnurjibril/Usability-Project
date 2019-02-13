<html>
	<head>
		<title>HiLCoE</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="common.css">
		<link rel="stylesheet" type="text/css" href="layout.css">
	</head>
	
	
	<script type="text/javascript" src="projectJs.js">
</script>
	
	
	<body>

	<div id class="Container">

	<div id="Header">
	<span id="logo" > <img src="logo.png"  font-size="30"></span>
	<span style="vertical-align: middle; display: table-cell;">
	
       <div id class  ="topnav" align="center">

   <h3> <a class href="index.php">Home</a>
<ul class="dropdown">
  Register
   <li class="dropdown-content">
       <h5><a href="register.php">Recorder</a><br/>
    <a href="student.php">Student</a></h5>
      </li>
</ul>
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
   <a class href="changepass.php">password change</a></span></div>

	<div id="Body"> <h3> <div class="loginBody">
                    <form class="form-signin" align ="center" name="register" method="POST" action="a.php">
                        
                        <h1 class="h3 mb-3 font-weight-normal">Recoreder Name </h1>
                        
                        Evaluation Criteria<input type="text" name="evaluation" class="form-control" placeholder="" required autofocus><br><br>
                        <br>
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
Select Course<select name="course">
<?php  echo $options;  ?>
</select><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-lg btn-primary btn-block" onclick="forAll()" type="submit">save</button>

                        <p class="mt-5 mb-3 text-muted"> </p>
                    </form>
                </div>
	</div>
	<div id="Footer">
		<p>Copyright &copy; HiLCoE . All Rights Reserved . Contact Us</p>
	</div>

	</body>
</html>