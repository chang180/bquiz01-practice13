<?php
include_once "../base.php";
$table=$_POST['table'];
$db=new DB($table);
$row=$db->find($_POST['id']);
if(!empty($_FILES['name']['tmp_name'])){
    move_uploaded_file($_FILES['name']['tmp_name'],"img/".$_FILES['name']['name']);
    $row['name']=$_FILES['name']['name'];
}
$db->save($row);
to("../admin.php?do=$table");