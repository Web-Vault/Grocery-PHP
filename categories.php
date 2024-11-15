<?php include_once('db.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grocery Shop</title>

        <style>
                body {
                        font-family: 'Arial', sans-serif;
                        background: url('background.jpg') no-repeat center center fixed;
                        background-size: cover;
                }

                .shop-page {
                        display: flex;
                        gap: 20px;
                }

                .filters-sidebar {
                        width: 20%;
                        /* Set the width of the sidebar */
                        background: rgba(255, 255, 255, 0.8);
                        /* White background with some transparency */
                        border-radius: 15px;
                        /* Rounded corners */
                        padding: 20px;
                        /* Padding around the content */
                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                        /* Subtle shadow for depth */
                }

                .filters-sidebar h3,
                .filters-sidebar h4 {
                        margin-bottom: 15px;
                        /* Space below headings */
                        color: #333;
                        /* Darker color for better readability */
                        font-size: 1.5em;
                        /* Increased font size for main headers */
                }

                .filters-sidebar h4 {
                        font-size: 1.2em;
                        /* Slightly smaller for sub-headers */
                        border-bottom: 2px solid #28a745;
                        /* Green underline for emphasis */
                        padding-bottom: 5px;
                        /* Padding below the heading */
                }

                .filters-sidebar ul {
                        list-style-type: none;
                        /* Remove default list styling */
                        padding: 0;
                        /* Remove default padding */
                }

                .filters-sidebar li {
                        margin-bottom: 10px;
                        /* Space between list items */
                }

                .filters-sidebar a {
                        text-decoration: none;
                        /* Remove underline from links */
                        color: #007bff;
                        /* Link color */
                        transition: color 0.2s;
                        /* Smooth transition for hover effect */
                }

                .filters-sidebar a:hover {
                        color: #0056b3;
                        /* Darker blue on hover */
                }

                .filter-price input {
                        width: calc(100% - 20px);
                        /* Full width minus padding */
                        padding: 10px;
                        /* Padding inside the input */
                        border: 1px solid #ccc;
                        /* Light border */
                        border-radius: 5px;
                        /* Rounded corners for input */
                        margin-bottom: 15px;
                        /* Space below input */
                }

                .filter-rating {
                        justify-content: flex-start;
                        align-items: flex-start;
                        display: flex;
                        /* Flex layout for the rating filters */
                        flex-direction: column;
                        /* Stack vertically */
                }

                .filter-rating input {
                        margin-bottom: 10px;
                        /* Space below each checkbox */
                        cursor: pointer;
                        /* Pointer cursor for better UX */
                }

                /* Products Section */
                .products-section {
                        width: 75%;
                }

                .sorting-options {
                        display: flex;
                        justify-content: space-between;
                        margin-bottom: 20px;
                }

                .sorting-options label {
                        margin-right: 10px;
                        font-weight: bold;
                }

                .sorting-options select {
                        padding: 5px;
                        border-radius: 8px;
                        border: 1px solid #ccc;
                        background-color: #fff;
                }

                /* Product Grid */
                .product-grid {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                        gap: 20px;
                }

                .product-card {
                        background: rgba(255, 255, 255, 0.1);
                        backdrop-filter: blur(10px);
                        padding: 20px;
                        border-radius: 20px;
                        text-align: center;
                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                        transition: transform 0.3s ease;
                }

                .product-card:hover {
                        transform: translateY(-10px);
                }

                .product-card img {
                        max-width: 100%;
                        border-radius: 10px;
                }

                .product-card h5 {
                        margin: 10px 0;
                        font-size: 1.2em;
                        color: #333;
                }

                .product-card p {
                        color: #666;
                        font-size: 1.1em;
                }

                .product-card .rating {
                        margin: 10px 0;
                        color: #ffa500;
                }

                .product-card button {
                        padding: 10px 20px;
                        background-color: #28a745;
                        color: #fff;
                        border: none;
                        border-radius: 8px;
                        cursor: pointer;
                }

                .product-card button:hover {
                        background-color: #218838;
                }

                /* Pagination */
                .pagination {
                        margin-top: 20px;
                        text-align: center;
                }

                .pagination a {
                        padding: 10px 20px;
                        border-radius: 8px;
                        background-color: rgba(255, 255, 255, 0.2);
                        backdrop-filter: blur(10px);
                        margin: 5px;
                        text-decoration: none;
                        color: #333;
                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                }

                .pagination a:hover {
                        background-color: #28a745;
                        color: #fff;
                }

                /* Category Headings */
                .category {
                        margin-top: 40px;
                }

                .category h4 {
                        color: #333;
                        border-bottom: 2px solid #28a745;
                        padding-bottom: 10px;
                }
        </style>

</head>

<body>

        <?php require('header.php') ?>

        <div class="shop-page">
                <div class="filters-sidebar">
                        <h3>Categories</h3>
                        <ul>
                                <li><a href="#veggies">Veggies</a></li>
                                <li><a href="#fruits">Fruits</a></li>
                                <li><a href="#bathing-items">Bathing Items</a></li>
                                <li><a href="#snacks">Snacks</a></li>
                                <li><a href="#dairy">Dairy</a></li>
                                <li><a href="#baking">Baking Items</a></li>
                        </ul>
                        <h4>Filter by Price</h4>
                        <div class="filter-price">
                                <input type="text" placeholder="Max Price">
                        </div>
                        <h4>Filter by Rating</h4>
                        <div class="filter-rating">
                                <input type="checkbox"> 1 Star
                                <input type="checkbox"> 2 Stars
                                <input type="checkbox"> 3 Stars
                                <input type="checkbox"> 4 Stars
                                <input type="checkbox"> 5 Stars
                        </div>
                </div>

                <div class="products-section">
                        <div class="sorting-options">
                                <label for="sort">Sort by:</label>
                                <select id="sort">
                                        <option value="popularity">Popularity</option>
                                        <option value="price-low-high">Price: Low to High</option>
                                        <option value="price-high-low">Price: High to Low</option>
                                </select>
                        </div>


                        <?php
                        $sql = "SELECT * FROM `categories`";
                        $categoriesResult = $conn->query($sql);

                        if ($categoriesResult->num_rows > 0) {
                                while ($cgty_row = $categoriesResult->fetch_assoc()) {
                                        ?>
                                        <div class="category" id="fruits">
                                                <h4><?php echo $cgty_row['Category_name']; ?></h4>
                                                <div class="product-grid">

                                                        <?php
                                                        $productSql = "SELECT * FROM `products` WHERE `Product_category` = " . $cgty_row['Category_id'];
                                                        $productsResult = $conn->query($productSql);

                                                        if ($productsResult->num_rows > 0) {
                                                                while ($prd_row = $productsResult->fetch_assoc()) {
                                                                        ?>
                                                                        <div class="product-card">
                                                                                <img src="<?php echo $prd_row['Product_image'] ?>" alt="Product Image">
                                                                                <h5><?php echo $prd_row['Product_name'] ?></h5>
                                                                                <p><?php echo "$" . $prd_row['Product_price'] ?></p>
                                                                                <div class="rating">⭐⭐⭐⭐⭐</div>
                                                                                <button>Add to Cart</button>
                                                                        </div>
                                                                        <?php
                                                                }
                                                        } else {
                                                                echo "<p>No products available in this category.</p>";
                                                        }
                                                        ?>
                                                </div>
                                        </div>
                                        <?php
                                }
                        } else {
                                echo "<p>No categories found.</p>";
                        }
                        ?>










                        <!-- <div class="pagination">
                                <a href="#">&laquo; Previous</a>
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">Next &raquo;</a>
                        </div> -->
                </div>
        </div>

        <?php require('footer.php') ?>

</body>

</html>