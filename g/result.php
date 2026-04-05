<?php
include 'dbconfig.php';
$sql = "SELECT * FROM attendances";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rock Concert Attendance</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #333; color: white; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Rock Concert Attendance List</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Fan Name</th>
            <th>Band</th>
            <th>Ticket</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fan_name']; ?></td>
                    <td><?php echo $row['band_name']; ?></td>
                    <td><?php echo $row['ticket_type']; ?></td>
                    <td>$<?php echo number_format($row['price'], 2); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5">No attendees found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>