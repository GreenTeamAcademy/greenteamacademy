<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Step 1: Connect to the MySQL database
$servername = "mysql.cdreams.org"; // Change to your server name
$username = "cdreamsorg"; // Change to your database username
$password = "yMNK??U?"; // Change to your database password
$dbname = "cdreams_org"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Step 2: Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form values
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    // Step 3: Hash the password before storing it (for security)
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Step 4: Prepare the SQL statement to insert the data
    $created_at = date('Y-m-d H:i:s'); // Get the current timestamp
    $sql = "INSERT INTO registration_tb (email, password, datetime) VALUES (?, ?, ?)";

    // Prepare the statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $user, $hashed_password, $created_at);

    // Step 5: Execute the statement
    if ($stmt->execute()) {
        echo "New user registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Step 6: Close the connection
    $stmt->close();
    $conn->close();
   
}

  




?>
