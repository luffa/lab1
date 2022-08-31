<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปรับปรุงข้อมูลนัดศึกษา</title>
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
$studId ='0';

if($_SERVER["REQUEST_METHOD"] == "POST"){
     $stuid =  $_POST["stuid"];
     $firstname =  $_POST["firstname"];
     $lastname =  $_POST["lastname"];
     $mobile =  $_POST["mobile"];

     $sql = "INSERT INTO `student`(`stuid`, `firstname`, `lastname`, `mobile`) VALUES ('".$stuid."','".$firstname."','".$lastname."','".$mobile."')";

     $insert = $mysqli->query($sql);
     if($insert){
        echo "สำเร็จ";
     }else{
        echo "ไม่สำเร็จ";
     }
}

if(isset($_GET["stuid"])){
    $studId = $_GET["stuid"];
}


?> 
<form name="frmAdd" method="post" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>   
<table border="1">
        <tr>
            <td>รหัส</td>
           <td>
                <input type="text" name="stuid" value="<?php echo $studId; ?>">
        </td>
        </tr>
        <tr>
            <td>ชื่อ</td>
            <td><input type="text" name="firstname"></td>
        </tr>
        <tr>
            <td>นามสกุล</td>
            <td><input type="text" name="lastname"></td>
        </tr>
        <tr>
            <td>เบร์โทร</td>
            <td><input type="text" name="mobile"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="บันทึก"> 
</form>
</body>
</html>