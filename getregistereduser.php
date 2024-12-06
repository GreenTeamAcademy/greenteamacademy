<?php
// Enable error reporting for debugging purposes
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

// Step 2: Fetch all users from the database
$sql = "SELECT id, email, datetime FROM registration_tb ORDER BY datetime DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Registered Users:</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Registration Date</th>
            </tr>";
    
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . htmlspecialchars($row["email"]) . "</td>
                <td>" . $row["datetime"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No users registered yet.";
}

// Close the connection
$conn->close();
?>
