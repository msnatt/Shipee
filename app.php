<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'about';

switch ($page) {
    case 'home':
        include 'pages/home.php';
        break;
    case 'about':
        include 'pages/about.php';
        break;
        // Add more cases as needed
    default:
        include '404.php'; // Optional: A 404 page for unknown routes
}
