<!DOCTYPE html>
<html>
<head>
    <title>Parcel List</title>
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            padding-bottom: 2rem;
            color: #7383db;
        }

        .parcel-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 2rem;
        }

        .parcel {
            background-color: #e2e2e2;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .parcel h2 {
            margin-top: 0;
        }

        .parcel p {
            margin-bottom: 5px;
        }

        .parcel .status {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Parcels Sent</h1>

    <div class="parcel-list">
        <div class="parcel">
            <h2>Parcel ID: ABC123</h2>
            <p><strong>Receiver:</strong> John Doe</p>
            <p><strong>Status:</strong> <span class="status">In Transit</span></p>
        </div>

        <div class="parcel">
            <h2>Parcel ID: XYZ789</h2>
            <p><strong>Receiver:</strong> Jane Smith</p>
            <p><strong>Status:</strong> <span class="status">Delivered</span></p>
        </div>

        <div class="parcel">
            <h2>Parcel ID: DEF456</h2>
            <p><strong>Receiver:</strong> Sarah Johnson</p>
            <p><strong>Status:</strong> <span class="status">Pending</span></p>
        </div>

        <!-- Add more parcel divs as needed -->

    </div>
</body>
</html>