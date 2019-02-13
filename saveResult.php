<?php
if(isset($_POST["submit"]))
{
$conn = mysql_connect("localhost","root","mysql");
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
    echo"<br/><br/>";
if($count<>mysql_num_rows($evData)){
echo "<br/>Evaluation failed refer to the above errors";
mysql_query("ROLLBACK");
}else{
mysql_query("COMMIT");
echo "Evaluation saved successfully";
}
}
?>