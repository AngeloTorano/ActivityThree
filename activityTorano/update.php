<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <style>
        body {
            font-family: monospace;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-size: 18px;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        select {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 2px;
            width: 95%;
        }
        select {
            width: 100%;
        }
        .submit-btn{
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 15px 20px; 
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            width: 100%;
            box-sizing: border-box;
            margin-top: 10px; 
        }
        .back-link {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px; /* Adjusted padding */
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            width: 50%;
            box-sizing: border-box; 
            margin-top: 10px; 
            text-align: center;
        }

        .submit-btn:hover,
        .back-link:hover {
            background-color: #0056b3;
        }

    </style>

</head>
<body>
    <div class="container">
        <h1>Update Student Information</h1>
        <?php
        if(isset($_GET['id'])) {
            $studentID = $_GET['id'];

            // Fetch student information based on the provided ID
            $query = "SELECT * FROM IT2205 WHERE studentID='$studentID'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);

            if($row) {
                echo "<form action='' method='post'>";
                echo "<label for='studentID'>Student ID:</label>";
                echo "<input type='text' name='studentID' value='{$row['studentID']}' readonly>";
                echo "<label for='name'>Name:</label>";
                echo "<input type='text' name='name' value='{$row['name']}' required>";
                echo "<label for='age'>Age:</label>";
                echo "<input type='number' name='age' value='{$row['age']}' required>";
                echo "<label for='address'>Address:</label>";
                echo "<input type='text' name='address' value='{$row['address']}' required>";
                echo "<label for='contactNo'>Contact No.:</label>";
                echo "<input type='text' name='contactNo' value='{$row['contactNo']}' required>";
                echo "<label for='gender'>Gender:</label>";
                echo "<select name='gender' required>";
                echo "<option value='Male' " . ($row['gender'] == 'Male' ? 'selected' : '') . ">Male</option>";
                echo "<option value='Female' " . ($row['gender'] == 'Female' ? 'selected' : '') . ">Female</option>";
                echo "<option value='Other' " . ($row['gender'] == 'Other' ? 'selected' : '') . ">Other</option>";
                echo "</select>";
                echo "<label for='guardianName'>Guardian Name:</label>";
                echo "<input type='text' name='guardianName' value='{$row['guardianName']}' required>";
                echo "<input type='submit' name='update' value='Update' class='submit-btn'>";
                echo "</form>";

                if(isset($_POST['update'])) {
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $address = $_POST['address'];
                    $contactNo = $_POST['contactNo'];
                    $gender = $_POST['gender'];
                    $guardianName = $_POST['guardianName'];

                    $query = "UPDATE IT2205 SET name='$name', age='$age', address='$address', contactNo='$contactNo', gender='$gender', guardianName='$guardianName' WHERE studentID='$studentID'";
                    $result = mysqli_query($connection, $query);

                    if($result) {
                        echo "Information updated successfully.";
                    } else {
                        echo "Error: " . mysqli_error($connection);
                    }
                }
            } else {
                echo "Student not found.";
            }
        } else {
            echo "No student ID provided.";
        }
        ?>

        <a href="index.php" class="back-link">Back to Home</a>
    </div>
</body>
</html>
