<?php include_once('db.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - Grocery Store</title>
        <style>
                body {
                        font-family: 'Arial', sans-serif;
                        background: url('background.jpg') no-repeat center center fixed;
                        background-size: cover;
                }

                .hero-section {
                        text-align: center;
                        padding: 100px 20px;
                        background: rgba(255, 255, 255, 0.1);
                        backdrop-filter: blur(10px);
                        border-radius: 20px;
                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                        margin: 50px;
                        color: #333;
                }

                .hero-section h1 {
                        font-size: 3em;
                        margin-bottom: 20px;
                        color: #000;
                        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                }

                .hero-section p {
                        font-size: 1.2em;
                        color: #000;
                        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
                        margin-bottom: 30px;
                }

                .hero-section button {
                        padding: 15px 30px;
                        /* background-color: #28a745; */
                        color: #000;
                        border: 1px solid #000;
                        border-radius: 8px;
                        font-size: 1.1em;
                        cursor: pointer;
                        transition: background-color 0.3s ease;
                }

                .hero-section button:hover {
                        background-color: #218838;
                        color: #fff;
                        border: none;
                }

                .categories-section {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                        gap: 20px;
                        padding: 50px;
                }

                .category-card {
                        background: rgba(255, 255, 255, 0.1);
                        backdrop-filter: blur(10px);
                        padding: 20px;
                        border-radius: 20px;
                        text-align: center;
                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                        transition: transform 0.3s ease;
                }

                .category-card:hover {
                        transform: translateY(-10px);
                }

                .category-card img {
                        max-width: 100%;
                        border-radius: 10px;
                }

                .category-card h5 {
                        margin-top: 15px;
                        font-size: 1.5em;
                        color: #333;
                }

                .category-card p {
                        color: #666;
                        font-size: 1.1em;
                }

                .category-card button {
                        margin-top: 10px;
                        padding: 10px 20px;
                        background-color: #28a745;
                        color: #fff;
                        border: none;
                        border-radius: 8px;
                        cursor: pointer;
                        font-size: 1em;
                }

                .category-card button:hover {
                        background-color: #218838;
                }

                /* Footer */
                footer {
                        background: rgba(255, 255, 255, 0.2);
                        backdrop-filter: blur(10px);
                        padding: 20px;
                        text-align: center;
                        box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.1);
                }

                footer p {
                        color: #333;
                }
        </style>
</head>

<body>

        <?php require('header.php') ?>

        <div class="hero-section">
                <h1>Welcome to Grocery Store</h1>
                <p>Your one-stop shop for fresh groceries, dairy, and more!</p>
                <button onclick="window.location.href='shop.php'">Start Shopping</button>
        </div>

        <div class="categories-section">
                <?php
                $sql = "SELECT * FROM `categories`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                                ?>

                                <div class="category-card">
                                <img src="<?php echo empty($row['Category_image']) ? 'https://via.placeholder.com/250' : $row['Category_image']; ?>"
                                                alt="Fruits & Vegetables">
                                        <h5><?php echo $row['Category_name']; ?></h5>
                                        <p><?php echo $row['Category_desc']; ?></p>
                                        <button onclick="window.location.href='categories.php'">Shop Now</button>
                                </div>

                                <?php

                        }
                }

                ?>

        </div>

        <!-- Footer -->
        <?php require('footer.php') ?>

        <!-- Bootstrap and FontAwesome JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>