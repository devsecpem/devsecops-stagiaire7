<?php
/**
 * MediTrack - Patient Controller
 *
 * Handles patient search and display operations.
 */

require_once __DIR__ . '/../models/Patient.php';

class PatientController {
    public function search() {
        $searchTerm = $_GET['q'] ?? '';
        $patient = new Patient();
        $results = $patient->search($searchTerm);
        include __DIR__ . '/../../templates/search.php';
    }
}
