<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Booking confirmation</title>
</head>
<body>
	<h1>Booking confirmation</h1>
	<?php foreach ($_POST as $name => $value): ?>
		<?php if (isset($_POST[$name])): ?>
			<p><?= htmlspecialchars((string) $name, ENT_QUOTES, 'UTF-8') ?>: <?= htmlspecialchars(is_array($value) ? (json_encode($value) ?: '') : (string) $value, ENT_QUOTES, 'UTF-8') ?></p>
		<?php endif; ?>
	<?php endforeach; ?>
</body>
</html>