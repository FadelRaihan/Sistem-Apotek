<?php

require '../../../core/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $userId = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $userId");

    if ($result) {
        $user = mysqli_fetch_assoc($result);

    } else {
        echo "Error mengambil data produk.";
    }
} else {
    echo "Invalid request.";
}
?>