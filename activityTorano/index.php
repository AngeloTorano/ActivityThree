<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT 2205 Student Information System</title>
    <style>
        body {
            font-family: monospace;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: block;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-size: 18px;
        }
        .container {
            text-align: left;
            background-color: #cce6ff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: monospace;
        }
        h1 {
            color: #333;
            font-family: monospace; 
            text-align: center;
        }
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            font-family: monospace;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to IT 2205 Student Information System</h1>
    <a href="create.php" class="btn">Add Student Info</a>

    <table>
        <thead>
            <tr>
                <th>StudentID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Contact No.</th>
                <th>Gender</th>
                <th>Guardian Name</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM IT2205";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['studentID']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['age']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>{$row['contactNo']}</td>";
                echo "<td>{$row['gender']}</td>";
                echo "<td>{$row['guardianName']}</td>";
                echo "<td><a href='read.php?id={$row['studentID']}' class='text'>View</a></td>";
                echo "<td><a href='update.php?id={$row['studentID']}' class='text'>Edit</a></td>";
                echo "<td><a href='delete.php?id={$row['studentID']}' class='text' onclick=\"return confirm('Are you sure you want to delete this student?')\">Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
