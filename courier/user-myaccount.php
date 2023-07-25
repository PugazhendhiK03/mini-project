<!DOCTYPE html>
<html>
<head>
  <title>Account Details</title>
  <!-- google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }
    h1 {
      text-align: center;
      color: #7383db;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #7383db;
      color: #fff;
      text-decoration: none;
      border: none;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #60b364;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Account Details</h1>
    <form>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" value="johndoe" disabled>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" value="johndoe@example.com" disabled>
      </div>
      <div class="form-group">
        <label for="currentPassword">Current Password</label>
        <input type="password" id="currentPassword">
      </div>
      <div class="form-group">
        <label for="newPassword">New Password</label>
        <input type="password" id="newPassword">
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm New Password</label>
        <input type="password" id="confirmPassword">
      </div>
      <button type="submit" class="btn">Change Password</button>
    </form>
  </div>
</body>
</html>