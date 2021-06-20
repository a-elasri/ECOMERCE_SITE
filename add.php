<?php
session_start();


if (isset($_POST['action'])){
	if ($_POST['action'] == "add") {
        if(!isset($_SESSION['all_id'])){
            $_SESSION['all_id']=array();
        }
		if(isset($_POST['id'])){
            $_SESSION['id']=$_POST['id'];
        }
        array_push($_SESSION['all_id'],$_SESSION['id']);
        print_r($_SESSION['all_id']);
	}

    if ($_POST['action'] == "delete") {
        unset($_SESSION['all_id']);
    }



}



?>