<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Report Management</title>
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

                .report-section h2 {
                        font-size: 26px;
                        font-weight: 600;
                        margin-bottom: 30px;
                }

                .report-list {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 30px;
                        background-color: rgba(255, 255, 255, 0.6);
                        border: 1px solid #ddd;
                        border-radius: 10px;
                        overflow: hidden;
                }

                .report-list th,
                .report-list td {
                        padding: 15px;
                        text-align: left;
                        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                }

                .report-list th {
                        background-color: #333;
                        color: white;
                }

                .report-list td {
                        background-color: rgba(255, 255, 255, 0.9);
                }

                .report-list tr:hover {
                        background-color: rgba(0, 0, 0, 0.05);
                }

                .rating-stars {
                        color: #FFD700;
                }

                .review-text {
                        font-size: 14px;
                        color: #555;
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

                        <h1 class="page-title">Product Report Management (Ratings & Reviews)</h1>

                        <table class="report-list">
                                <thead>
                                        <tr>
                                                <th>Review ID</th>
                                                <th>Product Name</th>
                                                <th>Customer Name</th>
                                                <th>Rating</th>
                                                <th>Review</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                                <td>#R001</td>
                                                <td>Organic Apples</td>
                                                <td>John Doe</td>
                                                <td class="rating-stars">★★★★☆</td>
                                                <td class="review-text">"Great quality and fresh taste! Would buy
                                                        again."</td>
                                        </tr>
                                        <tr>
                                                <td>#R002</td>
                                                <td>Organic Bananas</td>
                                                <td>Jane Smith</td>
                                                <td class="rating-stars">★★★☆☆</td>
                                                <td class="review-text">"The bananas were okay but could have been
                                                        fresher."</td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
        </div>

</body>

</html>