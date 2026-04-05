<?php
include 'dbconfig.php';

$sql = "SELECT * FROM attendances";
$result = $conn->query($sql);

$rows = $result->fetch_all(MYSQLI_ASSOC);

echo "<pre>";
print_r($rows);
echo "</pre>";
?>