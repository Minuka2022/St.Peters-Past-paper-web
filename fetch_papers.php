<?php
include 'db/connection.php';

if (isset($_GET['grade_id'])) {
    $gradeId = $_GET['grade_id'];

    $sql = "SELECT subjects.name as subject, papers.year, papers.term, papers.medium, papers.paper_name, papers.id as paper_id 
            FROM papers 
            INNER JOIN subjects ON papers.subject_id = subjects.id 
            WHERE papers.grade_id = $gradeId";

    $result = $conn->query($sql);

    if ($result) {
        $papers = array();
        while ($row = $result->fetch_assoc()) {
            $papers[] = $row;
        }
        
        // Return paper data as JSON
        echo json_encode(array('success' => true, 'papers' => $papers));
    } else {
        // Return error message if query fails
        echo json_encode(array('success' => false, 'message' => $conn->error));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Grade ID not provided.'));
}

$conn->close();
?>
