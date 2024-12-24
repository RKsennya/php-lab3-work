<?php
// Задание 3: Операторы (if и тернарный)
$age = 22;

echo "<div class='output'>";
if ($age > 12 && $age < 20) {
    $message = "you are a teenager!";
} elseif ($age > 40) {
    $message = "you are an adult!";
} else {
    $message = "you are in your prime... get to work!";
}

$name = "Anna";
echo $name ? $name . ', ' . $message : 'Anonymous, ' . $message;
echo "</div>";

// Пример тернарного оператора
$isAdult = ($age >= 18) ? 'Yes, adult' : 'No, not an adult';
echo "<div class='output'>Is the person an adult? $isAdult</div>";
?>
