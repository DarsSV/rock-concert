<?php
include 'dbconfig.php';

$id_to_delete = 1; 
$sql = "DELETE FROM attendances WHERE id = $id_to_delete";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully!";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>