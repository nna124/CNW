<?php include "flowers.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin - Danh sách hoa</title>
    <style>
        table { width: 80%; border-collapse: collapse; margin: 20px auto; }
        td, th { padding: 10px; border: 1px solid #333; }
        img { width: 80px; height: 80px; object-fit: cover; }
    </style>
</head>
<body>

<h2 style="text-align:center">🌼 Quản trị danh sách hoa</h2>

<table>
    <tr>
        <th>Ảnh</th>
        <th>Tên hoa</th>
        <th>Mô tả</th>
        <th>Hành động</th>
    </tr>

    <?php foreach($flowers as $f): ?>
    <tr>
        <td><img src="<?= $f['image'] ?>"></td>
        <td><?= $f['name'] ?></td>
        <td><?= $f['description'] ?></td>
        <td>
            <button>Sửa</button>
            <button>Xóa</button>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
