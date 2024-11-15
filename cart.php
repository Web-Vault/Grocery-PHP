<?php include_once('db.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your Cart</title>

        <style>
                .cart-container {
                        display: flex;
                        margin: 20px;
                }

                .cart-items {
                        flex: 3;
                        background-color: white;
                        padding: 20px;
                        border-radius: 8px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        margin-right: 20px;
                }

                .cart-item {
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        margin-bottom: 20px;
                        padding: 10px;
                        border-bottom: 1px solid #ddd;
                }

                .item-image img {
                        width: 100px;
                        height: auto;
                        border-radius: 5px;
                }

                .item-info {
                        flex: 1;
                        margin-left: 15px;
                }

                .item-quantity {
                        display: flex;
                        align-items: center;
                }

                .qty-btn {
                        background-color: #4CAF50;
                        color: white;
                        border: none;
                        padding: 5px 10px;
                        margin: 0 5px;
                        cursor: pointer;
                        border-radius: 5px;
                }

                .remove-btn {
                        background-color: #f44336;
                        color: white;
                        border: none;
                        padding: 10px;
                        border-radius: 5px;
                        cursor: pointer;
                }

                .cart-summary {
                        flex: 2;
                        background-color: white;
                        padding: 20px;
                        border-radius: 8px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .promo-code {
                        margin: 20px 0;
                }

                .promo-code input {
                        padding: 10px;
                        border-radius: 5px;
                        border: 1px solid #ddd;
                        width: 70%;
                }

                .apply-btn {
                        background-color: #4CAF50;
                        color: white;
                        border: none;
                        padding: 10px;
                        cursor: pointer;
                        border-radius: 5px;
                }

                .cart-actions {
                        display: flex;
                        justify-content: space-between;
                }

                .continue-shopping,
                .checkout {
                        background-color: #4CAF50;
                        color: white;
                        border: none;
                        padding: 15px;
                        cursor: pointer;
                        border-radius: 5px;
                        flex: 1;
                        margin: 0 5px;
                }

                .recommended-products {
                        background-color: white;
                        padding: 20px;
                        border-radius: 8px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        margin-top: 20px;
                }

                .recommended-products h2 {
                        margin-bottom: 20px;
                        text-align: center;
                        font-size: 1.5em;
                        color: #333;
                }

                .recommended-items-container {
                        display: flex;
                        justify-content: space-around;
                        flex-wrap: wrap;
                }

                .recommended-item {
                        border-radius: 5px;
                        padding: 15px;
                        text-align: center;
                        margin: 10px;
                        width: 150px;
                        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
                        transition: transform 0.3s;
                }

                .recommended-item:hover {
                        transform: scale(1.05);
                }

                .recommended-item img {
                        width: 100%;
                        height: auto;
                        border-radius: 5px;
                }

                .recommended-item p {
                        margin: 5px 0;
                        font-size: 1em;
                        color: #555;
                }

                .price {
                        font-weight: bold;
                        color: #4CAF50;
                }

                .add-to-cart {
                        background-color: #4CAF50;
                        color: white;
                        border: none;
                        padding: 10px;
                        border-radius: 5px;
                        cursor: pointer;
                        transition: background-color 0.3s;
                }

                .add-to-cart:hover {
                        background-color: #45a049;
                }

                .footer {
                        background-color: #4CAF50;
                        color: white;
                        text-align: center;
                        padding: 10px;
                        position: fixed;
                        bottom: 0;
                        width: 100%;
                }
        </style>

</head>

<body>
        <?php require('header.php') ?>

        <main class="cart-container">
                <section class="cart-items">
                        <h2>Items in Your Cart</h2>

                        <?php

                        $uid = $_SESSION['user_id'];
                        $sql = "SELECT * FROM `cart` WHERE `user_id` = $uid ";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {

                                        $pid = $row['product_id'];

                                        $sql = " SELECT * FROM `products` WHERE `Product_id` = $pid ";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {

                                                        ?>

                                                        <div class="cart-item">
                                                                <div class="item-image">
                                                                        <img src="<?php echo $row['Product_id']; ?>" alt="Apples">
                                                                </div>
                                                                <div class="item-info">
                                                                        <h3><?php $row['Product_name']; ?></h3>
                                                                        <div class="item-quantity">
                                                                                <button class="qty-btn" id="dec_qty">-</button>
                                                                                <span class="qty" id="qty">1</span>
                                                                                <button class="qty-btn" id="inc_qty">+</button>
                                                                        </div>
                                                                        <!-- <p class="item-price">Price per unit: $1.00</p> -->
                                                                        <p class="item-total">Total: $<?php echo $row['Product_price']; ?></p>
                                                                </div>
                                                                <button class="remove-btn" onclick="window.location.href='remove_from_cart.php?pid=<?php echo $row['Product_id']; ?>'">Remove</button>
                                                        </div>


                                                        <!-- <script>
                                                                let inc_qty_btn = document.getElementById('inc_qty');
                                                                let dec_qty_btn = document.getElementById('dec_qty');
                                                                let qty_place =document.getElementById('qty');

                                                                inc_qty_btn.onclick(function inc() {
                                                                        let qty = 1;
                                                                        qty++;

                                                                        document.w
                                                                });
                                                        </script> -->

                                                        <?php

                                                }
                                        }

                                }
                        }

                        ?>



                </section>

                <section class="cart-summary">
                        <h2>Cart Summary</h2>
                        <p>Subtotal: $3.50</p>
                        <p>Estimated Shipping: $0.50</p>
                        <h3>Total: $4.30</h3>

                        <div class="promo-code">
                                <label for="promo">Promotional Code:</label>
                                <input type="text" id="promo" placeholder="Enter code">
                                <button class="apply-btn">Apply</button>
                        </div>

                        <div class="cart-actions">
                                <button class="continue-shopping">Continue Shopping</button>
                                <button class="checkout"><a href="checkout.php" class="text-white text-decoration-none">
                                                Checkout </a></button>
                        </div>
                </section>
        </main>
        <section class="recommended-products">
                <div class="h2">Recommended Products</div>
                <div class="recommended-items-container">
                        <div class="recommended-item">
                                <img src="milk.jpg" alt="Milk">
                                <p>Milk</p>
                                <p class="price">$2.00</p>
                                <button class="add-to-cart">Add to Cart</button>
                        </div>
                        <div class="recommended-item">
                                <img src="eggs.jpg" alt="Eggs">
                                <p>Eggs</p>
                                <p class="price">$2.50</p>
                                <button class="add-to-cart">Add to Cart</button>
                        </div>
                        <div class="recommended-item">
                                <img src="cheese.jpg" alt="Cheese">
                                <p>Cheese</p>
                                <p class="price">$3.00</p>
                                <button class="add-to-cart">Add to Cart</button>
                        </div>
                </div>
        </section>

        <?php require('footer.php') ?>
</body>

</html>