<?php
include('./base.php');
$table = $_POST['table'];
$DB = new DB($table);

$data = [];

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
    $data['img'] = $_FILES['img']['name'];
}

if(!empty($_POST['text'])){
    $data['text'] = $_POST['text'];
}

switch ($table) {
    case 'title':
        $data['sh'] = 0;
        break;
    
    case 'ad':
    case 'mvim':
    case 'image':
    case 'news':
        $data['sh'] = 1;

        break;
    
    case 'admin':

        break;
    
    case 'menu':
        $data['parent'] = 0;
        $data['sh'] = 1;
        $data['href'] = $_POST['href'];

        break;
}

if(!empty($data)){

    $DB->save($data);
}

to("../back.php?do=$table");
?>