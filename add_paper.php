<?php
include 'db/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the POST request
    $gradeId = $_POST['grade_id'];
    $year = $_POST['year'];
    $term = $_POST['term'];
    $medium = $_POST['medium'];
    $subjectId = $_POST['subject_id'];
    $paperName = $_FILES['paper_file']['name'];
    $paperFile = $_FILES['paper_file']['tmp_name'];

    // Specify the destination folder for file upload
    $uploadDir = 'papers/';

    // Move the uploaded file to the desired location
    $uploadPath = $uploadDir . $paperName;
    if (move_uploaded_file($paperFile, $uploadPath)) {
        // Insert paper data into the database
        $sql = "INSERT INTO papers (grade_id, year, term, medium, subject_id, paper_name, paper_file) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param('iississ', $gradeId, $year, $term, $medium, $subjectId, $paperName, $uploadPath);
            if ($stmt->execute()) {
                echo json_encode(array('success' => true));
            } else {
                echo json_encode(array('success' => false, 'message' => 'Failed to add paper.'));
            }
        } else {
            echo json_encode(array('success' => false, 'message' => 'Failed to prepare SQL statement.'));
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'Failed to upload file.'));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}

$conn->close();
?>
