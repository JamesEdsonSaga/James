<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List Application</h1>
        
        <!-- Add New Task Form -->
        <form action="index.php" method="POST" class="task-form">
            <input type="text" name="task" placeholder="Enter a new task" required>
            <button type="submit" class="btn">Add Task</button>
        </form>

    </div>
</body>
</html>
