<?php
$name = $_POST["name"];
$email = $_POST["email"];
$suggestion = $_POST["suggest"];

echo "<pre>";
$email_body = "";
$email_body .= "Name: " . $name . "\n";
$email_body .= "Email: " . $email . "\n";
$email_body .= "Suggestion: " . $suggestion . "\n";
echo $email_body;
echo "</pre>";
?>