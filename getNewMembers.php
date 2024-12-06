<?php
// Enable error reporting for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Define the admin password (use environment variables for better security)
$adminPassword = 'securepassword123';

// Check if the form is submitted and verify the password
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputPassword = $_POST['password'] ?? '';

    if ($inputPassword === $adminPassword) {
        // Allow access by including the page content directly
        $isAuthorized = true;
    } else {
        echo "<script>alert('Incorrect password. Access denied.');</script>";
        $isAuthorized = false;
    }
} else {
    $isAuthorized = false;
}

// Display the login form if not authorized
if (!$isAuthorized) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Access</title>
    </head>
    <body>
        <h2>Admin Login</h2>
        <form method="POST" action="">
            <label for="password">Enter Admin Password:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Submit</button>
        </form>
    </body>
    </html>
<?php
    exit(); // Stop execution if the user is not an admin
}

// Step 1: Connect to the MySQL database
$servername = "mysql.cdreams.org";
$username = "cdreamsorg";
$password = "yMNK??U?";
$dbname = "cdreams_org";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle filtering based on date and initials
$filterQuery = "";
if (isset($_GET['filter_date']) && !empty($_GET['filter_date'])) {
    $filterDate = $conn->real_escape_string($_GET['filter_date']);
    $filterQuery .= " AND DATE(created_at) = '$filterDate'";
}
if (isset($_GET['filter_initials']) && !empty($_GET['filter_initials'])) {
    $filterInitials = $conn->real_escape_string($_GET['filter_initials']);
    $filterQuery .= " AND email LIKE '$filterInitials%'";
}

// Step 2: Fetch filtered users from the newMembers_tb table
$sql = "SELECT id, name, email, created_at FROM newMembers_tb WHERE 1=1 $filterQuery ORDER BY created_at DESC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Members</title>
    <script>
        function copyEmails() {
            const checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
            let emails = [];
            checkboxes.forEach(checkbox => {
                emails.push(checkbox.dataset.email);
            });
            if (emails.length > 0) {
                navigator.clipboard.writeText(emails.join(', ')).then(() => {
                    alert('Emails copied to clipboard');
                }).catch(err => {
                    alert('Failed to copy emails: ' + err);
                });
            } else {
                alert('No emails selected to copy.');
            }
        }

        function selectAll(source) {
            const checkboxes = document.querySelectorAll('input[type=checkbox]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = source.checked;
            });
        }
    </script>
</head>
<body>
    <h2>Filter New Members</h2>
    <form method="GET" action="">
        <label for="filter_date">Filter by Date:</label>
        <input type="date" name="filter_date" id="filter_date">
        <label for="filter_initials">Filter by Email Initials:</label>
        <input type="text" name="filter_initials" id="filter_initials" placeholder="Enter initials">
        <button type="submit">Filter</button>
    </form>

<?php
if ($result->num_rows > 0) {
    echo "<h2>New Members:</h2>";
    echo "<button onclick='copyEmails()'>Copy Selected Emails to Clipboard</button>";
    echo "<table border='1'>
            <tr>
                <th><input type='checkbox' onclick='selectAll(this)'> Select All</th>
                <th>ID</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>";
    
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><input type='checkbox' data-email='" . htmlspecialchars($row["email"]) . "'></td>
                <td>" . $row["id"] . "</td>
                <td>" . htmlspecialchars($row["name"]) . "</td>
                <td>" . htmlspecialchars($row["email"]) . "</td>
                <td>" . $row["created_at"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No new members found.";
}

// Close the connection
$conn->close();
?>
</body>
</html>
