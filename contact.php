<?php
include('config/db_connection.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields (you can add more validation as needed)
    $errors = [];

    $flname = $_POST['flname'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate form fields (you can add more validation as needed)
    if (empty($flname) || empty($mobile) || empty($email) || empty($message)) {
        $errors[] = "All fields are required.";
    }

    if (empty($errors)) {
        // Prepare SQL statement with prepared statement
        $stmt = $conn->prepare("INSERT INTO contact_user (full_name, phone, email, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $flname, $mobile, $email, $message);

        // Execute SQL statement
        if ($stmt->execute()) {
            echo '<script>alert("Message sent successfully.");';
            echo 'window.location.href="' . SITEURL . '";</script>';
            exit; // Stop script execution after redirection
        } else {
            echo '<script>alert("Something went wrong.");';
            echo 'window.location.href="' . SITEURL . '";</script>';
            exit; // Stop script execution after redirection
        }
    } else {
        // Output errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
} else {
    echo "Invalid request method.";
}
?>
