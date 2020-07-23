<?php

$link = mysqli_connect('localhost','root','','CSE_311_H_2');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE Departments(
    Department_Id INT(4) PRIMARY KEY,
    Department_Name VARCHAR(20),
    Manager_Id INT(6),
    Location_Id INT(4)
    )";

if(mysqli_query($link, $sql))
{
    echo "Table Created";
}

else
{
    echo "Error: Could not create table." .mysqli_error($link);
}

mysqli_close($link)

?>