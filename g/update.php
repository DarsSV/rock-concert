<?php
include 'dbconfig.php';

$sql = "UPDATE attendances SET price = 95.00 WHERE fan_name = 'Eddie Vedder'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully!";
} else {
    echo "Error updating record: " . $conn->error;
}
?>