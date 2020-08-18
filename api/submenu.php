<?php
include_once "../base.php";
$table = $_POST['table'];
$parent = $_POST['parent'];
$db = new DB($table);
if (!empty($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id) {
        if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
            $db->del($id);
        } else {
            $row = $db->find($id);
            $row['name'] = $_POST['name'][$key];
            $row['text'] = $_POST['text'][$key];
            $db->save($row);
        }
    }
}
if (!empty($_POST['name2'])) {
    foreach ($_POST['name2'] as $key => $name) {
        $new['name'] = $name;
        $new['text'] = $_POST['text2'][$key];
        $new['parent'] = $parent;
        $Menu->save($new);
    }
}

to("../admin.php?do=$table");
