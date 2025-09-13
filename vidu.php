<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>In lời chào</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 50px auto;
            width: 300px;
        }
        td {
            border: 1px solid black;
            padding: 8px;
        }
        .title {
            background-color: #336699;
            color: white;
            text-align: center;
            font-weight: bold;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <table>
            <tr>
                <td colspan="2" class="title">In lời chào</td>
            </tr>
            <tr>
                <td>Họ tên bạn</td>
                <td><input type="text" name="hoten" required></td>
            </tr>
            <tr>
                <td colspan="2" class="center">
                    <input type="submit" name="xuat" value="Xuất">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['xuat'])) {
        $hoten = trim($_POST['hoten']);
        if ($hoten != "") {
            echo "<h3 style='text-align:center; color:blue;'>Xin chào, $hoten!</h3>";
        }
    }
    ?>
</body>
</html>
