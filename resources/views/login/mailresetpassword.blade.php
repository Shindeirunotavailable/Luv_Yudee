<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ขอบคุณที่ลงทะเบียนใน Yuudee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* สีฟ้าอ่อน */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #f8f8f8; /* สีขาว */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff; /* สีน้ำเงิน */
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            color: #333333; /* สีเทาเข้ม */
            line-height: 1.6;
            margin-bottom: 15px;
        }

        p.signature {
            font-weight: bold;
            text-align: right;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a {
            text-decoration: none;
            color: #007bff; /* สีน้ำเงิน */
        }

        footer {
            padding: 20px;
            border-top: 1px solid #cccccc; /* เส้นขอบด้านบนสีเทา */
            text-align: center;
        }

        footer p {
            margin-bottom: 10px;
        }

        footer ul {
            margin-bottom: 10px;
            padding-left: 0;
        }

        footer ul li {
            margin-bottom: 5px;
        }

        footer ul li a {
            color: #007bff; /* สีน้ำเงิน */
        }

        button.reset-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #0071bc; /* สีน้ำเงิน */
            color: #ffffff; /* สีขาว */
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button.reset-btn:hover {
            background-color: #015b97; /* เพิ่มเติมเข้มขึ้นเล็กน้อยเมื่อ hover */
        }

        .img{
            width: 50%;
            margin-left: 30%;
        }

        .pt-40{
            padding-top: 40px;
        }       

    </style>
</head>

<body>

    <div class="container">
        <img src="https://img2.pic.in.th/pic/YuuDee267fbaecd9fc1c550.png" alt="YuuDee267fbaecd9fc1c550.png" class="img">
        <p class="pt-40">เราได้รับคำขอรีเซ็ตรหัสผ่านสำหรับบัญชีของคุณที่เชื่อมโยงกับอีเมลนี้ที่เราได้รับ</p>
        <p>หากคุณไม่ได้ทำคำขอเปลี่ยนรหัสผ่านนี้โปรดละเมิดอีเมล์นี้</p>
        <form action="{{ url('resetPassword') }}" method="GET">
            @csrf
            <input type="hidden" name="resetToken" value="{{ $resetToken }}">
            <button type="submit" class="reset-btn">รีเซ็ตรหัสผ่าน</button>
        </form>
        <p>หากคุณไม่ได้ทำคำขอนี้ โปรดละเมิดอีเมล์นี้</p>
        <p class="signature">ขอแสดงความนับถือ<br>ทีม Yuudee</p>
        <footer>
            <p>อีเมลฉบับนี้เป็นการแจ้งข้อมูลอัตโนมัติ กรุณาอย่าตอบกลับอีเมลนี้</p>
            <p>สอบถามข้อมูลเพิ่มเติมได้ที่:</p>
            <ul>
                <li>โทร. 091-545-3939</li>
                <li>อีเมล: <a href="mailto:mr.luvdrive@gmail.com">mr.luvdrive@gmail.com</a></li>
                <li>Facebook: <a href="https://www.facebook.com/LuvDriveCarRent">Luv Drive Car Rent</a></li>
                <li>LINE Official Account: <a href="https://lin.ee/1234567890">@Luvdrive</a></li>
            </ul>
        </footer>
    </div>

</body>

</html>
