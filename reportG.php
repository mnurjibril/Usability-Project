<?php
$conn = mysql_connect("localhost","root","mysql");
$db = mysql_select_db("project");
$inst_name = $_POST['instructor'];
$course_name = $_POST['course'];
$query = "SELECT E_name,E_VALUE FROM evaluation_result where C_name = $course_name and I_name = $inst_name ";
$data3 = mysql_query($query, $conn);
//$ct = "INSERT INTO evaluation_result(`Id`, `I_name`, `C_name`, `E_name`, `E_VALUE`) values(NULL,'$I_name','$C_name','$E_name','$E_VALUE')";
echo"<table border >";
while ($rowG2 = mysql_fetch_array($data3, MYSQL_NUM)) {
echo"<tr>";
echo"<td>";
                                        echo "{$rowG2[0]} " ;echo"</td>";
										echo"<td>";echo "{$rowG2[1]} " ;echo"<br/>";
										echo"</td>";
										echo"</tr>";

//radioNumber($ff);
                                    }
									echo"</table>";
?>