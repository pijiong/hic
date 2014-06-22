<?php
	//validate login values
	function funcValidate($username, $password){
		$bool = false;
		
		if ($username == "" or $password ==""){
			echo "please enter username and password";
			$bool = true;
		}	
		else{		
			if ($username!="pijiong" or $password!="chiradee"){
				echo "invalid username and password";
				$bool = true;
			}
		}
		return $bool;
	}
?>
