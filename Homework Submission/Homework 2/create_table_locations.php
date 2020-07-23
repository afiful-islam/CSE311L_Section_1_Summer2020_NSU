<?php

$link = mysqli_connect('localhost','root','','CSE_311_H_2');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE Locations(
    Location_Id INT(4) PRIMARY KEY,
    Street_Address VARCHAR(40),
    Postal_Code VARCHAR(12),
    City VARCHAR(30) NOT NULL,
    State_Province VARCHAR(25),
    Country_Id VARCHAR(2)
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