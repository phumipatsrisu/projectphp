<?php

require("dbconnect.php");

$stu_id = $_POST["stu_id"];
$fullname = $_POST["fullname"];
$address = $_POST["address"];
$birthday = $_POST["birthday"];

$sql = "INSERT INTO student(stu_id,fullname,address,birthday) VALUES('$stu_id','$fullname','$address','$birthday')";

$result = mysqli_query($con,$sql);

if ($result){
    header("location:index.php");
    exit(0);
}

