<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve payment details from the form submission
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment-method'];
    $bank_account = isset($_POST['bank-account']) ? $_POST['bank-account'] : '';

    // Retrieve selected products from the session
    $selected_products = isset($_SESSION['selected_products']) ? $_SESSION['selected_products'] : [];
    $total_price = 0;
    foreach ($selected_products as $product) {
        list($product_name, $price) = explode(',', $product);
        $total_price += $price;
    }

    // Save the order details to a database or send to an email (not implemented here)

    // Clear the selected products session
    unset($_SESSION['selected_products']);

    // Store payment details in session to display on the success page
    $_SESSION['payment_details'] = [
        'name' => $name,
        'phone' => $phone,
        'address' => $address,
        'payment_method' => $payment_method,
        'bank_account' => $bank_account,
        'total_price' => $total_price
    ];

    // Redirect to success page
    header('Location: success.php');
    exit();
}
?>
