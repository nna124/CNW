<?php
$lines = file("Quiz.txt", FILE_IGNORE_NEW_LINES);

// Mảng chứa tất cả câu hỏi
$questions = [];
$index = 0;

// Duyệt từng dòng
foreach ($lines as $line) {

    // Nếu dòng trống => kết thúc 1 câu hỏi
    if (trim($line) == "") {
        $index++;
        continue;
    }

    // Nếu chưa có phần tử => tạo phần tử rỗng
    if (!isset($questions[$index])) {
        $questions[$index] = [
            "question" => "",
            "answers" => [],
            "correct" => ""
        ];
    }

    // Nếu dòng bắt đầu bằng 'ANSWER'
    if (strpos($line, "ANSWER") === 0) {
        $questions[$index]["correct"] = trim(str_replace("ANSWER:", "", $line));
    }
    // Nếu dòng bắt đầu bằng A/B/C/D
    else if (preg_match("/^[A-D]\./", $line)) {
        $questions[$index]["answers"][] = trim(substr($line, 3)); // Bỏ "A. "
    }
    else {
        // Câu hỏi (vì không phải A-D hoặc ANSWER)
        $questions[$index]["question"] = $line;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bài thi trắc nghiệm</title>
</head>
<body>

<h2>Bài thi</h2>

<form>

<?php foreach ($questions as $i => $q): ?>
    <p><b><?= $q["question"] ?></b></p>

    <?php foreach ($q["answers"] as $key => $ans): 
        $letter = ["A", "B", "C", "D"][$key];
    ?>
        <label>
            <input type="radio" name="q<?= $i ?>" value="<?= $letter ?>">
            <?= $letter ?>. <?= $ans ?>
        </label><br>
    <?php endforeach; ?>

    <br>
<?php endforeach; ?>

</form>

</body>
</html>
