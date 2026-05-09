<?php
$conn = new mysqli('127.0.0.1', 'root', '', 'pengaduan_masyarakat');
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$pass1 = password_hash('tama123', PASSWORD_BCRYPT);
$pass2 = password_hash('123456', PASSWORD_BCRYPT);
$pass3 = password_hash('user1234', PASSWORD_BCRYPT);

$conn->query("UPDATE users SET password = '$pass1' WHERE username = 'Administrator'");
$conn->query("UPDATE users SET password = '$pass2' WHERE username = 'Officer'");
$conn->query("UPDATE society SET password = '$pass3' WHERE username = 'user'");

echo "Passwords updated successfully via raw PHP.\n";
$conn->close();
