
<!DOCTYPE html>
<html>
<head>
	<title>Roll Dice</title>
</head>
<body>
	<h1>Roll Dice</h1>
	<p>You rolled a <?=$roll?></p>
	<p>You guessed a <?=$guess?></p>
	<? if ($roll == $guess): ?>
		<p>Good Job. You got it right.</p>
	<? endif; ?>
</body>
</html>