<?php
$file = 'color.txt';
$current = file_get_contents($file);
$newContent = $_POST['wc'];

// $content = trim(file_get_contents("php://input"));
$decoded = json_decode($newContent, true);
$current .= $decode;
file_put_contents($file, $current);

?>