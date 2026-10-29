<?php
$marks[] = 85;
$marks[] = 85;
$marks[] = 95;

$marks[1] = 90;
$ave = array_sum($marks) / count($marks);

if ($ave >= 50) {
	$status = "PASSED";
} else {
	$status = "FAILED";
}

echo "Average: " . $ave . "<br>";
echo "Status: " . $status;
?>
