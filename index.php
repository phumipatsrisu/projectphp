<?php
require("dbconnect.php");
$sql = "SELECT * FROM student";
$result = mysqli_query($con, $sql);
// $row = mysqli_fetch_row($result);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ระบบบันทึกข้อมูลนักเรียน</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">แบบฟอร์มบันทึกข้อมูลนักเรียน</h1> <br>
        <a class="btn btn-primary" href="add_form.php">เพิ่มข้อมูลนักเรียน</a>
    </div> <br>
    <div class="container">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>ลำดับ</th>
                    <th>รหัสประจำตัว</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ที่อยู่</th>
                    <th>วันเกิด</th>
                    <th>แก้ไข</th>
                    <th>ลบข้อมูล</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_row($result)) { ?>
                    <tr>
                        <td><?php echo "$row[0]" ?></td>
                        <td><?php echo "$row[1]" ?></td>
                        <td><?php echo "$row[2]" ?></td>
                        <td><?php echo "$row[3]" ?></td>
                        <td><?php echo "$row[4]" ?></td>

                        <td></td>
                        <td><a class="btn btn-danger" href="edit_form.php?idstu=<?php echo $row[0] ?>">ลบข้อมูล</a></td>
                    </tr>
            </tbody>
        <?php } ?>
        </table>
    </div>
</body>

</html>