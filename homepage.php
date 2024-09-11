<?php
// Start the session
session_start();

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'login'); // Replace 'your_database_name' with the actual database name

// Check if connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if coordinates are set in the URL query string
$latitude = isset($_GET['latitude']) ? $_GET['latitude'] : '';
$longitude = isset($_GET['longitude']) ? $_GET['longitude'] : '';

// Handle form submission
if (isset($_POST['submit'])) {
    // Get form data
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $waste_type = mysqli_real_escape_string($conn, $_POST['waste_type']);
    
    // Get the user's email from the session (ensure user is logged in)
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

    // Check if the user is logged in and if required data is available
    if ($email && $location && $date && $time && $waste_type) {
        // Insert data into the bookings table
        $sql = "INSERT INTO user_datetime (email, location, date, time, waste_type) 
                VALUES ('$email', '$location', '$date', '$time', '$waste_type')";

        // Execute the query and check for success
        if (mysqli_query($conn, $sql)) {
            // Redirect to booking_success.php
            header('Location: booking_success.php');
            exit(); // Ensure no further code is executed
        } else {
            echo "<script>alert('Error: " . $sql . " - " . mysqli_error($conn) . "');</script>";
        }
    } else {
        echo "<script>alert('Please fill all fields.');</script>";
    }
}

// Close the database connection
// mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        /* Your existing styles */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('44.JPG'); /* Add background image */
            background-size: cover; /* Ensure the image covers the whole page */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent the image from repeating */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
            margin-right: 380px; /* Add margin for spacing */
        }
        input, select {
            margin: 20px 0;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }
        .submit-btn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
        .logout-btn {
            margin-top: 580px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #0;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }

        /* Header Styles */
        header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000; /* Ensure header is above other content */
        }
        header a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 0 15px;
        }
        header a:hover {
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
        main {
            margin-top: 60px; /* Adjust this to avoid content overlap with the fixed header */
            display: flex;
            justify-content: flex-end; /* Align content to the right */
            align-items: center; /* Keep vertical centering */
            width: 100%; /* Make sure the main takes full width */
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <a href="home.php">Home</a>
        <a href="services.php">Services</a>
        <a href="sellwaste.html">Sell with Store</a>
        <a href="reward_card.php">Reward Card</a>
        <a href="homepage.php" class="homepage-btn">Pickup</a>
    </header>

    <!-- Main Content Section -->
    <main>
        <div class="container">
            <h2>Welcome, 
                <?php 
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                    $query = mysqli_query($conn, "SELECT firstName, lastName FROM users WHERE email='$email'");
                    $row = mysqli_fetch_array($query);
                    echo $row['firstName'] . ' ' . $row['lastName'];
                }
                ?>
            </h2>

            <h2>Enter Details</h2>
            <form method="POST" action="">

            <label for="location">Location:</label>
                <div style="display: flex; gap: 10px;">
                    <input type="text" id="location" name="location" placeholder="Enter your location" value="<?php echo $latitude && $longitude ? "$latitude, $longitude" : ''; ?>" style="flex: 1;" required>
                    <button type="button" class="detect-btn" 
                    style="padding: 1px 2px; font-size: 16px;
                    background-color: #FFFFF9;
                    color: Black; border: none;
                    border-radius: 10px;
                    cursor: pointer;" 
                    onclick="window.location.href='index.html'">
                    Detect Location</button>
                </div>

                <label for="date">Choose a date:</label>
                <input type="date" id="date" name="date" required>

                <label for="time">Choose a time:</label>
                <input type="time" id="time" name="time" required>

                <label for="waste-type">Select Type of Waste:</label>
                <select id="waste-type" name="waste_type" required>
                    <option value="recyclable">Recyclable</option>
                    <option value="organic">Organic</option>
                    <option value="hazardous">Hazardous</option>
                    <option value="electronic">Electronic</option>
                    <option value="construction">Construction</option>
                    <option value="other">Other</option>
                </select>

                <!-- Single Submit Button -->
                <button type="submit" name="submit" class="submit-btn">Submit</button>
            </form>
        </div>

        <!-- Common Logout Button at the End of the Page -->
        <a href="logout.php" class="logout-btn">Logout</a>
    </main>
</body>
</html>
