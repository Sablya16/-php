<?php
session_start();

//// Получаем текущий вопрос из URL
$current_question = isset($_GET['q']) ? (int)$_GET['q'] : 1;

//// Сохраняем ответ пользователя
if (isset($_POST['answer'])) {
    $_SESSION['answers'][$current_question] = $_POST['answer'];
}

//// Переходим к следующему вопросу
header('Location: test.php?q=' . ($current_question + 1));
exit();
?>
