<?php
session_start();
include("connect.php");

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Waste Management in India</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('22.png') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            width: 100%;
            display: flex;
            justify-content: space-between; /* Adjusted for spacing */
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
            padding: 0px 15px;
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
            margin-top: 70px; /* Adjust this to avoid content overlap with the fixed header */
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1, h2, h3 {
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .section p {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <a href="home.php">Home</a>
        <a href="services.php">Services</a>
        <a href="reward_card.php">Reward Card</a>
        <a href="homepage.php" class="homepage-btn">Pickup</a>
    </header>

    <!-- Main Content Section -->
    <main>
        <div class="container">
            <h1>Waste Management in India</h1>

            <div class="section">
                <h2>Overview</h2>
                <p>
                    Waste management is a significant challenge in India due to the country's large population and rapid urbanization. Proper waste management practices are essential for maintaining public health, conserving natural resources, and protecting the environment.
                </p>
                <p>
                    The key components of waste management include waste collection, segregation, transportation, processing, and disposal. Efforts are made to minimize the generation of waste, recycle materials, and dispose of non-recyclable waste in an environmentally responsible manner.
                </p>
            </div>

            <div class="section">
                <h2>Government Programs and Initiatives</h2>
                <p>
                    The Indian government has launched several programs and initiatives to address the waste management challenges in the country. Some of the notable programs include:
                </p>
                <h3>1. Swachh Bharat Mission (SBM)</h3>
                <p>
                    Launched in 2014, the Swachh Bharat Mission aims to improve sanitation and cleanliness across India. It focuses on building individual household toilets, constructing community toilets, and promoting solid waste management practices.
                </p>
                
                <h3>2. Municipal Solid Waste Management Rules (2016)</h3>
                <p>
                    These rules, formulated by the Ministry of Environment, Forest and Climate Change, provide guidelines for the management of municipal solid waste. The rules emphasize waste segregation at source, collection, and processing of waste to reduce landfill usage.
                </p>
                
                <h3>3. Plastic Waste Management Rules (2016)</h3>
                <p>
                    The Plastic Waste Management Rules aim to reduce plastic pollution by promoting the use of alternative materials, encouraging recycling, and ensuring proper disposal of plastic waste.
                </p>
                
                <h3>4. Extended Producer Responsibility (EPR)</h3>
                <p>
                    EPR is a policy approach that makes producers responsible for the entire lifecycle of their products, including waste management. The government encourages producers to take back and manage their products once they reach the end of their life.
                </p>
            </div>

            <div class="section">
                <h2>How You Can Contribute</h2>
                <p>
                    As individuals, we can contribute to effective waste management by adopting practices such as:
                </p>
                <ul>
                    <li>Segregating waste into recyclable, non-recyclable, and hazardous categories.</li>
                    <li>Reducing the use of single-use plastics and opting for reusable alternatives.</li>
                    <li>Composting organic waste at home to reduce the volume of waste sent to landfills.</li>
                    <li>Participating in local cleanliness drives and community waste management programs.</li>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>
