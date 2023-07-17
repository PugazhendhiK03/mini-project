<!DOCTYPE html>
<html>
<head>
  <title>Admin Account Details</title>
  <!-- google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    /* CSS Styles */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #7383db;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .btn {
      display: inline-block;
      padding: 8px 12px;
      background-color: #7383db;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
    }

    .btn:hover {
      background-color: #60b364;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Admin Account Details</h2>
    <form>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" value="admin" disabled>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" value="admin@example.com" disabled>
      </div>
      <div class="form-group">
        <label for="password">Current Password:</label>
        <input type="password" id="password" value="password" disabled>
      </div>
      <div class="form-group">
        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword">
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm New Password:</label>
        <input type="password" id="confirmPassword">
      </div>
      <div class="form-group">
        <input type="submit" class="btn" value="Change Password">
      </div>
    </form>
  </div>
</body>
</html>