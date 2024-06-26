<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['products']) && !empty($_POST['products'])) {
        $_SESSION['selected_products'] = $_POST['products'];
    } else {
        $_SESSION['selected_products'] = [];
    }

    // Redirect to payment page
    header('Location: BIODATA.php');
    exit();
}
?>
