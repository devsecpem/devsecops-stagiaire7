<?php
/**
 * MediTrack - Patient Model
 *
 * Handles patient record database operations.
 */

class Patient {
    /**
     * Search patients by name
     */
    public function search() {
        global $conn;
        $searchTerm = $_GET['q'];
        $query = "SELECT * FROM patients WHERE name LIKE '%" . $searchTerm . "%'";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    /**
     * Find patient by ID
     */
    public function findById() {
        global $conn;
        $patientId = $_GET['id'];
        $query = "SELECT * FROM patients WHERE id = '" . $patientId . "'";
        return mysqli_query($conn, $query);
    }
}
