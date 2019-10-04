<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
function getName(){
	if(isset($_GET['name'])){
		echo "<p>Hello, " . $_GET['name'] . "</p>";
	}
}
?>

<html>
<head></head>

<body><?php getName();?>
<form mode="GET" action="#">
<input name = "Username" type = "text" placeholder="Enter Username"/>
<!--new content-->>
<input name="password" type= "password" placeholder="Enter password"/>
<input name="password2" type= "password" placeholder="Confirm password"/>
<input type="submit" value="Try it"/>
<input type="reset" value="Clear Form"/>
</form>
</body>
</html>

<?php
if(isset($_GET)){
	echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";


}
}
