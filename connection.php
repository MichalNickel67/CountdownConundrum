<?php

$host = "localhost";
$username = "root";
$pass = "";
$db = "countdown_conundrum";

// Create connection
$con = mysqli_connect($host, $username, $pass, $db);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Take words from database
$length = $_GET['length'];

if ($length === "Any") {
  $sql = "SELECT word FROM words";
} else {
  $sql = "SELECT word FROM words WHERE length = ?";
}

if ($length !== "Any") {
  $stmt = $con->prepare($sql);
  $stmt->bind_param("i", $length);
  $stmt->execute();
  $result = $stmt->get_result();
} else {
  $result = $con->query($sql);
}

$words = [];
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $words[] = $row['word'];
  }
}

echo json_encode($words);

$con->close();

?>