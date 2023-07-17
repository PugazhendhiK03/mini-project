<!DOCTYPE html>
<html>
<head>
    <title>My Agents</title>
    
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
        }
    </style>
</head>
<body>
    <h1>My Agents</h1>
    <?php
    // Create a connection
    $con = mysqli_connect("localhost", "root", "", "courier_db");

    // Check the connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Retrieve user's parcel data from the database
    $user_name = "user"; // Replace with the logged-in user's name
    $select = "SELECT * FROM parcels_list WHERE user_name = '$user_name'";
    $result = $con->query($select);

    // Check if there are any records
    if ($result->num_rows > 0) {
        // Display the data for each parcel
        echo "<table>";
        echo "<tr><th>Parcel Id</th><th>User Name</th><th>Staff</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["parcel_id"] . "</td>";
            echo "<td>" . $row["user_name"] . "</td>";
            echo "<td>" . $row["staff_deliver"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No agent found for the user.";
    }

    // Close the connection
    $con->close();
    ?>
</body>
</html>