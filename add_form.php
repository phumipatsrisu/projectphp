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
        <h1 class="text-center">แบบฟอร์มบันทึกข้อมูลนักเรียน</h1>
        <form action="data.php" method="POST">
            <label for="stu_id">รหัสประจำตัว :</label>
            <input type="text" name="stu_id" id="" class="form-control"><br>
            <div>
                <label for="fullname">ชื่อ-นามสกุล :</label>
                <input type="text" name="fullname" id="" class="form-control"><br>
            </div>
            <div>
                <label for="address">ที่อยู่ :</label>
                <textarea class="form-control" name="address" id=""></textarea>
            </div>
            <div>
                <label for="brithday">วันเกิด :</label>
                <input type="date" name="birthday" id="" class="form-control"><br>
            </div>
            <input class="btn btn-primary" type="submit" value="บันทึกข้อมูล">
        </form>
    </div>
</body>

</html>