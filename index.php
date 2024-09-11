<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Add background image to the body */
        body {
            background: url('11.png') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .heading-container {
            position: absolute;
            top: 40%;
            left: 25px;
            transform: translateY(-40%);
            text-align: left;
            width: auto
            padding: 20px 20px;
        }

        .heading {
            font-size: 80px;
            font-weight: bold;
            color: #d6dbdf ; /* Changed to white for better visibility */
            margin: 0;
            opacity: 0.6;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.2;
            animation: fadeIn 5s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            max-width: 600px;
            margin: 120px auto;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 0px;
            transform: translateY(-40%);
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            padding-left: 40px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .input-group label {
            display: block;
            margin-top: 5px;
            font-size: 16px;
            color: #666;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .or {
            text-align: center;
            margin: 20px 0;
        }

        .icons {
            text-align: center;
        }

        .icons i {
            margin: 0 10px;
            font-size: 24px;
            cursor: pointer;
        }

        .links {
            text-align: center;
            margin-top: 20px;
        }

        .links button {
            background: none;
            border: none;
            color: #007bff;
            cursor: pointer;
            text-decoration: underline;
        }

        .links button:hover {
            color: #0056b3;
        }

        /* Sign In Container styling */
        #signIn {
            position: absolute;
            top: 7px;
            right: 35px; /* Aligns the sign-in container to the right corner */
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Heading Section -->
    <div class="heading-container">
        <h1 class="heading">Waste <br> Management</h1>
    </div>

    <!-- Registration Container -->
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fName">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">----------or--------</p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already Have Account?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <!-- Sign In Container -->
    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">----------or--------</p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Don't have an account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>
