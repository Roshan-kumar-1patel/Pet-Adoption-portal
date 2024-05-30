<?php 

    include('./config/db_connection.php'); 
?>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields (you can add more validation as needed)
    $errors = [];
    $email = $_POST['email_login'] ?? '';
    $password = $_POST['pwd_login'] ?? '';

        // Prepare SQL statement to retrieve user with matching email and password
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User authenticated successfully
            $user_data = $result->fetch_assoc();
            $userID= $user_data['id'];
            $_SESSION['userID'] = $userID; // Store user ID in session
            $user_name = $user_data['first_name'];
            $_SESSION['userName'] = $user_name; // Store user name in session
                
            echo '<script>alert("Login Successfull...");';
            echo 'window.location.href="' . 'http://localhost:82/drool_demo/dashbord/' . '";</script>';

            //header("Location: localhost:82/drool/dashbord/"); // Redirect to cards.html
            exit; // Terminate script execution after redirection
        } else {
            // User authentication failed
            //popup alert
            echo "<script>alert('Invalid email or password');</script>";
            //header location
            echo "<script>location.href='register.html';</script>";
            
        }

        // Close database connection
        $conn->close();
    } else {
        // Output errors
        foreach ($errors as $error) {
            //popup alert
            echo "<script>alert('$error');</script>";
            //header location
            echo "<script>location.href='register.html';</script>";
            //echo $error . "<br>";
        }
    }

?>
