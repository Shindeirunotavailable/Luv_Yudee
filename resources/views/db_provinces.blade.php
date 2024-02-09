<?php
    if (isset($_POST['function']) && $_POST['function'] == 'provences'){
    $id $_POST['id'];
    $sql = "SELECT * FROM amphures WHERE provence_id = '$id' ";
    // ไม่ใช้ query ดึงข้อมูลแต่ใช้ ORM แทน
    // $query = mysqli_query($connection,$sql);
    echo '<option selected disabled>กรุณาเลือกอำเภอ</option>';
    foreach ($amphures as $value)
                echo '<option value="'.$value['id'].'">'.$value['name_th'].'</option>'
    endforeach
    exit();
}
if (isset($_POST['function']) && $_POST['function'] == 'amphures'){
    $id $_POST['id'];
    $sql = "SELECT * FROM districts WHERE amphure_id = '$id' ";
    echo '<option selected disabled>กรุณาเลือกตำบล</option>';
    foreach ($districts as $value)
                echo '<option value="'.$value['id'].'">'.$value['name_th'].'</option>'
    endforeach
    exit();
}
if (isset($_POST['function']) && $_POST['function'] == 'districts'){
    $id $_POST['id'];
    $sql = "SELECT * FROM districts WHERE id = '$id' ";
    $result = mysqli_fetch_assoc($query)
    echo $result['zip_code']
    exit();
}

?>
