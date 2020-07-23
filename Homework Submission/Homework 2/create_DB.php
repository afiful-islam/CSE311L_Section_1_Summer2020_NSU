<?php

$link = mysqli_connect('localhost','root','');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "CREATE DATABASE CSE_311_H_2";

if(mysqli_query($link, $sql))
{
    echo "DB Created";
}

else
{
    echo "Error: Could not create DB." .mysqli_error($link);
}

mysqli_close($link)

?>