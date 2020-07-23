<?php

$link = mysqli_connect('localhost','root','','CSE_311_H_2');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('100','Steven','King','SKING','515.123.4567','1987-06-17','AD_PRESS','24000','NULL','NULL','90');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('101','Neena','Kochhar','NKOCHHAR','515.123.4568','1989-09-21','AD_VP','17000','NULL','100','90');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('102','Lex','De Haan','LDEHAAN','515.123.4569','1993-01-13','AD_VP','17000','NULL','100','90');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('103','Alexander','Hunold','AHUNOLD','590.423.4567','1990-01-03','IT_PROG','9000','NULL','102','60');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('104','Bruce','Emst','BERNST','590.423.4568','1991-05-21','IT_PROG','6000','NULL','103','60');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('107','Diana','Lorentz','DLORENTZ','690.423.5567','1999-02-07','IT_PROG','4200','NULL','103','60');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('124','Kevin','Mourgos','KMOURGOS','660.123.5234','1999-11-16','ST_MAN','5800','NULL','100','50');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('141','Trenna','Rajs','TRAJS','650.121.8009','1995-10-17','ST_CLERK','3500','NULL','124','50');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('142','Curtis','Davies','CDAVIES','650.121.2994','1997-01-29','ST_CLERK','3100','NULL','124','50');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('143','Randall','Matos','RMATOS','660.121.2874','1998-03-15','ST_CLERK','2600','NULL','124','50');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('144','Peter','Vargas','PVARGAS','650.121.2004','1998-07-09','ST_CLERK','2500','NULL','124','50');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('149','Eleni','Zlotkey','EZLOTKEY','011.44.1344.429018','2000-01-29','SA_MAN','10500','2','100','80');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('174','Ellen','Abel','EABEL','011.44.1644.429267','1996-05-11','SA_REP','11000','3','149','80');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('176','Jonathon','Taylor','JTAYLOR','011.44.1644.429265','1998-03-24','SA_REP','8600','2','149','80');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('178','Kimberely','Grant','KGRANT','011.44,1644.429263','1999-05-24','SA_REP','7000','15','149','NULL');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('200','Jennifer','Whalen','JWHALEN','515.123.4444','1987-09-17','AD_ASST','4400','NULL','101','10');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('201','Michael','Hartstein','MHARTSTE','515.123.5555','1996-02-17','MK_MAN','13000','NULL','100','20');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('202','Pat','Fay','PFAY','603.123 6666','1997-08-17','MK_REP','6000','NULL','201','20');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('205','Shelley','Higgins','SHIGGINS','515.123.8080','1994-06-07','AC_MGR','12000','NULL','101','110');";
$sql .= "INSERT INTO Employees(Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commission_pct,Manager_Id,Department_Id) VALUES
('206','William','Gietz','WGIETZ','515.123.8181','1994-06-07','AC_ACCOUNT','8300','NULL','205','110')";

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