<?php

require "confige.php"; 

function redirect($location){
    header("location:".$location);
}

function query($sql){
    global $connection;
    return mysqli_query($connection,$sql);
}

function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}

function logout(){
    $_SESSION['logged'] = false;
    session_destroy();
    redirect("index.php");
}

function emty_card($id,$prix){
    unset($_SESSION['product_'][$id]);
    $_SESSION['count_'] -= 1;
    $_SESSION['totaux_'] -= $prix;
    redirect("card.php");
}