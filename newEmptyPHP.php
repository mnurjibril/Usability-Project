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







                        <form method="POST" action="saveResult_.php">

                            Select instructor name<select name="course">
                                <option> Addisu </option><option> yakob </option><option> mulugeta </option><option> birhan </option></select>
                            Select Course<select name="course">
                                <option> architecture </option>
                                <option> php </option>
                                <option> information security </option>
                                <option> networking </option>
                                <option> software testing </option>
                            </select><br/>




                            <table >
                                <tr>
                                    <td>assignment given </td><td><input type=radio name="0" value="strongly disagree">strongly disagree</td><td><input type=radio name="0" value="disagree">disagree</td><td><input type=radio name="0" value="certain">certain</td><td><input type=radio name="0" value="agree">agree</td><td><input type=radio name="0" value="strongly agree">strongly agree</td>
                                </tr>
                            </table>
                            <br/>
                            <table >
                                <tr><td>take attendance </td><td><input type=radio name="1" value="strongly disagree">strongly disagree</td><td><input type=radio name="1" value="disagree">disagree</td><td><input type=radio name="1" value="certain">certain</td><td><input type=radio name="1" value="agree">agree</td><td><input type=radio name="1" value="strongly agree">strongly agree</td>
                                </tr>
                            </table>
                            <br/>
                            <table >
                                <tr><td>give make up class </td><td><input type=radio name="2" value="strongly disagree">strongly disagree</td><td><input type=radio name="2" value="disagree">disagree</td><td><input type=radio name="2" value="certain">certain</td><td><input type=radio name="2" value="agree">agree</td><td><input type=radio name="2" value="strongly agree">strongly agree</td>
                                </tr>
                            </table>
                            <br/>
                            <table >
                                <tr>
                                    <td>teaching mood is student centre </td><td><input type=radio name="3" value="strongly disagree">strongly disagree</td><td><input type=radio name="3" value="disagree">disagree</td><td><input type=radio name="3" value="certain">certain</td><td><input type=radio name="3" value="agree">agree</td><td><input type=radio name="3" value="strongly agree">strongly agree</td>
                                </tr>
                            </table>
                            <br/>
                            <table >
                                <tr>
                                    <td>send text before class when miss the class </td><td><input type=radio name="4" value="strongly disagree">strongly disagree</td><td><input type=radio name="4" value="disagree">disagree</td><td><input type=radio name="4" value="certain">certain</td><td><input type=radio name="4" value="agree">agree</td><td><input type=radio name="4" value="strongly agree">strongly agree</td>
                                </tr>
                            </table>
                            <br/>
                            <table >
                                <tr>
                                    <td>present in the class on time </td><td><input type=radio name="5" value="strongly disagree">strongly disagree</td><td><input type=radio name="5" value="disagree">disagree</td><td><input type=radio name="5" value="certain">certain</td><td><input type=radio name="5" value="agree">agree</td><td><input type=radio name="5" value="strongly agree">strongly agree</td>
                                </tr>
                            </table>
                            <br/>
                            <table >
                                <tr>
                                    <td>participatory approach </td><td><input type=radio name="6" value="strongly disagree">strongly disagree</td><td><input type=radio name="6" value="disagree">disagree</td><td><input type=radio name="6" value="certain">certain</td><td><input type=radio name="6" value="agree">agree</td><td><input type=radio name="6" value="strongly agree">strongly agree</td>
                                </tr>
                            </table>
                            <br/>
                            <button type="submit" align="center" value="save"  >save</button>

                        </form>
                        <table>
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