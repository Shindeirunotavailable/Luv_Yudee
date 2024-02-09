<?php

    if (isset($_POST['function']) && $_POST['function'] == 'provences')
    $id $_POST['id'];
    $sql = "SELECT * FROM amphures WHERE provence_id = '$id' ";
    // ไม่ใช้ query ดึงข้อมูลแต่ใช้ ORM แทน
    // $query = mysqli_query($connection,$sql);
    echo '<option selected disabled>กรุณาเลือกอำเภอ</option>';
    foreach ($amphures as $value)
                echo '<option value="'.$value['id'].'">'.$value['name_th'].'</option>'
    endforeach
    exit();
?>
