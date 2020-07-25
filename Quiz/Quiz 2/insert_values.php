<?php

$link = mysqli_connect('localhost','root','','QUIZ_2');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('AD_PRES','President','20000','40000');";
$sql .= "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('AD_VP','Administration Vice President','15000','30000');";
$sql .= "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('AD_ASST','Administration Assistant','3000','6000');";
$sql .= "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('AC_MGR','Accounting Manager','8200','16000');";
$sql .= "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('AC_ACCOUNT','Public Accountant','4200','9000');";
$sql .= "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('SA_MAN','Sales Manager','10000','20000');";
$sql .= "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('SA_REP','Sales Representative','6000','12000');";
$sql .= "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('ST_MAN','Stock Manager','5500','8500');";
$sql .= "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('ST_CLERK','Stock Clerk','2000','5000');";
$sql .= "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('IT_PROG','Programmer','4000','10000');";
$sql .= "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('MK_MAN','Marketing Manager','9000','15000');";
$sql .= "INSERT INTO Jobs(JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) VALUES
('MK_REP','Marketing Representative','4000','9000')";

if(mysqli_multi_query($link, $sql))
{
    echo "VALUES INSERED";
}

else
{
    echo "Error: Could not able to insert values." .mysqli_error($link);
}

mysqli_close($link)

?>