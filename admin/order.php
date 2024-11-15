<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Management</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <style>
                * {
                        box-sizing: border-box;
                        margin: 0;
                        padding: 0;
                        font-family: 'Poppins', sans-serif;
                }

                body {
                        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.15)),
                                url('https://source.unsplash.com/random/1920x1080?groceries') no-repeat center center fixed;
                        background-size: cover;
                        backdrop-filter: blur(10px);
                        display: flex;
                        justify-content: space-between;
                        padding: 0;
                        min-height: 100vh;
                }

                /* Header Styling */
                .header {
                        position: fixed;
                        width: 100%;
                        height: 70px;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 0 30px;
                        background: rgba(255, 255, 255, 0.15);
                        backdrop-filter: blur(10px);
                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                        z-index: 100;
                }

                .header .logo {
                        font-size: 1.8em;
                        font-weight: bold;
                        color: #000;
                }

                .header .admin-info {
                        display: flex;
                        align-items: center;
                }

                .header .admin-info span {
                        color: #000;
                        margin-right: 15px;
                }

                .header .logout {
                        padding: 10px 20px;
                        background: #ff4d4d;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                }

                /* Sidebar Styling */
                .sidebar {
                        position: fixed;
                        top: 70px;
                        left: 0;
                        width: 250px;
                        height: calc(100% - 70px);
                        background: rgba(255, 255, 255, 0.15);
                        backdrop-filter: blur(10px);
                        padding: 30px 20px;
                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                }

                .sidebar nav ul {
                        list-style-type: none;
                }

                .sidebar nav ul li {
                        margin-bottom: 15px;
                }

                .sidebar nav ul li a {
                        color: #000;
                        text-decoration: none;
                        padding: 15px 20px;
                        display: block;
                        transition: background 0.3s;
                }

                .sidebar nav ul li a:hover {
                        background: rgba(255, 255, 255, 0.25);
                        border-radius: 5px;
                }

                /* Main Content Styling */
                .main-content {
                        margin-left: 270px;
                        margin-top: 80px;
                        width: calc(100% - 270px);
                        padding: 20px;
                }

                .container {
                        background: rgba(255, 255, 255, 0.8);
                        border-radius: 10px;
                        padding: 20px;
                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                }

                .page-title {
                        font-size: 28px;
                        font-weight: 600;
                        margin-bottom: 30px;
                }

                .filters {
                        display: flex;
                        justify-content: space-between;
                        margin-bottom: 20px;
                }

                .filters input,
                .filters select {
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        width: 30%;
                }

                .order-stats {
                        display: flex;
                        justify-content: space-between;
                        margin-bottom: 30px;
                }

                .stat-card {
                        background: rgba(255, 255, 255, 0.6);
                        padding: 20px;
                        width: 22%;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        border-radius: 10px;
                        text-align: center;
                }

                .stat-card h3 {
                        margin: 0;
                        font-size: 36px;
                }

                .stat-card p {
                        font-size: 18px;
                        margin: 10px 0 0;
                }

                /* Order List Table */
                .order-list {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 30px;
                        background-color: rgba(255, 255, 255, 0.6);
                        border: 1px solid #ddd;
                        border-radius: 10px;
                        overflow: hidden;
                        /* box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); */
                }

                .order-list th,
                .order-list td {
                        padding: 15px;
                        text-align: left;
                        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                }

                .order-list th {
                        background-color: #333;
                        color: white;
                        font-weight: 600;
                }

                .order-list td {
                        background-color: rgba(255, 255, 255, 0.9);
                }

                .order-list tr:hover {
                        background-color: rgba(0, 0, 0, 0.05);
                }

                .order-list td .action-btn {
                        padding: 5px 10px;
                        border-radius: 4px;
                        border: none;
                        cursor: pointer;
                        color: white;
                }

                .view-btn {
                        background-color: #4CAF50;
                }

                .cancel-btn {
                        background-color: #f44336;
                }
        </style>
</head>

<body>

        <header class="header">
                <div class="logo">Grocery Store</div>
                <div class="admin-info">
                        <span>Admin Name</span>
                        <button class="logout"><a href=".\..\logout.php" class="text-white text-decoration-none" style="color:white; text-decoration:none;"> Logout </a></button>
                </div>
        </header>

        <div class="sidebar">
                <nav>
                        <ul>
                                <li><a href="index.php">Dashboard Overview</a></li>
                                <li><a href="product.php">Product Management</a></li>
                                <li><a href="order.php">Order Management</a></li>
                                <li><a href="user.php">User Management</a></li>
                                <li><a href="report.php">Reports</a></li>
                                <li><a href="settings.php">Settings</a></li>
                        </ul>
                </nav>
        </div>

        <div class="main-content">
                <div class="container">

                        <div class="filters">
                                <input type="text" placeholder="Search Products...">
                                <select>
                                        <option value="">Filter by Category</option>
                                        <option value="fruits">Fruits</option>
                                        <option value="vegetables">Vegetables</option>
                                        <option value="dairy">Dairy</option>
                                </select>
                                <select>
                                        <option value="">Sort by Price</option>
                                        <option value="low-high">Low to High</option>
                                        <option value="high-low">High to Low</option>
                                </select>
                        </div>

                        <h1 class="page-title">Order Management</h1>

                        <div class="order-stats">
                                <div class="stat-card">
                                        <h3>245</h3>
                                        <p>Total Orders</p>
                                </div>
                                <div class="stat-card">
                                        <h3>120</h3>
                                        <p>Processed Orders</p>
                                </div>
                                <div class="stat-card">
                                        <h3>85</h3>
                                        <p>Shipped Orders</p>
                                </div>
                                <div class="stat-card">
                                        <h3>40</h3>
                                        <p>Pending Orders</p>
                                </div>
                        </div>

                        <table class="order-list">
                                <thead>
                                        <tr>
                                                <th>Order ID</th>
                                                <th>Product Name</th>
                                                <th>Customer Name</th>
                                                <th>Quantity</th>
                                                <th>Total Price</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                                <td>1001</td>
                                                <td>Banana</td>
                                                <td>John Doe</td>
                                                <td>5</td>
                                                <td>$5.00</td>
                                                <td><span style="color: green;">Shipped</span></td>
                                                <td>
                                                        <button class="action-btn view-btn">View</button>
                                                        <button class="action-btn cancel-btn">Cancel</button>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>1002</td>
                                                <td>Apples</td>
                                                <td>Jane Doe</td>
                                                <td>2</td>
                                                <td>$3.00</td>
                                                <td><span style="color: orange;">Pending</span></td>
                                                <td>
                                                        <button class="action-btn view-btn">View</button>
                                                        <button class="action-btn cancel-btn">Cancel</button>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>1003</td>
                                                <td>Milk</td>
                                                <td>Emily White</td>
                                                <td>1</td>
                                                <td>$2.00</td>
                                                <td><span style="color: green;">Shipped</span></td>
                                                <td>
                                                        <button class="action-btn view-btn">View</button>
                                                        <button class="action-btn cancel-btn">Cancel</button>
                                                </td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
        </div>

</body>

</html>