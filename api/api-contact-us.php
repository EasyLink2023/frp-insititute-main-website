<?php 
include('../include/config.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? mysqli_real_escape_string($db_connect, $_POST['name']) : null;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db_connect, $_POST['email']) : null;
    $phone = isset($_POST['phone']) ? mysqli_real_escape_string($db_connect, $_POST['phone']) : null;
    $address = isset($_POST['address']) ? mysqli_real_escape_string($db_connect, $_POST['address']) : null;
    $company = isset($_POST['company']) ? mysqli_real_escape_string($db_connect, $_POST['company']) : null;
    $message = isset($_POST['message']) ? mysqli_real_escape_string($db_connect, $_POST['message']) : null;
    $sql = "INSERT INTO contact_requests (name, email, phone, address, company, message) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($db_connect, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssss', $name, $email, $phone, $address, $company, $message);
    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['status' => 'success', 'message' => 'Contact request submitted successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . mysqli_error($db_connect)]);
    }
    mysqli_stmt_close($stmt);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}

mysqli_close($db_connect);
?>
