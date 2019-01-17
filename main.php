<?php
    require_once('util/db_manager.php');
    if (isset($_POST['submmit'])){
        $name = $_POST['name'];
        $text = $_POST['text'];
        insert($name,$text);
    }
    get_msg();
?>