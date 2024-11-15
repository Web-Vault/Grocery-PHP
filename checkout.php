<?php include_once('db.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
                body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        margin: 0;
                        padding: 0;
                }

                .checkout-page {
                        max-width: 800px;
                        margin: 20px auto;
                        padding: 20px;
                        background: white;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        border-radius: 8px;
                }

                h1,
                h2 {
                        color: #333;
                }

                .product-list {
                        margin: 20px 0;
                }

                .product-item {
                        display: flex;
                        align-items: center;
                        margin-bottom: 10px;
                }

                .product-item img {
                        width: 50px;
                        height: 50px;
                        margin-right: 10px;
                }

                input[type="text"],
                input[type="email"],
                input[type="tel"],
                select {
                        width: calc(100% - 20px);
                        padding: 10px;
                        margin: 10px 0;
                        border: 1px solid #ddd;
                        border-radius: 4px;
                }

                input[type="checkbox"] {
                        margin-right: 5px;
                }

                .checkout-button {
                        background-color: #28a745;
                        color: white;
                        border: none;
                        padding: 10px 20px;
                        cursor: pointer;
                        border-radius: 4px;
                }

                .checkout-button:hover {
                        background-color: #218838;
                }

                .terms {
                        margin: 20px 0;
                }

                footer {
                        text-align: center;
                        margin-top: 20px;
                        font-size: 12px;
                        color: #777;
                }
        </style>

        <title>Checkout Page</title>
</head>

<body>

        <?php require('header.php') ?>

        <div class="checkout-page">
                <h1>Checkout</h1>

                <div class="order-summary">
                        <h2>Order Summary</h2>
                        <div class="product-list">
                                <div class="product-item">
                                        <img src="milk.jpg" alt="Milk">
                                        <p>Milk</p>
                                        <p>Quantity: 1</p>
                                        <p>Price: $2.00</p>
                                </div>
                                <div class="product-item">
                                        <img src="eggs.jpg" alt="Eggs">
                                        <p>Eggs</p>
                                        <p>Quantity: 1</p>
                                        <p>Price: $2.50</p>
                                </div>
                                <div class="product-item">
                                        <img src="cheese.jpg" alt="Cheese">
                                        <p>Cheese</p>
                                        <p>Quantity: 1</p>
                                        <p>Price: $3.00</p>
                                </div>
                        </div>
                        <p>Subtotal: $7.50</p>
                        <p>Shipping: $5.00</p>
                        <p><strong>Total: $12.50</strong></p>
                </div>

                <div class="customer-info">
                        <h2>Customer Information</h2>
                        <input type="email" placeholder="Email Address" value="customer@example.com" required>
                        <input type="tel" placeholder="Phone Number" value="(123) 456-7890" required>
                </div>

                <div class="shipping-address">
                        <h2>Shipping Address</h2>
                        <input type="text" placeholder="Full Name" value="John Doe" required>
                        <input type="text" placeholder="Street Address" value="123 Main St" required>
                        <input type="text" placeholder="City" value="Anytown" required>
                        <input type="text" placeholder="State" value="CA" required>
                        <input type="text" placeholder="ZIP Code" value="12345" required>
                        <input type="text" placeholder="Country" value="USA" required>
                </div>

                <div class="payment-info">
                        <h2>Payment Information</h2>
                        <select>
                                <option value="credit">Credit/Debit Card</option>
                                <option value="paypal">PayPal</option>
                        </select>
                        <input type="text" placeholder="Card Number" value="4111 1111 1111 1111" required>
                        <input type="text" placeholder="Expiration Date (MM/YY)" value="12/25" required>
                        <input type="text" placeholder="CVV" value="123" required>
                </div>

                <div class="review-order">
                        <h2>Review Your Order</h2>
                        <p>Make sure all information is correct before completing your purchase.</p>
                        <button class="checkout-button"> <a href="index.php" class="text-white text-decoration-none"> Complete Purchase </a></button>
                </div>

                <div class="terms">
                        <input type="checkbox" required>
                        <label for="terms">I agree to the <a href="#">Terms and Conditions</a>.</label>
                </div>
        </div>

        <?php require('footer.php') ?>
</body>

</html>