<!DOCTYPE html>
<html>
<head>
<style>
p{color: black;}
h1,h2{background-color: magenta;}
.myClassname{background-color:cyan;}
#myId{}
</style>
<script>
	function queryParam(){
		var params = new URLSearchParams(location.search);
		if(params.has('page')){
			var page = params.get('page');
			var ele = document.getElementById(page);
			if(ele){
				let home = document.getElementById('home');
				let about = document.getElementById('about');
				home.style.display="none";
				about.style.display = "none";
				ele.style.display = "block";
			}
		}
		else{
			let home = document.getElementById('home');
			home.style.display = "block";
			let about = document.getElementById('about');
			about.style.display=  "none";
		}
	}
</script>
</head>
<body onload="queryParam();">
	<header>
		<nav> 
			<a href="?page=home">Home</a> |
			<a href="?page=about">About</a>
			<!--Create route for Home-->
			<!--Create route for About-->
		</nav>
	</header>
	<div id="home">
		<h1>Home</h1>
		<section class="myClassname">
		<p>Welcome to the home page. This is the main hub where you can choose a variety of things to do, or if you get lost randomly </p>
		</section>
	<h2>What's New</h2>

	<figcaption>Caption for Figure. <a href="https://web.njit.edu/~nab54/">My original page</a></figcaption>


	</div>
	<div id="about" style="display:none;">
		<section class="myClassname">
			<h1>About</h1>
			<p>Welcome to Crunchy Rice Studios! We are a multi-media company that thrives in both the arts and tech world. For this project, I will have 4 tabs from the top left to choose. About, Contacts, Home, and an Online Merch store. the merch store as well as the accounts made within the website will be documented within the the database. There may possibly be a game in the mix </p>
		</section>
		<article>
			<h2>The Crunchy Team</h2>
			<p>To be anncounced</p>
			<figure>
				<img src="sushi.jpg" alt="sushi" width="100px" height="100px"/>
				<figcaption>Picture above represents our logo but not really</figcaption>
			</figure>
		</article>
		
		<!-- About page using HTML5 Semantics-->
		>
	</div>
	<footer></footer>
</body>
</html>