<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
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
        <h1>Add New Student Information</h1>
        <form action="" method="post">
            <label for="studentID">Student ID:</label>
            <input type="text" name="studentID" required>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            <label for="age">Age:</label>
            <input type="number" name="age" required>
            <label for="address">Address:</label>
            <input type="text" name="address" required>
            <label for="contactNo">Contact No.:</label>
            <input type="text" name="contactNo" required>
            <label for="gender">Gender:</label>
            <select name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <label for="guardianName">Guardian Name:</label>
            <input type="text" name="guardianName" required>
            <input type="submit" name="submit" value="Submit" class="submit-btn">
        </form>

        <?php 
        if(isset($_POST['submit'])) {
            

            $studentID = $_POST['studentID'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $address = $_POST['address'];
            $contactNo = $_POST['contactNo'];
            $gender = $_POST['gender'];
            $guardianName = $_POST['guardianName'];

            $query = "INSERT INTO IT2205 (studentID, name, age, address, contactNo, gender, guardianName) VALUES ('$studentID', '$name', '$age', '$address', '$contactNo', '$gender', '$guardianName')";
            $result = mysqli_query($connection, $query);

            if($result) {
                echo "Student Information created successfully.";
            } else {
                echo "Error: " . mysqli_error($connection);
            }
        }
        ?>

        <a href="index.php" class="back-link">Back to Home</a>
    </div>
</body>
</html>
