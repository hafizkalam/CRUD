<?php

/*
* To change this template, choose Tools | Templates
* and open the template in the editor.
*/
    $host   ="10.0.0.194";
    $user ="admin";
    $password ="Admin.123";
    $db ="scrud"; 
    
    $config =  mysqli_connect($host, $user, $password,$db);
    if(mysqli_connect_errno())
    {
    echo'Koneksi database gagal:'.mysqli_connect_error();
    }
    else {
    }
    error_reporting(0);
?>
