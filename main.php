<?php
    require_once('util/db_manager.php');

     if( isset($_POST['face1'])){
         echo "Pésimo";
         insertRating('1');
     }

     if( isset($_POST['face2'])){
        echo "Mal";
        insertRating('2');
    }

    if( isset($_POST['face3'])){
        echo "Regular";
        insertRating('3');
    }

    if( isset($_POST['face4'])){
        echo "Está bien";
        insertRating('4');
    }

    if( isset($_POST['face5'])){
        echo "Genial";
        insertRating('5');
    }
?>