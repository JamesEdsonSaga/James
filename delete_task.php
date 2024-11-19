<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete_sql = "DELETE FROM tasks WHERE id = $id";
    if ($conn->query($delete_sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error deleting task: " . $conn->error;
    }
} else {
    echo "No task ID provided.";
}
?>
