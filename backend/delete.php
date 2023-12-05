<?php

require '../pages/content/core/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $userId = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM users WHERE id = $userId");

    header("Location: ../masteruser");
    exit();     
    
} else {
    echo "Invalid request.";
}
?>