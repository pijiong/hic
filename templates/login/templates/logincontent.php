<?php
	//load data validation functions
	include "functions/datavalidation.php";
	
	global $username;
	global $password;
	if (isset($_POST['username']) and isset($_POST['password'])){
	
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (funcValidate($username, $password)==false){
			//login successful, load main.php
			header("Location: ../../main.php");
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../../css/global.css"/>
		<link rel="stylesheet" type="text/css" href="css/logincontent.css"/>
	</head>

	<body>
		<!--holds the content of the login page-->
		<div id="divLoginContentWrapper">
		
			<!--holds the header of the login content-->
			<div id="divLoginContentHeader">
				<span>Login your account</span>
			</div>
			
			<!--holds the body of the login content-->
			<div id="divLoginContentBody">
				<form action="login.php" method="post">
					<div class="clsInputField">
						<div class="clsInputFieldItem">
							<input type="text" class="clsLoginText" id="txtUsername" name="username" value ="<?php echo $username ?>"></input>
						</div>
					</div>
					
					<div class="clsInputField">
						<div class="clsInputFieldItem">
							<input type="password" class="clsLoginText" id="txtPassword" name="password"></input>
						</div>
					</div>
					
					<div class="clsInputField" id="divButton">
						<div class="clsInputFieldItem">
							<input type="submit" class="clsLoginButton" id="btnLogin" name="login" value="Log-in"></input>
						</div>
					</div>
				</form>
			</div>
			
		</div>
	</body>
</html>