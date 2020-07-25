<?php

$link = mysqli_connect('localhost','root','','QUIZ_2');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE Jobs(
    JOB_ID VARCHAR(10) NOT NULL PRIMARY KEY,
    JOB_TITLE VARCHAR(35) NOT NULL,
    MIN_SALARY INT(6),
    MAX_SALARY INT(6)
    )";

if(mysqli_query($link, $sql))
{
    echo "Table Created";
}

else
{
    echo "Error: Could not able to create Table." .mysqli_error($link);
}

mysqli_close($link)

?>