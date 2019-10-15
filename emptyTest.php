<!DOCTORATE html>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function checkPasswords(){
	if(isset($_POST['password']) && isset($_POST['confirm'])){
		if($_POST['password'] == $_POST['confirm']){
			echo "<br>Passwords Matched!<br>";
		}
		else{
			echo "<br>Passwords didn't match!<br>";
		}
	}
}
?>
<html>
<head>
<script>
function validate(){
	var form = document.forms[0];
	var password = form.password.value;
	var conf = form.passwordconfirm.value;
	console.log(password);
	console.log(conf);
	let pv = document.getElementById("validation.password");
	let succeeded = true;
	if(password == conf){
		
		pv.style.display = "none";
	
	}
	else{
		pv.style.display = "block";
		pv.innerText = "Passwords don't match";
		
		succeeded = false;
	}

	if(password == ""){
		pv.style.display = "block";
		pv.innerText = "your password is empty, you need to type something in it";

		succeeded = false;
	}

	var username = form.username.value;
	var uv = document.getElementById("validation.username");

	if (username == "")
	{
		uv.style.display = "block";
		uv.innerText = "Please type in a username";
		succeeded = false;
	}		





	var email = form.email.value;
	var emailconfirm = form.emailconfirm.value;
	var ev = document.getElementById("validation.email");
	if(email.indexOf('@') > -1){
		ev.style.display = "none";
	}
	else{
		ev.style.display = "block";
		ev.innerText = "Please enter a valid email address";
		succeeded = false;
	}
	
	if(email == emailconfirm){
		ev.style.display = "none";
	}

	else{
	ev.style.display = "block";
		ev.innerText = "Emails don't match";
		
		succeeded = false;
	}
	if (email == "")
	{
		ev.style.display = "block";
		ev.innerText = "Please enter in an email";
		succeeded = false;
	}


	return succeeded;	
}
</script>
</head>
<body>
<div style="margin-left: 50%; margin-right:50%;">
<form onsubmit="return validate();>

<input name="email" type="email"   placeholder="name@example.com"/>
<input name="emailconfirm" type="email"  placeholder="name@example.com"/>
<input name="password" type="password"  placeholder="Enter password"/>
<input name="passwordconfirm" type="password" placeholder="Re-Enter password" />
<input name="username"  placeholder="Enter your username"/>
<span id="validation.email" style="display:none;"></span>
<span style="display:none;" id="validation.password"></span>
<span id="validation.username" style="display:none;"></span>

<input type="submit" value="Submit"/>
</form>
</div>
</body>
<?php checkPasswords();?>
<?php
if(isset($_POST)){
	echo "<br><pre>" . var_export($_POST, true) . "</pre><br>";
}
?>
