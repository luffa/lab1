<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host = "db";
$username = "root";
$password = "phpdb1234";

$database = "phpproject";

$mysqli = new mysqli($host,$username,$password,$database);

if($mysqli->connect_errno){
  printf("Connection failed: %s\n",$mysqli->connect_error);
  exit();
}
$studId='0';
if(isset($_GET["stuid"])){
    $studId = $_GET["stuid"];
    $sql = "select * from student where stuid=" . $studId;

}

?>  
</body>
</html>