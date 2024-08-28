<?php
require("dbconnect.php");

$id = $_GET["idstu"];
$sql = "DELETE FROM student WHERE id=$id";

$result = mysqli_query($con,$sql);

if($result){
    echo "ลบข้อมูลสำเร็จ";
    echo "<a href='index.php'>กลับหน้าแรก</a>";
}else{
    echo"เกิดข้อผิดพลาด";
}




?>