<?php
include 'dbconfig.php';

$sql = "INSERT INTO attendances (fan_name, band_name, concert_date, ticket_type, price) 
        VALUES ('Dave Grohl', 'Foo Fighters', '2026-12-01', 'VIP', 300.00)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>