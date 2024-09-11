<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
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
            margin-top: 70px;
            width: 80%;
            max-width: 1000px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
        }
        h1 {
            color: #007bff;
        }
        section {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        h2 {
            color: #0056b3;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
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
        <h1>Our Services</h1>

        <section>
            <h2>Waste Management</h2>
            <p>
                Our waste management services focus on the efficient collection, transportation, and disposal of waste.
                We ensure that recyclable materials are properly sorted and that hazardous materials are handled with care.
                Our eco-friendly methods are designed to reduce environmental impact and promote sustainability.
            </p>
        </section>

        <section>
            <h2>Clean and Sanitation</h2>
            <p>
                We offer a range of cleaning and sanitation services tailored to your needs. Whether it’s residential, commercial,
                or industrial cleaning, our trained staff ensures the highest standards of hygiene are met.
                We use environmentally safe cleaning products to protect both you and the planet.
            </p>
        </section>

        <section>
            <h2>Water Management</h2>
            <p>
                Our water management services include water treatment, conservation, and recycling solutions.
                We aim to improve water efficiency and reduce wastage, ensuring a sustainable water supply for future generations.
                We also offer water quality testing and purification services to ensure the safety and cleanliness of your water.
            </p>
        </section>
    </main>
</body>
</html>
