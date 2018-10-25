<!DOCTYPE html>
<html>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = [
        "1" => ["ten" => "Lê Thị Mỹ Hoàn", "ngaysinh" => "2000-09-08", "diachi" => "Hải Phòng", "anh" => "1.jpg"],
        "2" => ["ten" => "Lê Thị Kiều Trinh", "ngaysinh" => "2000-04-04", "diachi" => "Hà Nội", "anh" => "2.jpg"],
        "3" => ["ten" => "Phạm Thị Lanh", "ngaysinh" => "2000-09-16", "diachi" => "Hải Phòng", "anh" => "3.jpg"],
    ];

    foreach ($customerlist as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['ten'] . "</td>";
        echo "<td>" . $values['ngaysinh'] . "</td>";
        echo "<td>" . $values['diachi'] . "</td>";
        echo "<td><image src ='" . $values['anh'] . "' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }

    ?>
</table>
</body>
</html>