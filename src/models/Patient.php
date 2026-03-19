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
	
	$stmt = $conn->prepare("SELECT * FROM patients WHERE name LIKE ?");
	$param = "%" . $searchTerm . "%";
	$stmt->bind_param("s", $param);
	$stmt->execute();
	$result = $stmt->get_result();	
	return $result;
    }

    /**
     * Find patient by ID
     */
    public function findById() {
        global $conn;
        $patientId = $_GET['id'];
    	
	$stmt = $conn->prepare("SELECT * FROM patients WHERE id = ?");
	$stmt->bind_param("s", $patientId);
	$stmt->execute();
	return $stmt->get_result();
    }
}
