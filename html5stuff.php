<!DOCTYPE html>
<html>
<head>
<style>
figure{ border: 1px solid black; margin-left:auto; margin-right:auto; width: 60%;padding: 1%;}
aside {border: 1px solid blue; padding: 1%;}
</style>
</head>
<body>
	<header>
		<h1>Examples of HTML5 Semantic Elements</h1>
		<nav>
			<a href="https://web.njit.edu/~nab54/IT202/home.php">Home</a> | 
			<a href="https://web.njit.edu/~nab54/IT202/about.php">About</a> |
			<a href="#">Contact</a> |
			<a href="articles/1.html">First Article</a>
		</nav>
	</header>
	<section>
		<code>&lt;section&gt;</code> tags are used to separate content, they are a replacement for DIV. They're used for grouping of similar content.
				<article>
			This is my article
			<section>This is section 1</section>
			<section>This is section 2</section>
			<aside>Aside here, hint</aside>
			<figure>This would be a figure if I had one</figure>
			<caption>Helpful text?</caption>
			Articles are independant grouping that are usable bits of content.
			Think similar to an article in a magazine.
			<figure>
			Figures group information about images, diagrams, photos, code (to show), etc.
			<figcaption>Caption for Figure. <a href="https://www.w3schools.com/tags/tag_figure.asp">More details</a></figcaption>
			</figure>
		</article>
		<input type="email" value="hello" 
				disabled required/>
		<svg/>
		<embed>

		</embed>
		<canvas></canvas>
		<audio></audio>
		<video></video>
		<figure>
			<svg width="100" height="100">
			  <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
			</svg>
			<figcaption>Here's the new <code>&lt;svg&gt;</code> tag for displaying vector graphics. <a href="https://www.w3schools.com/html/html5_svg.asp">More samples</a></figcaption>
		</figure>
		<figure>
			<code>&lt;embed&gt;</code> tag is used to embed external files or plugins.
		</figure>
		<figure>
			<canvas id="myCanvas" width="200" height="100" style="border:1px solid #000000;"></canvas>
			<figcaption>Canvas tag can be used to draw graphics, animate, and respond to input. It's commonly used for JavaScript games. <a href="https://www.w3schools.com/graphics/canvas_drawing.asp">More details</a></figcaption>
		</figure>
		<aside>
			<p>Aside tags are used to mention related text that isn't part of the primary flow.</p>
			<code>&lt;audio&gt; and &lt;video&gt; tags have also been added to allow those media types without the need of a plugin like flash for example</code>
			<small><a href="https://www.w3schools.com/html/html5_audio.asp">Audio More Details</a></small>
			<small><a href="https://www.w3schools.com/html/html5_video.asp">Video More Details</a></small>
		</aside>
	<footer></footer>
</body>
</html>