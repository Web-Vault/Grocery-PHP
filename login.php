<?php
require('db.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'], $_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];





        $admin_query = "SELECT * FROM `ADMIN` WHERE `Email` = '$email'";
        $admin_result = $conn->query($admin_query);

        if ($admin_result->num_rows > 0) {
                $row = $admin_result->fetch_assoc();

                if ($row['Email'] == $email && $row['Password'] == $password) {

                        $_SESSION['admin'] = $row['Email'];
                        echo "<script>alert('admin logged in !');</script>";
                        ?>
                        <script>
                                let str = 'admin/';
                                window.location.href = str + "index.php";
                        </script>
                        <?php
                        exit;

                } else {
                        $query = "SELECT * FROM `users` WHERE `User_email` = '$email'";
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                if ($password === $row['User_password']) {
                                        $_SESSION['user_id'] = $row['user_id'];
                                        $_SESSION['email'] = $row['User_email'];
                                        echo "<script>alert('Login successful');</script>";
                                        header('Location: index.php');
                                        exit;
                                } else {
                                        echo "<script>alert('Password is incorrect');</script>";
                                }
                        } else {
                                echo "<script>alert('Email is incorrect or not registered. Please sign up first.');</script>";
                        }
                }

        }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup-email'], $_POST['signup-password'], $_POST['confirm-password'])) {
        $signup_email = $_POST['signup-email'];
        $signup_password = $_POST['signup-password'];
        $confirm_password = $_POST['confirm-password'];

        $query = "SELECT * FROM `users` WHERE `User_email` = '$signup_email'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
                echo "<script>alert('Email already exists. Please login.');</script>";
        } else {
                if ($signup_password === $confirm_password) {
                        $insert_query = "INSERT INTO users (User_email, User_password) VALUES ('$signup_email', '$signup_password')";
                        if ($conn->query($insert_query) === TRUE) {
                                echo "<script>alert('Signup successful. Please login now.');</script>";
                                header('Location: login.php'); // Redirect to login after signup
                                exit;
                        } else {
                                echo "<script>alert('Error during signup. Please try again later.');</script>";
                        }
                } else {
                        echo "<script>alert('Passwords do not match. Please try again.');</script>";
                }
        }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login / Signup</title>

        <style>
                body {
                        font-family: 'Arial', sans-serif;
                        background: url('background.jpg') no-repeat center center fixed;
                        background-size: cover;
                        color: #333;
                }

                .login-section,
                .signup-section {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                }

                .glass {
                        backdrop-filter: blur(10px);
                        background: rgba(255, 255, 255, 0.2);
                        border-radius: 20px;
                        padding: 40px;
                        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
                        width: 400px;
                }

                h2 {
                        margin-bottom: 20px;
                        text-align: center;
                }

                label {
                        display: block;
                        margin-bottom: 5px;
                }

                input[type="email"],
                input[type="password"] {
                        width: 100%;
                        padding: 10px;
                        margin-bottom: 20px;
                        border-radius: 8px;
                        border: 1px solid rgba(255, 255, 255, 0.5);
                        background: rgba(255, 255, 255, 0.3);
                }

                button {
                        width: 100%;
                        padding: 10px;
                        background-color: #28a745;
                        color: white;
                        border: none;
                        border-radius: 10px;
                        cursor: pointer;
                        transition: background-color 0.3s ease;
                }

                button:hover {
                        background-color: #218838;
                }

                .forgot-password {
                        background: none;
                        color: #007bff;
                        border: none;
                        cursor: pointer;
                        margin: 10px 0;
                }

                footer {
                        text-align: center;
                        padding: 20px;
                        background: rgba(255, 255, 255, 0.2);
                }
        </style>

</head>

<body>

        <main>
                <section class="login-section" id="login">
                        <div class="glass">
                                <h2>Login to Your Account</h2>
                                <form action="" method="POST">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" placeholder="Enter Email">

                                        <label for="password">Password:</label>
                                        <input type="password" id="password" name="password"
                                                placeholder="Enter Password">

                                        <button type="submit">Login</button>
                                </form>

                                <button class="forgot-password">Forgot Password?</button>
                                <p>Don't have an account? <a href="#signup">Sign Up</a></p>
                        </div>
                </section>

                <section id="signup" class="signup-section">
                        <div class="glass">
                                <h2>Create an Account</h2>
                                <form action="" method="POST">
                                        <label for="signup-email">Email:</label>
                                        <input type="email" id="signup-email" name="signup-email"
                                                placeholder="Enter Email">

                                        <label for="signup-password">Password:</label>
                                        <input type="password" id="signup-password" name="signup-password"
                                                placeholder="Enter Password">

                                        <label for="confirm-password">Confirm Password:</label>
                                        <input type="password" id="confirm-password" name="confirm-password"
                                                placeholder="Retype Password">

                                        <button type="submit">Sign Up</button>
                                        <p>have an account? <a href="#login">Sign In</a></p>

                                </form>

                        </div>
                </section>
        </main>


        <?php require('footer.php') ?>
</body>

</html>