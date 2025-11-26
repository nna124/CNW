<?php
// Mở file CSV
$file = fopen("65HTTT_Danh_sach_diem_danh.csv", "r");

// Mảng chứa dữ liệu
$data = [];

// Đọc từng dòng CSV
while (($row = fgetcsv($file)) !== false) {
    $data[] = $row;
}

fclose($file);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách tài khoản</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #555;
        }
        th {
            background: #f0f0f0;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Danh sách tài khoản</h2>

<table>
    <?php foreach ($data as $index => $line): ?>
        <tr>
            <?php foreach ($line as $cell): ?>
                <?php if ($index == 0): ?>
                    <th><?= htmlspecialchars($cell) ?></th>
                <?php else: ?>
                    <td><?= htmlspecialchars($cell) ?></td>
                <?php endif; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
