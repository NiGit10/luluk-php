<?php
$file = file('tasks.txt');
foreach ($file as $task) {
    echo "<li>$task</li>";
}
?>
