<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>

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
                        background: url('background.jpg') no-repeat center center fixed;
                        background-size: cover;
                }

                .dashboard-container {
                        display: flex;
                        /* height: 100vh; */
                        overflow: hidden;
                }

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

                .main-content {
                        margin-left: 270px;
                        padding: 30px;
                        flex-grow: 1;
                        overflow-y: auto;
                        padding-top: 100px;
                }

                .overview-cards {
                        display: flex;
                        justify-content: space-between;
                        flex-wrap: wrap;
                        gap: 20px;
                        margin-bottom: 20px;
                }

                .card {
                        background: rgba(255, 255, 255, 0.15);
                        backdrop-filter: blur(15px);
                        padding: 20px;
                        border-radius: 10px;
                        flex: 1;
                        min-width: 150px;
                        color: #000;
                        font-size: 1.2em;
                        text-align: center;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                }

                .charts {
                        display: flex;
                        gap: 20px;
                        margin-bottom: 20px;
                }

                .chart {
                        background: rgba(255, 255, 255, 0.15);
                        backdrop-filter: blur(15px);
                        padding: 20px;
                        border-radius: 10px;
                        flex: 1;
                        height: 200px;
                        color: #000;
                        text-align: center;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                }

                .recent-activity,
                .quick-actions,
                .notifications {
                        background: rgba(255, 255, 255, 0.15);
                        backdrop-filter: blur(15px);
                        padding: 20px;
                        border-radius: 10px;
                        margin-bottom: 20px;
                        color: #000;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                }

                h3 {
                        margin-bottom: 15px;
                }

                button {
                        padding: 10px 20px;
                        background: #28a745;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                        margin-right: 10px;
                        transition: background 0.3s;
                }

                button:hover {
                        background: #218838;
                }

                ul {
                        list-style-type: none;
                }

                ul li {
                        margin-bottom: 10px;
                }
        </style>

</head>

<body>
        <div class="dashboard-container">
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

                <main class="main-content">
                        <div class="overview-cards">
                                <div class="card">Total Sales: $5000</div>
                                <div class="card">Total Orders: 120</div>
                                <div class="card">Total Users: 300</div>
                                <div class="card">Total Products: 50</div>
                                <div class="card">Current Stock: 20 items</div>
                        </div>

                        <div class="charts">
                                <div class="chart">Sales Trends Chart</div>
                                <div class="chart">Order Trends Chart</div>
                                <div class="chart">User Growth Chart</div>
                        </div>

                        <div class="recent-activity">
                                <h3>Recent Activity</h3>
                                <ul>
                                        <li>New Order: #1234 (Pending)</li>
                                        <li>New User: John Doe</li>
                                        <li>Updated Product: Apple</li>
                                </ul>
                        </div>

                        <div class="quick-actions">
                                <button>Add New Product</button>
                                <button>View All Orders</button>
                                <button>Manage Users</button>
                        </div>

                        <div class="notifications">
                                <h3>Alerts</h3>
                                <ul>
                                        <li>Low Stock Alert: Apples</li>
                                        <li>Pending Order: #1234</li>
                                </ul>
                        </div>
                </main>
        </div>
</body>

</html>