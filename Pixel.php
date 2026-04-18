<?php
header('Content-Type: image/png');
$im = imagecreatetruecolor(1, 1);
imagepng($im);
imagedestroy($im);

// Enregistrez les informations de suivi
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$date = date('Y-m-d H:i:s');

// Pour enregistrer dans un fichier log
$log_entry = "Date: $date | IP: $ip | User Agent: $user_agent\n";
file_put_contents('email_opens.log', $log_entry, FILE_APPEND);

// Optionnel: enregistrez également dans une base de données
?>
