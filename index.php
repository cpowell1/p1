<!doctype html>
<html>
<head>

	<title>Hello World</title>
	<meta charset='utf-8'>
		
</head>
<body>
	<div class="container">
		<h1>Christian Powell</h1>
		
		<img src="images/headshot.jpg" alt="headshot" title="Christian Powell" />
		
		<p>Hi, my name is Christian Powell, and I am a Web Strategy Manager in Nashville, TN. I also do freelance web design as a side gig. I went to University of Mississippi for an undergraduate degree in Marketing. I proceeded to go to the University of Florida where I got a Master of Business Administration and a Master of Art in Mass Communication in Web Design. I love to run, and I spend most of my free time with my dog.</p>

		<?php 
		echo 'Hello World! You are visiting ';
		echo $_SERVER['SERVER_NAME']; 
		?>
		
	</div>
	
</body>
</html>

