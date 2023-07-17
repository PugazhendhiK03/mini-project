<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            
            font-family: 'Poppins', sans-serif;
        }
        
        table th, table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        table th {
            background-color: #f2f2f2;
        }
        
        h1 {
            text-align: center;
            color: #7383db;
            padding-bottom: 1rem;
        }
    </style>
</head>
<body>
    <h1>User Data</h1>
    <?php
    // Create a connection
    $con = mysqli_connect("localhost","root","","courier_db");

    // Check the connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Retrieve user data from the database
    $select = "SELECT * FROM user_account";
    $result = $con->query($select);

    // Check if there are any records
    if ($result->num_rows > 0) {
        // Display the data for each user
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["role"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No users found in the database.";
    }

    // Close the connection
    $con->close();
    ?>
</body>
</html>