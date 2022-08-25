<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายชื่อนักศึกษา</title>
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
$sql = "SELECT * FROM `student`;";

$mysql_statement = $mysqli->query($sql);


?>
<table border="1">
  <tr>
    <th>Student ID</th>
    <th>Name</th>
    <th>Mobile</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
  while ($result = $mysql_statement->fetch_array()) {
  ?>
  <tr>
    <td><?php echo $result["stuid"];?></td>
    <td><?php echo $result["firstname"].' '.$result["lastname"];?></td>
    <td><?php echo $result["mobile"];?></td>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>