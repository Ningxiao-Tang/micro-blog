<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
  // Add code to handle fetching blog details here
}

$conn->close();
?>
