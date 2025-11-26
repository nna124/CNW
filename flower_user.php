<?php include "flowers.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách hoa - Khách</title>
    <style>
        .flower {
            width: 300px;
            margin: 20px;
            float: left;
        }
        img { width: 100%; height: 200px; object-fit: cover; }
    </style>
</head>
<body>

<h2>🌸 Danh sách các loài hoa</h2>

<?php foreach($flowers as $f): ?>
<div class="flower">
    <img src="<?= $f['image'] ?>">
    <h3><?= $f['name'] ?></h3>
    <p><?= $f['description'] ?></p>
</div>
<?php endforeach; ?>

</body>
</html>
