<?php
    $mang = $so_lan = $mang_uniq = "";

    if (isset($_POST['btn_thuchien'])) {
        if (!empty($_POST['nhap_mang'])) {
            // Chuyển chuỗi nhập thành mảng
            $mang = explode(",", $_POST['nhap_mang']);
            
            // Loại bỏ khoảng trắng 2 đầu mỗi phần tử
            $mang = array_map('trim', $mang);

            // Đếm số lần xuất hiện
            $so_lan = "";
            $dem = array_count_values($mang);
            foreach ($dem as $key => $val) {
                $so_lan .= $key . " xuất hiện " . $val . " lần; ";
            }

            // Tạo mảng duy nhất
            $mang_uniq = implode(", ", array_unique($mang));
            
            // Hiển thị lại mảng ban đầu
            $mang = implode(", ", $mang);
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đếm số lần xuất hiện và tạo mảng duy nhất</title>
    <style>
        *{font-family: Tahoma;}
        table{
            width: 500px;
            margin: 50px auto;
            border-collapse: collapse;
        }
        th{
            background: #33CCFF;
            padding: 10px;
            font-size: 18px;
        }
        td{padding: 6px;}
        input[type=text]{width: 95%;}
        input[type=submit]{width: 100%; padding: 5px;}
    </style>
</head>
<body>
    <form method="POST" action="mang-3.php">
        <table border="1">
            <tr>
                <th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</th>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="nhap_mang" value="<?php echo isset($_POST['nhap_mang']) ? $_POST['nhap_mang'] : ''; ?>"></td>
            </tr>
            <tr>
                <td>Số lần xuất hiện:</td>
                <td><input type="text" readonly value="<?php echo $so_lan; ?>"></td>
            </tr>
            <tr>
                <td>Mảng duy nhất:</td>
                <td><input type="text" readonly value="<?php echo $mang_uniq; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="btn_thuchien" value="Thực hiện"></td>
            </tr>
        </table>
    </form>
</body>
</html>
