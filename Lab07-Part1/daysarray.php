<?php
$days = [
	'Lundi',
	'Mardi',
	'Mercredi',
	'Jeudi',
	'Vendredi',
	'Samedi',
	'Dimanche'
];

foreach ($days as $day) {
	echo htmlspecialchars($day, ENT_QUOTES, 'UTF-8') . '<br>';
}
?>
