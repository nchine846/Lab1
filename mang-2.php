<?php
    $mang = [];
    $max = $min = $tong = "";
    $so_pt = "";

    if (isset($_POST['btn_tinh'])) {
        $so_pt = (int)$_POST['so_pt'];

        if ($so_pt > 0) {
            // Phát sinh mảng ngẫu nhiên từ 0 - 100
            for ($i = 0; $i < $so_pt; $i++) {
                $mang[] = rand(0, 100);
            }

            // Tính toán
            $max = max($mang);
            $min = min($mang);
            $tong = array_sum($mang);
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Phát sinh mảng và tính toán</title>
    <style>
        *{font-family: Tahoma;}
        table{
            width: 450px;
            margin: 50px auto;
            border-collapse: collapse;
        }
        th{
            background: #3399FF;
            color: white;
            padding: 10px;
            font-size: 18px;
        }
        td{padding: 6px;}
        input[type=text]{width: 95%;}
    </style>
</head>
<body>
    <form method="POST" action="mang-2.php">
        <table border="1">
            <tr>
                <th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
            </tr>
            <tr>
                <td>Nhập số phần tử:</td>
                <td>
                    <input type="text" name="so_pt" value="<?php echo $so_pt; ?>">
                    <input type="submit" name="btn_tinh" value="Phát sinh và tính toán">
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" readonly value="<?php echo !empty($mang)? implode(", ", $mang) : ""; ?>"></td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng:</td>
                <td><input type="text" readonly value="<?php echo $max; ?>"></td>
            </tr>
            <tr>
                <td>GTNN (MIN) trong mảng:</td>
                <td><input type="text" readonly value="<?php echo $min; ?>"></td>
            </tr>
            <tr>
                <td>Tổng mảng:</td>
                <td><input type="text" readonly value="<?php echo $tong; ?>"></td>
            </tr>
        </table>
    </form>
</body>
</html>
