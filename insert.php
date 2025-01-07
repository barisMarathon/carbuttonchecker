<?php
// Database credentials
$host = 'sql7.freesqldatabase.com';  // Change to your host if needed
$dbname = 'sql7756369';  // Your database name
$username = 'sql7756369';  // Your username
$password = 'DVTT8SsgWT';  // Your password

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Prepare the SQL query to insert the current time
        $stmt = $pdo->prepare("INSERT INTO car (datetime_column) VALUES (NOW())");

        // Execute the query
        if ($stmt->execute()) {
            echo "<p>Current time added successfully!</p>";
        } else {
            echo "<p>Failed to add the current time.</p>";
        }
    }
} catch (PDOException $e) {
    echo "<p>Error: " . $e->getMessage() . "</p>";
}
?>