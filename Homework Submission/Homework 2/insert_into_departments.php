<?php

$link = mysqli_connect('localhost','root','','CSE_311_H_2');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "INSERT INTO Departments(Department_Id,Department_Name,Manager_Id,Location_Id) VALUES
('10','Administration','200','1700');";
$sql .= "INSERT INTO Departments(Department_Id,Department_Name,Manager_Id,Location_Id) VALUES
('20','Marketing','201','1800');";
$sql .= "INSERT INTO Departments(Department_Id,Department_Name,Manager_Id,Location_Id) VALUES
('50','Shipping','124','1500');";
$sql .= "INSERT INTO Departments(Department_Id,Department_Name,Manager_Id,Location_Id) VALUES
('60','IT','103','1400');";
$sql .= "INSERT INTO Departments(Department_Id,Department_Name,Manager_Id,Location_Id) VALUES
('80','Sales','149','2500');";
$sql .= "INSERT INTO Departments(Department_Id,Department_Name,Manager_Id,Location_Id) VALUES
('90','Executive','100','1700');";
$sql .= "INSERT INTO Departments(Department_Id,Department_Name,Manager_Id,Location_Id) VALUES
('110','Accounting','205','1700');";
$sql .= "INSERT INTO Departments(Department_Id,Department_Name,Manager_Id,Location_Id) VALUES
('190','Contracting','NULL','1700')";

if(mysqli_multi_query($link, $sql))
{
    echo "VALUES INSERED";
}

else
{
    echo "Error: Could not insert values." .mysqli_error($link);
}

mysqli_close($link)

?>