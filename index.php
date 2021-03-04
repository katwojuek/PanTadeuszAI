<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Master Thaddeus</title>
</head>
<body>
	<h1>Master Thaddeus, or the Last Foray in Lithuania: A Nobility's Tale of the Years 1811–1812, in Twelve Books of Verse</h1>
	<h2>Table of contents</h2>
	<div>
		<ul>
			<?php
				for ($b=1; $b <= 12; $b++) { 
					// echo "<li><a href='./k$b.html'>Book$b</a></li>";
					echo '<li><a href="./?book=k'.$b.'">Book'.$b.'</a></li>';
				}
			?>
		</ul>
	</div>
	<div>
		<?php

			$b = $_GET['book'];
			// $book_content = file_get_contents("./$b.html");
			// echo $book_content;
			include_once $b.".html";
		?>
	</div>
</body>
</html>