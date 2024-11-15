<?php include_once('db.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop Page - Grocery Store</title>
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

                /* Sidebar Filters */
                .filters-sidebar {
                        width: 20%;
                        background: rgba(255, 255, 255, 0.2);
                        backdrop-filter: blur(10px);
                        border-radius: 20px;
                        padding: 20px;
                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                }

                .filters-sidebar h3,
                .filters-sidebar h4 {
                        margin-bottom: 10px;
                        color: #333;
                }

                .filters-sidebar ul {
                        list-style-type: none;
                }

                .filters-sidebar li {
                        margin-bottom: 10px;
                }

                .filter-price input {
                        width: 100%;
                }

                .filter-rating input {
                        margin-right: 10px;
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
        </style>
</head>

<body>

        <?php require('header.php') ?>

        <div class="shop-page">
                <div class="filters-sidebar">
                        <h3>Filters</h3>

                        <div class="filter-category">
                                <h4>Category</h4>
                                <ul>
                                        <li><input type="checkbox"> Fruits & Vegetables</li>
                                        <li><input type="checkbox"> Dairy & Bakery</li>
                                        <li><input type="checkbox"> Beverages</li>
                                        <li><input type="checkbox"> Snacks & Packaged Food</li>
                                </ul>
                        </div>

                        <div class="filter-price">
                                <h4>Price Range</h4>
                                <input type="range" min="0" max="1000" value="500">
                        </div>

                        <div class="filter-rating">
                                <h4>Rating</h4>
                                <input type="checkbox"> 4 Stars & Up <br>
                                <input type="checkbox"> 3 Stars & Up
                        </div>

                </div>

                <div class="products-section">
                        <div class="sorting-options">
                                <label for="sort">Sort by:</label>
                                <select id="sort">
                                        <option value="popularity">Popularity</option>
                                        <option value="price-low">Price: Low to High</option>
                                        <option value="price-high">Price: High to Low</option>
                                        <option value="newest">Newest</option>
                                </select>
                        </div>

                        <div class="product-grid">


                        <?php
                        
                        $sql = "SELECT * FROM `products`";
                        $result = $conn->query($sql);

                        ?>

                                <?php
                                
                                if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                
                                                ?>

                                <div class="product-card">
                                        <img src="<?php echo $row['Product_image']; ?>" alt="Product 1">
                                        <h5><?php echo $row['Product_name']; ?></h5>
                                        <p><?php echo "$".$row['Product_price']; ?></p>
                                        <div class="rating">★★★★☆ (50 reviews)</div>
                                        <button onclick="window.location.href='add_cart.php?pid=<?php echo $row['Product_id']; ?>'">Add to Cart</button>
                                </div>

                                                <?php
                                                
                                        }
                                }

                                ?>
                        
                                

                                


                        </div>

                        <!-- <div class="pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">Next</a>
                        </div> -->
                </div>
        </div>


        <?php require('footer.php') ?>

        <!-- Bootstrap and FontAwesome JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>