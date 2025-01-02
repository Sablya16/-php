<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Решение задач</title>
</head>
<body>

<header>
    <h1>Учебная платформа: Базы данных</h1>
</header>

<nav>
    <a href="material.php">Материал</a>
    <a href="test.php">Тест</a>
    <a href="tasks.php">Решение задач</a>
</nav>

<section>
    <h2>Задачи по базам данных</h2>
    <p>Решите задачу, написав SQL-запрос.</p>

    <h3>Задача 1</h3>
    <p>Напишите SQL-запрос, который находит всех студентов, у которых задолженности по предметам выше 2.</p>

    <form action="check_solution.php" method="post">
        <textarea name="solution" rows="5" cols="50" placeholder="Введите ваш SQL запрос здесь..."></textarea><br><br>
        <input type="submit" value="Проверить решение" class="nav-button">
    </form>

</section>

<section>
    <h3>Задача 2</h3>
    <p>Напишите SQL-запрос, который находит студентов, которые были отчислены, и покажите причину отчисления.</p>

    <form action="check_solution.php" method="post">
        <textarea name="solution" rows="5" cols="50" placeholder="Введите ваш SQL запрос здесь..."></textarea><br><br>
        <input type="submit" value="Проверить решение" class="nav-button">
    </form>

</section>

<section>
    <h3>Задача 3</h3>
    <p>Напишите SQL-запрос, который находит студентов, у которых средний балл по всем предметам ниже 3.</p>

    <form action="check_solution.php" method="post">
        <textarea name="solution" rows="5" cols="50" placeholder="Введите ваш SQL запрос здесь..."></textarea><br><br>
        <input type="submit" value="Проверить решение" class="nav-button">
    </form>

</section>

<section>
    <h3>Задача 4</h3>
    <p>Напишите SQL-запрос, который находит студентов с максимальной стипендией, которая превышает 2000.</p>

    <form action="check_solution.php" method="post">
        <textarea name="solution" rows="5" cols="50" placeholder="Введите ваш SQL запрос здесь..."></textarea><br><br>
        <input type="submit" value="Проверить решение" class="nav-button">
    </form>

</section>

<section>
    <h3>Задача 5</h3>
    <p>Напишите SQL-запрос, который находит студентов, которые получили все оценки выше 3 (то есть, у них нет оценок ниже 3) по всем предметам, с указанием их стипендии.</p>

    <form action="check_solution.php" method="post">
        <textarea name="solution" rows="5" cols="50" placeholder="Введите ваш SQL запрос здесь..."></textarea><br><br>
        <input type="submit" value="Проверить решение" class="nav-button">
    </form>

</section>

</body>
</html>
