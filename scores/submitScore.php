<?php

$name = $_POST["name"];
$score = $_POST["score"];

if (!(empty($name) && empty($score))) {
	$str = file_get_contents("scores.json");
	$newstr = rtrim($str, "]") . ", {\n\t\"name\": \"" . $name . "\",\n\t\"score\": " . $score . "\n}]";
	file_put_contents("scores.json", $newstr);
}
?>