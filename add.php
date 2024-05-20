<?php
if(isset($_POST['task'])) {
    $task = $_POST['task'];
    if(!empty($task)) {
        $file = fopen('tasks.txt', 'a');
        fwrite($file, $task . "\n");
        fclose($file);
    }
}
header('Location: index.php');
?>

