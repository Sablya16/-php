<?php
session_start();

//// Получаем все вопросы и ответы
$questions = $_SESSION['questions'];
$answers = isset($_SESSION['answers']) ? $_SESSION['answers'] : [];

//// Подсчёт результатов
$score = 0;
$total = count($questions);
foreach ($questions as $index => $question) {
    $question_number = $index + 1;
    if (isset($answers[$question_number]) && $answers[$question_number] == $question['answer']) {
        $score++;
    }
}

//// Рассчёт оценки
$max_grade = 10;
$grade = ($score / $total) * $max_grade;
$grade = round($grade, 1);

session_destroy();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Результаты теста</title>
</head>
<body>
    <header>
        <h1>Результаты теста</h1>
        <nav>
            <a href="material.php">Материал</a>
            <a href="test.php">Тест</a>
            <a href="tasks.php">Решение задач</a>
        </nav>
    </header>

    <section>
        <h2>Ваш результат: <?php echo $score; ?> из <?php echo $total; ?></h2>
        <h2>Ваша оценка : <?php echo $grade; ?> из <?php echo $max_grade; ?><h2>
        <div class="navigation">
            <a href="test.php?reset=true"
