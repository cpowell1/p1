<?php require('quotes-logic.php'); ?>
<!doctype html>
<html lang="en">
<head>

	<title>Christian Powell | Project 1</title>
	<meta charset='utf-8'>
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
		
</head>
<body>
	<div class="container">
		<h1>Christian Powell</h1>
		
		<img src="images/headshot.jpg" alt="headshot" title="Christian Powell" />
		
		<p>Hi, my name is Christian Powell, and I am a Web Strategy Manager in Nashville, TN. I also do freelance web design as a side gig. I went to University of Mississippi for an undergraduate degree in Marketing. I proceeded to go to the University of Florida where I got a Master of Business Administration and a Master of Art in Mass Communication in Web Design. I love to run, and I spend most of my free time with my dog.</p>
		<div class="quotes">
			<?php 
			echo $quote[array_rand($quote)];
			?>
		</div>
		
	</div>
	
</body>
</html>

