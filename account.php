<?php include_once('db.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
                body {
                        font-family: Arial, sans-serif;
                        background-color: #f9f9f9;
                        margin: 0;
                        padding: 0;
                }

                .container {
                        max-width: 1200px;
                        margin: 0 auto;
                        padding: 20px;
                        background-color: #fff;
                        border-radius: 8px;
                        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                }

                .header {
                        text-align: center;
                        margin-bottom: 30px;
                }

                .profile-section {
                        display: flex;
                        align-items: center;
                        margin-bottom: 30px;
                        padding: 10px;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                        
                }

                .profile-picture {
                        margin-right: 20px;
                }

                .profile-picture img {
                        width: 100px;
                        height: 100px;
                        border-radius: 50%;
                        object-fit: cover;
                }

                .user-info {
                        flex-grow: 1;
                }

                .user-info h2 {
                        margin: 0;
                        font-size: 1.5em;
                }

                .info {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                }

                .info >.user-buttons {
                        margin-top: -10px;
                }

                .info p {
                        margin: 5px 0;
                        font-size: 1em;
                }

                .user-buttons {
                        display: flex;
                        justify-content: flex-end;
                        margin-top: 10px;
                }

                .edit-btn,
                .add-btn,
                .delete-btn,
                .view-btn,
                .preferences-btn,
                .redeem-btn,
                .support-btn,
                .feedback-btn,
                .add-to-cart-btn,
                .logout-btn {
                        background-color: #28a745;
                        color: white;
                        border: none;
                        padding: 10px 15px;
                        border-radius: 5px;
                        cursor: pointer;
                        margin-right: 10px;
                }

                .edit-btn:hover,
                .add-btn:hover,
                .delete-btn:hover,
                .view-btn:hover,
                .preferences-btn:hover,
                .redeem-btn:hover,
                .support-btn:hover,
                .feedback-btn:hover,
                .add-to-cart-btn:hover,
                .logout-btn:hover {
                        background-color: #218838;
                }

                h2 {
                        border-bottom: 2px solid #28a745;
                        padding-bottom: 10px;
                }

                section {
                        margin-bottom: 30px;
                }

                .address,
                .order,
                .payment,
                .wishlist-item {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 10px;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                        margin-bottom: 10px;
                }

                .address-buttons,
                .order-buttons,
                .payment-buttons,
                .preferences-buttons,
                .support-buttons {
                        display: flex;
                        justify-content: flex-end;
                }

        </style>


        <title>Your Account</title>
</head>

<body>

        <?php require('header.php') ?>

        <div class="container">
                <header class="header">
                        <h1>Your Account</h1>
                </header>

                <?php
                
                $email = $_SESSION['email'];



                $query = "SELECT * FROM `users` WHERE `User_email` = '$email'";
                $result = $conn->query("$query");

                if ($result->num_rows > 0) {
                        $user_info = $result->fetch_assoc();
                }

                ?>

                <section class="profile-section">
                        <div class="profile-picture">
                                <img src="profile-pic.jpg" alt="Profile Picture" />
                        </div>
                        <div class="user-info">
                                <h2><?php echo $user_info['User_name']; ?></h2>
                                <div class="info">
                                        <div class="p">
                                                <p>Email: <?php echo $user_info['User_email']; ?></p>
                                                <p>Phone: +91 <?php echo $user_info['User_mobile']; ?></p>
                                        </div>
                                        <div class="user-buttons">
                                                <button class="edit-btn mt-4">Edit Profile</button>
                                                <button class="logout-btn mt-4"><a href="logout.php" class="text-white text-decoration-none"> Logout </a> </button>
                                        </div>
                                </div>
                        </div>
                </section>

                <section class="address-book">
                        <h2>Address Book</h2>
                        <div class="address">
                                <p><?php echo $user_info['User_address']; ?></p>
                                <div class="address-buttons">
                                        <button class="edit-btn">Edit</button>
                                        <button class="delete-btn">Delete</button>
                                </div>
                        </div>
                        <div class="address">
                                <p>Work Address</p>
                                <div class="address-buttons">
                                        <button class="edit-btn">Edit</button>
                                        <button class="delete-btn">Delete</button>
                                </div>
                        </div>
                        <button class="add-btn">Add New Address</button>
                </section>

                <section class="order-history">
                        <h2>Order History</h2>
                        <div class="order">
                                <p>Order #12345 | Date: 2023-10-01 | Total: $50.00 | Status: Delivered</p>
                                <div class="order-buttons">
                                        <button class="view-btn">View Details</button>
                                </div>
                        </div>
                        <div class="order">
                                <p>Order #12344 | Date: 2023-09-28 | Total: $30.00 | Status: Processing</p>
                                <div class="order-buttons">
                                        <button class="view-btn">View Details</button>
                                </div>
                        </div>
                </section>

                <section class="payment-methods">
                        <h2>Payment Methods</h2>
                        <div class="payment">
                                <p>Visa **** **** **** 1234</p>
                                <div class="payment-buttons">
                                        <button class="edit-btn">Edit</button>
                                        <button class="delete-btn">Delete</button>
                                </div>
                        </div>
                        <button class="add-btn">Add New Payment Method</button>
                </section>

                <section class="preferences">
                        <h2>Account Preferences</h2>
                        <div class="preferences-buttons">
                                <button class="preferences-btn">Notification Settings</button>
                                <button class="preferences-btn">Privacy Settings</button>
                        </div>
                </section>

                <section class="wishlist">
                        <h2>Wishlist</h2>
                        <div class="wishlist-item">
                                <p>Item 1</p>
                                <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                        <div class="wishlist-item">
                                <p>Item 2</p>
                                <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                </section>

                <section class="support">
                        <h2>Support</h2>
                        <div class="support-buttons">
                                <button class="support-btn">Contact Support</button>
                                <button class="feedback-btn">Leave Feedback</button>
                        </div>
                </section>

                <footer class="logout-footer">
                </footer>
        </div>

        <?php require('footer.php') ?>

</body>

</html>