<?php require('db.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Management</title>
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
                                url('https://source.unsplash.com/random/1920x1080?people') no-repeat center center fixed;
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
                        display: flex;
                        justify-content: center;
                        align-items: flex-start;
                        flex-direction: column;
                }

                .container {
                        width: 100%;
                        background: rgba(255, 255, 255, 0.1);
                        border-radius: 20px;
                        backdrop-filter: blur(10px);
                        padding: 20px;
                        color: #000;
                }

                h1 {
                        text-align: center;
                        font-size: 32px;
                        font-weight: 600;
                        margin-bottom: 20px;
                }

                .btn {
                        display: inline-block;
                        background-color: #4CAF50;
                        color: white;
                        padding: 10px 20px;
                        border-radius: 5px;
                        border: none;
                        cursor: pointer;
                        transition: background-color 0.3s;
                }

                .btn:hover {
                        background-color: #45a049;
                }

                .user-management {
                        display: flex;
                        justify-content: space-between;
                        margin-bottom: 20px;
                }

                .add-user {
                        width: 35%;
                }

                .user-list {
                        width: 59%;
                }

                .add-user form,
                .user-list table {
                        width: 100%;
                        background: rgba(255, 255, 255, 0.15);
                        padding: 20px;
                        border-radius: 15px;
                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                        backdrop-filter: blur(8px);
                }

                .add-user input,
                .add-user select,
                .add-user textarea {
                        width: 100%;
                        padding: 10px;
                        margin: 10px 0;
                        border-radius: 10px;
                        border: none;
                        background: rgba(255, 255, 255, 0.2);
                        color: #000;
                        font-size: 14px;
                }

                table {
                        width: 100%;
                        border-collapse: collapse;
                }

                table th,
                table td {
                        padding: 15px;
                        text-align: center;
                        background: rgba(255, 255, 255, 0.1);
                        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                }

                table th {
                        font-weight: 600;
                }

                .actions i {
                        margin: 0 5px;
                        cursor: pointer;
                }

                .actions i:hover {
                        color: #4CAF50;
                }

                /* Glassmorphic Search & Filters */
                .filters {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        margin-bottom: 20px;
                }

                .filters input,
                .filters select {
                        padding: 10px;
                        border-radius: 10px;
                        border: none;
                        background: rgba(255, 255, 255, 0.2);
                        color: #000;
                        width: 32%;
                }
        </style>
</head>

<body>

        <header class="header">
                <div class="logo">Grocery Store</div>
                <div class="admin-info">
                        <span>Admin Name</span>
                        <button class="logout"><a href=".\..\logout.php" class="text-white text-decoration-none"
                                        style="color:white; text-decoration:none;"> Logout </a></button>
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
                        <h1>User Management</h1>

                        <div class="filters">
                                <input type="text" placeholder="Search Users...">
                                <select>
                                        <option value="">Filter by Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="customer">Customer</option>
                                </select>
                                <select>
                                        <option value="">Sort by Name</option>
                                        <option value="a-z">A to Z</option>
                                        <option value="z-a">Z to A</option>
                                </select>
                        </div>

                        <div class="user-management">
                                <div class="add-user">
                                        <h2>Add New User</h2>
                                        <form action="" method="post">
                                                <input type="text" placeholder="User Name" name="username" required>
                                                <input type="email" placeholder="User Email" name="email" required>
                                                <input type="password" placeholder="User Password" name="password"
                                                        required>
                                                <input type="text" placeholder="Phone Number" name="mobile" required>
                                                <button class="btn" type="submit">Add User</button>
                                        </form>
                                </div>

                                <?php


                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        $username = $_POST['username'];
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];
                                        $mobile = $_POST['mobile'];

                                        $sql = "INSERT INTO `users` (`User_name`, `User_mobile`, `User_email`, `User_password`) VALUES ('$username', $mobile, '$email', '$password')";

                                        $result = $conn->query($sql);


                                        if ($result) {
                                                ?>

                                                <script>
                                                        window.location.href = "user.php";
                                                </script>

                                                <?php
                                        } else {
                                                ?>

                                                <script>
                                                        alert('not added');
                                                </script>

                                                <?php
                                        }
                                }


                                // 
                                

                                $sql = "SELECT * FROM users";
                                $result = $conn->query($sql);

                                ?>

                                <div class="user-list">
                                        <h2>User List</h2>
                                        <div class="table-container">
                                                <table>
                                                        <thead>
                                                                <tr>
                                                                        <th>User ID</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Mobile</th>
                                                                        <th>Actions</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <?php
                                                                if ($result->num_rows > 0) {
                                                                        while ($row = $result->fetch_assoc()) {
                                                                                echo "<tr>";
                                                                                echo "<td>" . $row['user_id'] . "</td>";
                                                                                echo "<td>" . $row['User_name'] . "</td>";
                                                                                echo "<td>" . $row['User_email'] . "</td>";
                                                                                echo "<td>" . $row['User_mobile'] . "</td>";
                                                                                echo '<td class="actions">
                                <i class="fas fa-edit"></i>
                                <a class="text-secondary text-decoration-none" href="delete_user.php?uid='.$row['user_id'].'"><i class="fas fa-trash-alt"></i></a>
                              </td>';
                                                                                echo "</tr>";
                                                                        }
                                                                } else {
                                                                        echo "<tr><td colspan='5'>No users found</td></tr>";
                                                                }
                                                                ?>
                                                        </tbody>
                                                </table>
                                        </div>
                                </div>

                        </div>
                </div>
        </div>

</body>

</html>