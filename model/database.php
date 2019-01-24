<?php
# Localhost connection option
$dsn = 'mysql:host=localhost:3306;dbname=bca-history-conference';
$username = 'root';
$password = 'root';

#Live Version Connection Info
/*$dsn = 'mysql:host=localhost;dbname=lepoopow_historyconf';
$username = 'lepoopow_histuser';
$password = 'historyconference2018!';*/

$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo($error_message);
    exit;
}

function display_db_error($error_message) {
    global $app_path;
    echo($error_message);
    exit;
}
?>