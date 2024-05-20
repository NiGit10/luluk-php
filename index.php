<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo App</title>
</head>
<body>
    <h1>ToDo List</h1>
    <form action="add.php" method="POST">
        <input type="text" name="task" placeholder="Tambahkan tugas baru">
        <button type="submit">Tambah</button>
    </form>
    
    <h2>Tugas:</h2>
    <ul>
        <?php include 'list.php'; ?>
    </ul>
</body>
</html>
