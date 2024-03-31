<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Information</title>
<style>
  /* CSS styles for the page */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  .container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
  }
  footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
  }
</style>
</head>
<body>
<a href="index.php">Registered user</a>

<div class="container">
  <h1>Contact Information</h1>
  <p>For inquiries or assistance, please don't hesitate to get in touch with us. You can reach our customer support team via email at support@examplecompany.com or by phone at +1 (555) 123-4567. Our office is located at 123 Main Street, Cityville, State, Postal Code. Feel free to visit us during our office hours, Monday to Friday from 9:00 AM to 5:00 PM. We look forward to hearing from you!
</p>
</div>
<footer>
  <div class="container">
    <p>Email: <?php echo getEmail(); ?></p>
    <p>Phone: <?php echo getPhone(); ?></p>
    <p>Address: <?php echo getAddress(); ?></p>
  </div>
</footer>

<?php
// PHP functions to get contact information
function getEmail() {
    return "example@example.com";
}

function getPhone() {
    return "+1 123-456-7890";
}

function getAddress() {
    return "123 Main Street, City, Country";
}
?>

</body>
</html>
