<?php
session_start();
// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shippee_db";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าจากฟอร์ม
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // เข้ารหัสรหัสผ่าน

    // สร้างคำสั่ง SQL เพื่อเพิ่มข้อมูลลงในฐานข้อมูล
    $sql = "INSERT INTO user (id, name, username, email, password) VALUES ('NULL','$name', '$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Registration successful!";
    } else {
        $_SESSION['message'] = "Error: " . $conn->error;
    }
    // ปิดการเชื่อมต่อ
    $conn->close();

    header("Location: Login.php");
    exit();
}
