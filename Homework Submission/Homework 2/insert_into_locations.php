<?php

$link = mysqli_connect('localhost','root','','CSE_311_H_2');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "INSERT INTO Locations(Location_Id,Street_Address,Postal_Code,City,State_Province,Country_Id) VALUES
('1400','2014 Jabberwocky Rd','26192','Southlake','Texas','US');";
$sql .= "INSERT INTO Locations(Location_Id,Street_Address,Postal_Code,City,State_Province,Country_Id) VALUES
('1500','2011 Interiors Blvd','99236','South San Francisco','California','US');";
$sql .= "INSERT INTO Locations(Location_Id,Street_Address,Postal_Code,City,State_Province,Country_Id) VALUES
('1700','2004 Charade Rd','98199','Seattle','Washington','US');";
$sql .= "INSERT INTO Locations(Location_Id,Street_Address,Postal_Code,City,State_Province,Country_Id) VALUES
('1800','460 Bloor St. W.','ON M5S 1X8','Toronto','Ontario','CA');";
$sql .= "INSERT INTO Locations(Location_Id,Street_Address,Postal_Code,City,State_Province,Country_Id) VALUES
('2500','Magdalen Centre- The Oxford Sc. Park','OX9 9ZB','Oxford','Oxford','UK')";


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