<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giải phương trình bậc 1</title>
</head>

<body>
<?php 
// Xử lý khi bấm nút "Xuất"
if (isset($_POST["a"]) && isset($_POST["b"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];

    if (is_numeric($a) && is_numeric($b)) {
        if ($a == 0) {
            if ($b == 0) {
                $nghiem = "Phương trình có vô số nghiệm";
            } else {
                $nghiem = "Phương trình vô nghiệm";
            }
        } else {
            $x = -($b / $a);
            $x = round($x, 2); // làm tròn 2 chữ số thập phân
            $nghiem = "x = $x";
        }
    } else {
        $nghiem = "Vui lòng nhập số hợp lệ!";
    }
}
?>

<form action="Bai2.php" method="post">
<table width="744" border="1" align="center">
<tr>
    <td colspan="3" bgcolor="#336699" align="center">
        <strong style="color:white;">Giải phương trình bậc 1</strong>
    </td>
</tr>
<tr>
    <td width="120">Phương trình</td>
    <td width="250">
        <input name="a" type="text" value="<?php if(isset($a)) echo $a; ?>" /> X +
    </td>
    <td width="352">
        <input name="b" type="text" value="<?php if(isset($b)) echo $b; ?>" /> = 0
    </td>
</tr>
<tr>
    <td colspan="3">
        Nghiệm 
        <input name="kq" type="text" size="50" readonly
               value="<?php if(isset($nghiem)) echo $nghiem; ?>" />
    </td>
</tr>
<tr>
    <td colspan="3" align="center" valign="middle">
        <input type="submit" name="giai" id="giai" value="Giải phương trình" />
    </td>
</tr>
</table>
</form>
</body>
</html>
