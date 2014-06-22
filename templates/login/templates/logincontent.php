<?php
	//load data validation functions
	include "functions/datavalidation.php";
	
	global $username;
	global $password;
	if (isset($_POST['Username']) and isset($_POST['Password'])){
	
		$username = $_POST['Username'];
		$password = $_POST['Password'];

		if (funcValidate($username, $password)==false){
			//login successful, load main.php
			header("Location: ../main.php");
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/logincontent.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/global.css"/>
	</head>

	<body>
		<div class="clsContainer">
			<div id="divLoginHeader">
				<span>Login your account</span
			</div>
			
			<div id="divLoginContent">
				<form action="login.php" method="post">
					<div class="clsInputField">
						<div class="clsInputFieldItem">
							<span>Username : </span>
							<input type="text" class="clsTextbox" id="txtUsername" name="username" value ="<?php echo $username ?>"></input>
						</div>
					</div>
					
					<div class="clsInputField">
						<div class="clsInputFieldItem">
							<span>Password : </span>
							<input type="password" class="clsTextbox" id="txtPassword" name="password"></input>
						</div>
					</div>
					
					<div class="clsInputField" id="divButton">
						<div class="clsInputFieldItem">
							<input type="submit" class="clsButton" id="btnLogin" name="login" value="Log-in"></input>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>