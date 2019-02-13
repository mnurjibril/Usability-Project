<html>
    <head>
        <title>TES - Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="common.css">
        <link rel="stylesheet" type="text/css" href="layout.css">
        
    </head>
    <body>

       < <div id ="Container">

            <div id="Header">
                <b> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Teachers Evaluation System</b>
                <span style="vertical-align: middle; display: table-cell; padding: 12px 2px 12px 12px;">


                </span></div>

<div id="Leftnavv">
 
	</div>

	<div id="Rightnavv"> </div>
            <div id="fullBody"> 
                <div class="loginBody">
				
				
				<form class="form-signin" align="center" method="POST" action="login4.php">
                        
                        <h1 class="h3 mb-3 font-weight-normal">sign in</h1>
                        
                        user name<input type="text" name="username" class="form-control" placeholder="User Name" required autofocus><br><br>
                        <br>
                        password<input type="password" name="pass" class="form-control" placeholder="Password" required><br><br>                        
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        <p class="mt-5 mb-3 text-muted"> </p>
                    </form>
				
				
				
				<fieldset>
                    <form class="form-signin" align="center" method="POST" action="login3.php">
                        
                        <h1 class="h3 mb-3 font-weight-normal">create new account</h1>
                        
                        user name<input type="text" name="username" class="form-control" placeholder="User Name" required autofocus><br><br>
                        <br>
                        password<input type="password" name="pass" class="form-control" placeholder="Password" required><br><br>
						confirm password<input type="password" name="pass2" class="form-control" placeholder="Password" required><br><br>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        <p class="mt-5 mb-3 text-muted"> </p>
                    </form>
					</fieldset>
                </div>
            </div>
            <div id="Footer">
                <p>Copyright &copy; HiLCoE . All Rights Reserved . Contact Us</p>
            </div>

    </body>
</html>