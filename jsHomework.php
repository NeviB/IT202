<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
		<script>
		var myDiv = document.createElement("div");
		var myPhrase = document.createElement("p");
		myPhrase.innerText = 'new element added';
		document.body.appendChild(myDiv);
		myDiv.appendChild(myPhrase);
		</script>
	</body>
</html>
