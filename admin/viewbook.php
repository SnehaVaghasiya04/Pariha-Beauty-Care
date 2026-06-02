<?php
include 'conn.php';

// Fetch all appointments
$sql = "SELECT * FROM book ORDER BY date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Appointments</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            padding: 20px;
        }

       /* h2 {
            text-align: center;
            color: #00796b;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }*/

        table {
            width: 950px;
            border-collapse: collapse;
            margin-left: 250px;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            animation: slideIn 0.5s ease-in-out;
        }

        th, td {
            padding: 12px;
            border: 2px solid #562749;
            text-align: left;
            transition: background-color 0.3s;
        }
        td{
            color: white;
        }

        th {
            background-color: #562749;
            color: white;
        }

         tr:nth-child(odd) {
            background-color: #e0bbd2;
        }

        tr:nth-child(even) {
            background-color: #e0bbd2;
        }

     /*   tr:hover {
            background-color: #572649;
            transform: scale(1.02);
        }*/

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 600px) {
            table {
                font-size: 14px;
            }

            th, td {
                padding: 8px;
            }
        }

        .d4{
            color: #572649;
            margin-left: 600px;
            margin-top: 60px;
        }
    </style>
</head>
<body>
<?php include_once('include/header.php'); ?>
<div class="d4">
<h1> Appointments List</h1>
</div>

<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Email</th>
            <th>Service</th>
            <th>Beautician</th>
            <th>Date</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['service']); ?></td>
                    <td><?php echo htmlspecialchars($row['beautician']); ?></td>
                    <td><?php echo htmlspecialchars($row['date']); ?></td>
                    <td><?php echo htmlspecialchars($row['message']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No appointments found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
