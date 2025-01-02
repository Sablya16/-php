<?php
$servername = "localhost"; 
$username = "root";        
$password = "1604";
$dbname = "student_management"; 

//// Подключение к MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получаем решение пользователя
$user_solution = $_POST['solution'] ?? '';

// Проверяем, что решение не пустое
if (empty($user_solution)) {
    echo "Пожалуйста, введите SQL-запрос.";
    exit;
}

//// Отладка: выводим запрос пользователя
echo "Введённый запрос: " . htmlspecialchars($user_solution) . "<br>";

//// Проверяем, что запрос — это правильный SQL
if (!preg_match('/^SELECT\s.+\sFROM\s.+/i', $user_solution)) {
    echo "Ошибка: запрос должен начинаться с SELECT и содержать FROM.";
    exit;
}

// Выполняем запрос
$result = $conn->query($user_solution);

// Проверяем успешность выполнения запроса
if ($result) {
    // Пытаемся получить хотя бы одну строку
    if ($result->num_rows > 0) {
        echo "Правильно! Запрос вернул следующие записи:<br><br>";

        // Выводим результаты
        echo "<table border='1'>";
        echo "<tr>";

        //// Заголовки столбцов (получаем имена колонок)
        $fields = $result->fetch_fields();
        foreach ($fields as $field) {
            echo "<th>" . $field->name . "</th>";
        }
        echo "</tr>";

        //// Выводим данные
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $column => $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Неправильно. Запрос не вернул записей.";
    }
} else {
    echo "Ошибка выполнения запроса: " . $conn->error;
}

$conn->close();
?>
