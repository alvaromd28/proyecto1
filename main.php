<?php
    require_once('util/db_manager.php');
    
    if (isset($_POST['submit'])){
        
        $userName = $_POST['userName'];
        $msg = $_POST['msg'];
        echo $userName;
        echo $msg;
        insert ($userName, $msg);
    }
    /*get_msg();*/
?>