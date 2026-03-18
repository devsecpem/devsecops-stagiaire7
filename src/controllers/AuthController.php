<?php
/**
 * MediTrack - Authentication Controller
 *
 * Handles user login and session management.
 */

class AuthController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            global $conn;
            $query = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                session_start();
                $_SESSION['user'] = $username;
                header('Location: ?page=home');
            } else {
                echo "<p>Identifiants incorrects</p>";
            }
        }
        include __DIR__ . '/../../templates/layout.php';
    }
}
