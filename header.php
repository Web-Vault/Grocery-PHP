

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <style>
                body {
                        font-family: 'Arial', sans-serif;
                        background: url('background.jpg') no-repeat center center fixed;
                        background-size: cover;
                }

                /* Header Styles */
                .header {
                        padding: 20px;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                }

                .header img {
                        width: 150px;
                }

                .navbar {
                        background: transparent;
                }

                .nav-link {
                        color: #000 !important;
                }
        </style>

</head>

<body>
        <div class="header">
                <img src="logo.png" alt="Logo">
                <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ml-auto">
                                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="listing.php">Shop</a></li>
                                        <li class="nav-item"><a class="nav-link" href="categories.php">Categories</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

                                        <?php if (isset($_SESSION['email'])): ?>
                                                <li class="nav-item"><a class="nav-link" href="account.php">My Account</a></li>
                                                <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
                                        <?php else: ?>
                                                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                                        <?php endif; ?>
                                </ul>
                        </div>
                </nav>
        </div>

</body>

</html>