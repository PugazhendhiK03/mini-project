<!DOCTYPE html>
<html>
<head>
  <!-- google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
/* CSS for the body element */
body {
  background-image: url(assets/image/loginBg.webp);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  font-family: 'Poppins', sans-serif;
}

/* CSS for the container */
.container {
  width: 300px;
  margin: 100px auto;
  padding: 4rem;
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* CSS for the parcel ID input */
#parcel-input {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  box-sizing: border-box;
}

/* CSS for the submit button */
#submit-button {
  width: 100%;
  padding: 10px;
  background-color: #7383db;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
</style>
</head>
<body>

<!-- Container -->
<div class="container">
  <h2>Track Your Parcel</h2>
  <input type="text" id="parcel-input" placeholder="Enter parcel ID">
  <button id="submit-button">Submit</button>
</div>

</body>
</html>