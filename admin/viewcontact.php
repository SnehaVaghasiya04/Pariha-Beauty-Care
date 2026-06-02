<?php
include 'conn.php';  // Include the connection file

// Retrieve data from the database
$sql = "SELECT * FROM contact ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Contact Messages</title>
    <link rel="stylesheet" href="admin_styles.css"> <!-- Link to your existing CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            padding: 20px;
        }
      /*  h2 {
            text-align: center;
            color: #00796b;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }*/
        table {
            width: 950px;
            border-collapse: collapse;
            margin-top: 40px;
            margin-left: 270px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            animation: slideIn 0.5s ease-in-out;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 2px solid #572649;
        }
        td{
            color: white;
        }
        th {
            background-color: #572649;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #e0bbd2;
        }
         tr:nth-child(odd) {
            background-color: #e0bbd2;
        }
      /*  tr:hover {
            background-color: #b2dfdb;
            transform: scale(1.01);
            transition: background-color 0.3s, transform 0.3s;*/
        }
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

        .d5{
            color: #572649;
            margin-top: 60px;
            margin-left: 570px;
        }
    </style>
</head>
<body>
    <?php include_once('include/header.php'); ?>

    <section class="admin-section">
        <div class="d5">
        <h1>Submitted Contact Messages</h1>
</div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date Submitted</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['submitted_at']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

</body>
</html>

<?php
// Close the connection
$conn->close();
?>
