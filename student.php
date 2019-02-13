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
                    <a class href="changepass.php">password change</a></span></div>

            <div id="Body"> <h3> <table align="center">
<?php
if(isset($_POST["submit"]))
{
$conn = mysql_connect("localhost", "root","mysql");
$db = mysql_select_db("project");
$evs = "select id,name from evaluations"; //evaluations
$evData = mysql_query($evs, $conn);
$gVal = "select name from givenValue";
$gData = mysql_query($gVal, $conn);

if (!$evData) {
    die('Could not get data: ' . mysql_error());
}
mysql_query("START TRANSACTION");
$count=0;
while ($rowG = mysql_fetch_array($evData, MYSQL_NUM)) {
    if (isset($_POST[$rowG[0]])) {
        $I_name = $_POST['instructor'];
        $C_name = $_POST['course'];
        $E_name = $rowG[1];
        $E_VALUE = $_POST[$rowG[0]];
		$count++;
        $ct = "INSERT INTO evaluation_result(`Id`, `I_name`, `C_name`, `E_name`, `E_VALUE`) values(NULL,'$I_name','$C_name','$E_name','$E_VALUE')";

        $q2 = mysql_query($ct, $conn);
        if (!$q2) {
		mysql_query("ROLLBACK");
            die('Could not get data: ' . mysql_error());
        }
    } else {
        echo "<br/>You didn't give evaluation for " . $rowG[1];
    }


}
    
if($count<>mysql_num_rows($evData)){
echo "<br/>Evaluation failed. Refer to the above errors.<br/><br/>";
mysql_query("ROLLBACK");
}else{
mysql_query("COMMIT");
echo "Evaluation saved successfully!<br/><br/>";
}
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

                        
                        <form method="POST" action="student.php">

                            Select instructor name<select name="instructor">
                                <?php echo $options1; ?>
                            </select>
                            Select Course<select name="course">
                                <?php echo $options; ?>
                            </select><br/>




                            <?php
                            $given2 = "select name,id from evaluations"; //evaluations
                            $data2 = mysql_query($given2, $c);
                            $given3 = "select name from givenValue";
                            $data3 = mysql_query($given3, $c);

                            function givenValue() {
                                for ($ss = 0; $ss < 1; $ss++) {
                                    $ss = $ss + 1;
//echo"r";
                                    $c = mysql_connect("localhost", "root");
                                    $given3 = "select name from givenValue";
                                    $data3 = mysql_query($given3, $c);
                                    $ff = 0;
                                    while ($rowG2 = mysql_fetch_array($data3, MYSQL_NUM)) {

                                        echo "{$rowG2[0]} " . "<input" . " type" . "=" . "radio" . " name" . "=" . "{$ff}" . ">";
//radioNumber($ff);
                                        echo"$ff";
                                    }
                                    $ff++;
                                }
                            }

                            function radioNumber($ff) {
                                $ff++;
                            }

                            if (!$data2) {
                                die('Could not get data: ' . mysql_error());
                            }

                            $x = 0;
							
							
							
							 echo"<table border >";
                                
							
                            while ($rowG = mysql_fetch_array($data2, MYSQL_NUM)) {
                                $y = 0;
                               echo"<tr>";
                                echo"<td>";
                                echo "{$rowG[0]} ";
                                echo"</td>";
                                echo"<td>";
                                echo "" . "<input" . " type" . "=" . "radio" . " name" . "=" . '"' . $rowG[1] . '"' . " value" . "=" . '"strongly disagree"' . ">" . "strongly disagree";
                                echo"</td>";
                                echo"<td>";
                                echo "" . "<input" . " type" . "=" . "radio" . " name" . "=" . '"' . $rowG[1] . '"' . " value" . "=" . '"disagree"' . ">" . "disagree";
                                echo"</td>";
                                echo"<td>";
                                echo "" . "<input" . " type" . "=" . "radio" . " name" . "=" . '"' . $rowG[1] . '"' . " value" . "=" . '"certain"' . ">" . "certain";
                                echo"</td>";
                                echo"<td>";
                                echo "" . "<input" . " type" . "=" . "radio" . " name" . "=" . '"' . $rowG[1] . '"' . " value" . "=" . '"agree"' . ">" . "agree";
                                echo"</td>";
                                echo"<td>";
                                echo "" . "<input" . " type" . "=" . "radio" . " name" . "=" . '"' . $rowG[1] . '"' . " value" . "=" . '"strongly agree"' . ">" . "strongly agree";
                                echo"</td>";
                                echo"</tr>";
                                $x = $x + 1;
                                echo"<br/>";
                            }
							
							
                                echo"</table>";
							
							
							
							
                            ?>
                            </br>
                            
                            
                            <button type="submit" name="submit" align="center" value="save"  >save</button>
                        </form>

                        <tr><td >

                            </td></tr>
                    </table>
                </h3> 
            </div>
            <div id="Footer">
                <p>Copyright &copy; HiLCoE . All Rights Reserved . Contact Us</p>
            </div>
        </div>

    </body>
</html>