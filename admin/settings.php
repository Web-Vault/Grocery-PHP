<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Settings</title>

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
                        height: 100vh;
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

                .settings-container {
                        background: rgba(255, 255, 255, 0.15);
                        backdrop-filter: blur(15px);
                        padding: 30px;
                        border-radius: 10px;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                        color: #000;
                }

                h2 {
                        margin-bottom: 20px;
                        font-size: 1.8em;
                }

                .admin-details,
                .change-password {
                        margin-bottom: 40px;
                }

                .admin-details table {
                        width: 100%;
                        margin-bottom: 20px;
                        border-collapse: collapse;
                }

                .admin-details table td {
                        padding: 15px;
                        background: rgba(255, 255, 255, 0.15);
                        backdrop-filter: blur(15px);
                        border-radius: 5px;
                        color: #000;
                }

                label {
                        display: block;
                        margin-bottom: 10px;
                        font-weight: 600;
                }

                input[type="text"],
                input[type="email"],
                input[type="password"] {
                        width: 100%;
                        padding: 10px;
                        border: none;
                        border-radius: 8px;
                        background: rgba(255, 255, 255, 0.15);
                        backdrop-filter: blur(15px);
                        color: #000;
                        margin-bottom: 20px;
                        outline: none;
                        /* box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); */
                }

                input[type="text"]:focus,
                input[type="email"]:focus,
                input[type="password"]:focus {
                        border: 2px solid black;
                }

                button {
                        padding: 10px 20px;
                        background: #28a745;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                        transition: background 0.3s;
                }

                button:hover {
                        background: #218838;
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
                        <div class="settings-container">
                                <h2>Admin Settings</h2>

                                <div class="admin-details">
                                        <h3>Admin Details</h3>
                                        <table>
                                                <tr>
                                                        <td><strong>Admin Name:</strong></td>
                                                        <td>John Doe</td>
                                                </tr>
                                                <tr>
                                                        <td><strong>Email:</strong></td>
                                                        <td>admin@example.com</td>
                                                </tr>
                                        </table>
                                </div>

                                <div class="change-password">
                                        <h3>Change Password</h3>
                                        <form action="change_password.php" method="POST">
                                                <label for="current_password">Current Password</label>
                                                <input type="password" id="current_password" name="current_password"
                                                        placeholder="Current Password" required>

                                                <label for="new_password">New Password</label>
                                                <input type="password" id="new_password" name="new_password"
                                                        placeholder="New Password" required>

                                                <label for="confirm_password">Confirm New Password</label>
                                                <input type="password" id="confirm_password" name="confirm_password"
                                                        placeholder="Confirm New Password" required>

                                                <button type="submit">Update Password</button>
                                        </form>
                                </div>
                        </div>
                </main>
        </div>
</body>

</html>