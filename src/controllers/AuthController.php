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

	    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
	    $stmt->bind_param("ss", $username, $password);
	    $stmt->execute();
	    $result = $stmt->get_result();

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
