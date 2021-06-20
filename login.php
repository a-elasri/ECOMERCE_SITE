<?php
if(!isset($_SESSION['id']))
    header("location:index.php");
else{
if(isset($_SESSION['id'])){
    $req="select * FROM users WHERE id = ".$_SESSION['id'];
    $res=$dbcnx->query($req);
    $row=$res->fetch_assoc();
    $id=$row['id'];
    $name=$row['fname'];
    $name.=" ".$row['lname'];
    }
?>