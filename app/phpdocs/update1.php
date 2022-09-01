<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล</title>
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

$stuid ='0';
$firstname = $lastname = $mobile = "";

if(isset($_GET["stuid"])){
    $stuid = $_GET["stuid"];
    $sql = "SELECT * FROM `student` WHERE stuid='". $stuid ."';";

    $result = $mysqli->query($sql);
    $resultArray = $result->fetch_array();
    $firstname = $resultArray["firstname"];
    $lastname = $resultArray["lastname"];
    $mobile = $resultArray["mobile"];

    echo $sql;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $stuid =  $_POST["stuid"];
    $firstname =  $_POST["firstname"];
    $lastname =  $_POST["lastname"];
    $mobile =  $_POST["mobile"];

    $sqlUpdate = "UPDATE `student` SET 
`firstname`='". $firstname ."',
`lastname`='". $lastname ."',
`mobile`='". $mobile ."'
 WHERE stuid='". $stuid ."';";

    $update = $mysqli->query($sqlUpdate);
    if($update){
       echo "สำเร็จ";
    }else{
       echo "ไม่สำเร็จ";
    }
}




?>
<form name="frmAdd" method="post" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>   
<table border="1">
        <tr>
            <td>รหัส</td>
           <td>
                <input type="text" name="stuid" value="<?php echo $stuid; ?>">
        </td>
        </tr>
        <tr>
            <td>ชื่อ</td>
            <td><input type="text" name="firstname" value="<?php echo $firstname; ?>"></td>
        </tr>
        <tr>
            <td>นามสกุล</td>
            <td><input type="text" name="lastname" value="<?php echo $lastname; ?>"></td>
        </tr>
        <tr>
            <td>เบร์โทร</td>
            <td><input type="text" name="mobile" value="<?php echo $mobile; ?>"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="บันทึก"> 
</form>   
</body>
</html>