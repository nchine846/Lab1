<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đọc số</title>
</head>
<body>
<?php
$chu = "";
if (isset($_POST["so"])) {
    $so = $_POST["so"];

    // kiểm tra số nhập vào có hợp lệ không
    if (is_numeric($so) && $so >= 0 && $so <= 9) {
        switch ($so) {
            case 0: $chu = "Không"; break;
            case 1: $chu = "Một"; break;
            case 2: $chu = "Hai"; break;
            case 3: $chu = "Ba"; break;
            case 4: $chu = "Bốn"; break;
            case 5: $chu = "Năm"; break;
            case 6: $chu = "Sáu"; break;
            case 7: $chu = "Bảy"; break;
            case 8: $chu = "Tám"; break;
            case 9: $chu = "Chín"; break;
        }
    } else {
        $chu = "Vui lòng nhập số từ 0 đến 9!";
    }
}
?>

<form action="xuat_so_thanh_chu.php" method="post">
    <table border="1" align="center" cellpadding="5">
        <tr>
            <td colspan="3" align="center"><strong>Đọc số</strong></td>
        </tr>
        <tr>
            <td>Nhập số (0-9)</td>
            <td align="center"></td>
            <td>Bằng chữ</td>
        </tr>
        <tr>
            <td><input type="text" name="so" value="<?php if(isset($so)) echo $so; ?>"></td>
            <td align="center"><input type="submit" value="Submit"></td>
            <td><input type="text" readonly value="<?php echo $chu; ?>"></td>
        </tr>
    </table>
</form>
</body>
</html>
