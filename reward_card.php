<?php
session_start();
include("connect.php"); // Database connection file

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}

// Get the logged-in user's email
$email = $_SESSION['email'];

// Fetch the user's rewards from the database
$query = "SELECT points, vouchers, coupons, remaining_cash FROM rewards WHERE email='$email'";
$result = mysqli_query($conn, $query);

// Initialize default reward values
$points = 0;
$vouchers = 0;
$coupons = 0;
$remaining_cash = 0.00;

if ($row = mysqli_fetch_assoc($result)) {
    $points = $row['points'];
    $vouchers = $row['vouchers'];
    $coupons = $row['coupons'];
    $remaining_cash = $row['remaining_cash'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Reward Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            text-align: center;
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            z-index: 1000; /* Ensure header is above other content */
        }
        .header a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            padding: 10px;
        }
        .header a:hover {
            text-decoration: underline;
        }
        .homepage-btn {
            background-color: #28a745; /* Green background for the homepage button */
            padding: 8px 15px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }
        .homepage-btn:hover {
            background-color: #218838; /* Darker green on hover */
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 80px auto; /* Adjusted for fixed header */
            text-align: center;
        }
        h2 {
            color: #333;
        }
        .reward-section {
            margin: 20px 0;
        }
        .reward-item {
            font-size: 18px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .highlight {
            font-weight: bold;
            color: #007bff;
        }
        .logout-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
         <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="reward_card.php">Reward Card</a>
        <a href="homepage.php" class="homepage-btn">Pickup</a>
        <a href="logout.php">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h2>Your Rewards</h2>

        <div class="reward-section">
            <div class="reward-item">
                <span class="highlight">Points Earned:</span> <?php echo $points; ?>
            </div>
            <div class="reward-item">
                <span class="highlight">Vouchers Claimed:</span> <?php echo $vouchers; ?>
            </div>
            <div class="reward-item">
                <span class="highlight">Coupons Claimed:</span> <?php echo $coupons; ?>
            </div>
            <div class="reward-item">
                <span class="highlight">Remaining Cash (INR):</span> ₹<?php echo number_format($remaining_cash, 2); ?>
            </div>
        </div>

        <!-- Logout Button -->
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
