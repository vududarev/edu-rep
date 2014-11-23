<?php
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$comment = $_POST['user_comment'];
$connect_db = mysql_connect('localhost', 'root', '');
if (!$connect_db) {
    die('Ошибка соединения: ' . mysql_error());
}
$db_selected = mysql_select_db('for_ex', $connect_db);
if (!$db_selected) {
    die ('Не удалось выбрать базу foo: ' . mysql_error());
}
$sql = "SELECT id FROM users WHERE name = '" . $user_name . "';";
$result = mysql_query($sql, $connect_db);

$sql    = "INSERT INTO users (name, email) VALUES('" . $user_name . "', '" . $user_email . "');";
$result = mysql_query($sql, $connect_db);

if (!$result) {
    echo "Ошибка DB, запрос не удался\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}