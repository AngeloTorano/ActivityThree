<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        body {
            font-family: monospace;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            font-size: 18px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .info {
            margin-bottom: 10px;
        }

        .info label {
            font-weight: bold;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-align: center;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-link:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Student Information</h1>
    <div class="container">
        <?php
        if (isset($_GET['id'])) {
            $studentID = $_GET['id'];

            $query = "SELECT * FROM IT2205 WHERE studentID = '$studentID'";
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        ?>
                <table>
                    <tr>
                        <th>Field</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>Student ID</td>
                        <td><?php echo $row['studentID']; ?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?php echo $row['name']; ?></td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><?php echo $row['age']; ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?php echo $row['address']; ?></td>
                    </tr>
                    <tr>
                        <td>Contact No.</td>
                        <td><?php echo $row['contactNo']; ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?php echo $row['gender']; ?></td>
                    </tr>
                    <tr>
                        <td>Guardian Name</td>
                        <td><?php echo $row['guardianName']; ?></td>
                    </tr>
                </table>
        <?php
            } else {
                echo "<p>No matching student found.</p>";
            }
        }
        ?>
    </div>
    <a href="index.php" class="back-link">Back to Home</a>
</body>
</html>
