<?php
session_start(); // Start the session for setting session variables

// Display PHP errors for debugging (Remove these lines in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Step 1: Connect to the MySQL database
$servername = "mysql.cdreams.org";
$username = "cdreamsorg";
$password = "yMNK??U?";
$dbname = "cdreams_org";
// Create connection
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    $_SESSION['message'] = 'Connection failed: ' . $conn->connect_error;
    header("Location: home_page.php");
    exit();
}

// Step 2: Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form values
    $firstname = $_POST['firstname'] ?? '';
    $email = $_POST['email'] ?? '';
    $created_at = date('Y-m-d H:i:s');

    // Check if required fields are not empty
    if (empty($firstname) || empty($email)) {
        $_SESSION['message'] = 'Name and Email are required.';
        header("Location: home_page.php");
        exit();
    }

    // Prepare the SQL statement to insert the data
    $sql = "INSERT INTO newMembers_tb (name, email, created_at) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        $_SESSION['message'] = 'Error preparing statement: ' . $conn->error;
        header("Location: home_page.php");
        exit();
    }

    // Bind parameters to the SQL statement
    $stmt->bind_param("sss", $firstname, $email, $created_at);

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Thank you for joining! We’re excited to support you on your journey toward a greener future.';
    } else {
        $_SESSION['message'] = 'Error: ' . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect to the home page
    header("Location: index.php");
    exit();
} else {
    $_SESSION['message'] = 'Invalid request method.';
    header("Location: home_page.php");
    exit();
}
?>
