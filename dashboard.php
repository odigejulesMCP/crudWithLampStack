<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .dashboard-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .dashboard-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .dashboard-header h1 {
            margin: 0;
        }

        .dashboard-content {
            margin-bottom: 20px;
        }

        .dashboard-content p {
            margin: 0;
        }

        .dashboard-logout {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1>Welcome to the Dashboard</h1>
    
        </div>
        <div class="dashboard-content">
            <p>You are logged in.</p>
            <!-- Add your CRUD app content here -->
        </div>
        <div class="dashboard-logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </div>
</body>
</html>

