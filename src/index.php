<?php
/**
 * MediTrack - Patient Records Portal

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'search':
        require_once __DIR__ . '/controllers/PatientController.php';
        $controller = new PatientController();
        $controller->search();
        break;
    case 'login':
        require_once __DIR__ . '/controllers/AuthController.php';
        $controller = new AuthController();
        $controller->login();
        break;
    default:
        echo "<h1>MediTrack - Portail Patient</h1>";
        echo "<p>Bienvenue sur le portail de suivi patient.</p>";
        break;
}
