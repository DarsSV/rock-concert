<?php
include 'dbconfig.php';

$sql = "SELECT * FROM attendances";
$result = $conn->query($sql);

echo "<pre>";
while ($row = $result->fetch_assoc()) {
    print_r($row);
}
echo "</pre>";
?>6