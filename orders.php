<?php
session_start();

// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'bluestar';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_id'])) {
        // Handle deletion
        $delete_id = $_POST['delete_id'];
        $delete_query = "DELETE FROM orders WHERE id = ?";
        $stmt = $conn->prepare($delete_query);
        $stmt->bind_param("i", $delete_id);
        $stmt->execute();
        $stmt->close();
        
        // Return success response for AJAX
        echo json_encode(['success' => true]);
        exit();
    } else {
        // Handle new order submission
        $full_name = $_POST['full_name'];
        $email = $_POST['Email'];
        $city = $_POST['city'];
        $services = $_POST['services'];
        $phone = $_POST['phone'];
        $message = $_POST['Message'];
        $date = date('Y-m-d H:i:s');

        $insert_query = "INSERT INTO orders (full_name, email, city, service, phone, message, submission_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("sssssss", $full_name, $email, $city, $services, $phone, $message, $date);
        
        if ($stmt->execute()) {
            // Return success response
            echo json_encode(['success' => true, 'message' => 'Order submitted successfully']);
        } else {
            // Return error response
            echo json_encode(['success' => false, 'message' => 'Error submitting order']);
        }
        $stmt->close();
        exit();
    }
}

// Check if user is logged in to view orders
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch orders
$query = "SELECT * FROM orders ORDER BY submission_date DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders - Blue Star Solutions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --blue-dark: #002147;
            --blue-medium: #003366;
            --yellow: #FFD700;
            --white: #ffffff;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .orders-table {
            width: 100%;
            border-collapse: collapse;
            background: var(--white);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .orders-table th,
        .orders-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .orders-table th {
            background-color: var(--blue-dark);
            color: var(--white);
        }

        .orders-table tr:hover {
            background-color: #f9f9f9;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .logout-btn {
            background-color: var(--blue-dark);
            color: var(--white);
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: var(--blue-medium);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Orders Management</h1>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>

        <table class="orders-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Service</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars(date('Y-m-d H:i', strtotime($row['submission_date']))); ?></td>
                    <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['city']); ?></td>
                    <td><?php echo htmlspecialchars($row['service']); ?></td>
                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                    <td><?php echo htmlspecialchars($row['message']); ?></td>
                    <td>
                        <button class="delete-btn" onclick="deleteOrder(<?php echo $row['id']; ?>)">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script>
        function deleteOrder(id) {
            if (confirm('Are you sure you want to delete this order?')) {
                fetch('orders.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'delete_id=' + id
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Remove the row from the table
                        const row = event.target.closest('tr');
                        row.remove();
                    }
                });
            }
        }
    </script>
</body>
</html>