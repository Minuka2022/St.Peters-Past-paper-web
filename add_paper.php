<?php
include 'db/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gradeId = $_POST['grade_id'];
    $year = $_POST['year'];
    $term = $_POST['term'];
    $medium = $_POST['medium'];
    $subject = $_POST['subject'];
    $paperName = $_POST['paper_name'];
    $paperFile = $_FILES['paper_file'];

    // Validate the uploaded file
    $allowedExtensions = array('pdf', 'doc', 'docx');
    $fileExtension = pathinfo($paperFile['name'], PATHINFO_EXTENSION);
    if (!in_array($fileExtension, $allowedExtensions)) {
        echo json_encode(array('success' => false, 'message' => 'Invalid file type. Only PDF and Word documents are allowed.'));
        exit;
    }

    // Move the uploaded file to the desired location
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($paperFile['name']);
    if (move_uploaded_file($paperFile['tmp_name'], $uploadFile)) {
        // Insert paper data into the database
        $stmt = $conn->prepare("INSERT INTO papers (grade_id, year, term, medium, subject_id, paper_name, paper_file) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('iississ', $gradeId, $year, $term, $medium, $subject, $paperName, $uploadFile);
        if ($stmt->execute()) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => false, 'message' => 'Failed to add paper.'));
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'Failed to upload file.'));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}

$conn->close();
?>
