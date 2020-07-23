<?php

$link = mysqli_connect('localhost','root','','CSE_311_H_2');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE Employees(
    Employee_Id INT(6) PRIMARY KEY,
    First_Name VARCHAR(20),
    Last_Name VARCHAR(25) NOT NULL,
    Email VARCHAR(25) NOT NULL,
    Phone_Number VARCHAR(15),
    Hire_Date DATE NOT NULL,
    Job_Id VARCHAR(10) NOT NULL,
    Salary INT(8),
    Commission_pct INT(2),
    Manager_Id INT(6),
    Department_Id INT(4)
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