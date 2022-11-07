<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Мой сайт на РНР</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
	<div class="flex-container">
		<div class="haeder">
		<br>
			<?php include 'logo.inc.php' ?>
			<?php include 'menu.inc.php' ?>
		</div>
		<div class="about_me">
			<h1> <?php echo $p ?> </h1>
				<div class="data">
					<div class="myImg">
						<?php echo '<img class="displayed" src="img/1.png"> '; ?>
					</div>
					<div class="fullname">
						<p> Меня зовут:
						<?php echo $forname, ' ', $name . '<br>';
							  echo 'Мой город:', ' ', $stadt; ?>
						</p>
						<p> Мне
						<?php echo $alt; ?>
						лет
						</p>
						<h5> Мы научились создавать переменные </h5>
						<h5> Изучили простые операции с ними </h5>					
					</div>
				</div>
				<div class="knowlege">
					<?php include 'knowledge.inc.php'; ?>
					<?php echo $a, ' ', $b, ' ', $c; ?> 
					<br>
					<?php
						$a = 10;
						$b = 20;
						$c = $a + $b;
						echo $a;
						echo '+';
						echo $b;
						echo '=';
						echo $c;
					?> 
					<br>
					<?php 
						echo $d;
						echo ' (';
						echo $price;
						echo ')';
					?>
				</div>
				<div class="math">
					<?php include 'math.inc.php'; ?>
					<?php
						echo $x;
						echo $y;
					?>
				</div>
				<div class="article">
					<p class="text">
						Однажды в студеную зимнюю пору...
					</p>
				</div>
		</div>
			<?php include 'footer.inc.php' ?>
	</div>
</body>
</html>