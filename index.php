<?php
// Задание 1: Пример с использованием echo и print

$lastName = 'Ivanov';  // Фамилия клиента
$firstName = 'Nikolai'; // Имя клиента
$age = 30; // Возраст клиента

// Добавим стили для улучшения внешнего вида
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }
    h1, h2 {
        text-align: center;
        color: #333;
    }
    .content {
        margin: 20px;
    }
    .task {
        background-color: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    .highlight {
        color: #0056b3;
        font-weight: bold;
    }
</style>";

// Выводим заголовок и задание
echo "<h1>Лабораторная работа по PHP</h1>";

// Задание 1
echo "<div class='task'>";
echo "<h2>Задание 1: Пример с использованием echo и print</h2>";
echo 'Client\'s last name is '.$lastName.', and their first name is '.$firstName.'.'; // Используем echo
print '<br>Client\'s age is '.$age.'.'; // Используем print
echo "</div>";

?>

<br><br>

<?php
// Задание 2: Пример использования условий с текущим днем недели

$currentDay = date("w");  // Получаем текущий день недели (числовое обозначение: 0 - 6)

echo "<div class='task'>";
echo "<h2>Задание 2: Пример с условием (if)... else</h2>";

// Заменим if...else на тернарный оператор
echo ($currentDay === 5) ? "<br>Have a great weekend!" : "<br>Have a productive workday!";

// Вернем if...else и добавим ветку elseif для воскресенья
if ($currentDay === 5) {  // Пятница
    echo "<br>Have a great weekend!";
} elseif ($currentDay === 0) {  // Воскресенье
    echo "<br>Tomorrow starts a new work week!";
} else {
    echo "<br>Have a productive workday!";
}

// Добавим проверку для воскресенья
if ($currentDay === 0) {
    echo "<br>Tomorrow starts a new work week!";
}
echo "</div>";

?>

<br><br>

<?php
// Задание 4: Пример с использованием switch для вывода дня недели

$day = date("w");  // Получаем день недели как число

echo "<div class='task'>";
echo "<h2>Задание 4: Пример с использованием switch</h2>";
switch ($day) {
    case 0:
        echo "Today is Sunday, ".date("d.m.Y");
        break;
    case 1:
        echo "Today is Monday, ".date("d.m.Y");
        break;
    case 2:
        echo "Today is Tuesday, ".date("d.m.Y");
        break;
    case 3:
        echo "Today is Wednesday, ".date("d.m.Y");
        break;
    case 4:
        echo "Today is Thursday, ".date("d.m.Y");
        break;
    case 5:
        echo "Today is Friday, ".date("d.m.Y");
        break;
    case 6:
        echo "Today is Saturday, ".date("d.m.Y");
        break;
    default:
        echo "Unknown day";
}
echo "</div>";

?>

<br><br>

<?php
// Задание 5: Используем текущий день недели для создания расписания

$currentDay = date("w");  // Получаем текущий день недели

echo "<div class='task'>";
echo "<h2>Задание 5: Пример с расписанием работы сотрудников</h2>";

// Создаем таблицу с расписанием для двух сотрудников на основе дня недели
echo "<table>
      <tr>
      <th>№</th>
      <th>Фамилия Имя</th>
      <th>График работы</th>
      </tr>";

// John Styles
if ($currentDay == 1 || $currentDay == 3 || $currentDay == 5) {
    $john_schedule = "8:00 - 12:00";
} else {
    $john_schedule = "Нерабочий день";
}

// Jane Doe
if ($currentDay == 2 || $currentDay == 4 || $currentDay == 6) {
    $jane_schedule = "12:00 - 16:00";
} else {
    $jane_schedule = "Нерабочий день";
}

// Выводим расписание в таблице
echo "<tr>
        <td>1</td>
        <td>John Styles</td>
        <td>$john_schedule</td>
      </tr>";
echo "<tr>
        <td>2</td>
        <td>Jane Doe</td>
        <td>$jane_schedule</td>
      </tr>";

echo "</table>";
echo "</div>";
?>

<br><br>
<!-- Ссылка на страницу operator.php для Задания 3 -->
<a href="operator.php">Перейти к Заданию 3 (Условные операторы)</a>
