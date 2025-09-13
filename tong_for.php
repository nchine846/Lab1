<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tính toán với vòng lặp for</title>
</head>
<body>
<?php
$tong = $tich = $tongchan = $tongle = "";

if (isset($_POST["batdau"]) && isset($_POST["ketthuc"])) {
    $batdau = (int)$_POST["batdau"];
    $ketthuc = (int)$_POST["ketthuc"];

    if ($batdau <= $ketthuc) {
        $tong = 0;
        $tich = 1;
        $tongchan = 0;
        $tongle = 0;

        for ($i = $batdau; $i <= $ketthuc; $i++) {
            $tong += $i;
            $tich *= $i;
            if ($i % 2 == 0)
                $tongchan += $i;
            else
                $tongle += $i;
        }
    } else {
        $tong = "Số bắt đầu phải nhỏ hơn hoặc bằng số kết thúc!";
    }
}
?>

<form action="tong_for.php" method="post">
    <table border="1" align="center" cellpadding="5">
        <tr>
            <td>Số bắt đầu</td>
            <td><input type="text" name="batdau" value="<?php if(isset($batdau)) echo $batdau; ?>"></td>
            <td>Số kết thúc</td>
            <td><input type="text" name="ketthuc" value="<?php if(isset($ketthuc)) echo $ketthuc; ?>"></td>
        </tr>
        <tr>
            <td colspan="4" align="center"><strong>Kết quả</strong></td>
        </tr>
        <tr>
            <td>Tổng các số</td>
            <td colspan="3"><input type="text" readonly value="<?php echo $tong; ?>"></td>
        </tr>
        <tr>
            <td>Tích các số</td>
            <td colspan="3"><input type="text" readonly value="<?php echo $tich; ?>"></td>
        </tr>
        <tr>
            <td>Tổng các số chẵn</td>
            <td colspan="3"><input type="text" readonly value="<?php echo $tongchan; ?>"></td>
        </tr>
        <tr>
            <td>Tổng các số lẻ</td>
            <td colspan="3"><input type="text" readonly value="<?php echo $tongle; ?>"></td>
        </tr>
        <tr>
            <td colspan="4" align="center"><input type="submit" value="Tính toán"></td>
        </tr>
    </table>
</form>
</body>
</html>
