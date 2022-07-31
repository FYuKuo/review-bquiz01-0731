<?php
include('./base.php');
$table = $_POST['table'];
$DB = new DB($table);
$row = $DB->find(1);
$row['text'] = $_POST['text'];

$DB->save($row);

to("../back.php?do=$table");


?>