<!DOCTYPE html>
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
	var conf = form.confirm.value;
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
	var email = form.email.value;
	var ev = document.getElementById("validation.email");
	if(email.indexOf('@') > -1){
		ev.style.display = "none";
	}
	else{
		ev.style.display = "block";
		ev.innerText = "Please enter a valid email address";
		succeeded = false;
	}

	return succeeded;	
}
</script>
</head>
<body>
<div style="margin-left: 50%; margin-right:50%;">
<form method="POST" action="#" onsubmit="return validate();">
<input name="name" type="text" placeholder="Enter your name"/>
<input name="email" type="emai" placeholder="name@example.com"/>
<span id="validation.email" style="display:none;"></span>
<input type="password" name="password" placeholder="Enter password"/>
<input type="password" name="confirm" placeholder="Re-Enter password"/>
<span style="display:none;" id="validation.password"></span>
<input type="submit" value="Try it"/>
</form>
</div>

Security Questions :  
<select>  
  <option value="Select">Select One</option>}  
  <option value="Q1">Where are you from?</option>  
  <option value="Q2">What high school did you go to?</option>  
  <option value="Q3">What is your favorite color?</option>  
  <option value="Q4">Where was your mother from?</option>  
  <option value="Q5">How old are you?</option>  
  <option value="Q6">What is the name of your first pet?</option>  
  <option value="Q7">What is your mothers maiden name?</option>  
  <option value="Q8">Your siblings name?</option>  
</select>   
</body>
</html>
<?php checkPasswords();?>
<?php
if(isset($_POST)){
	echo "<br><pre>" . var_export($_POST, true) . "</pre><br>";
}
?>
