<?php
// Set the HTTP response code
http_response_code(500); // You can change this to 404, 403, etc.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>500 - Internal Server Error</title>
  <style>
    body {
      background-color: #f2f2f2;
      color: #333;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      text-align: center;
      padding: 100px;
    }
    h1 {
      font-size: 60px;
      color: #e74c3c;
    }
    h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      color: #777;
    }
    a {
      display: inline-block;
      margin-top: 30px;
      padding: 10px 20px;
      background-color: #3498db;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }
    a:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <h1>500</h1>
  <h2>Internal Server Error</h2>
  <p>Something went wrong on our end. Please try again later.</p>
  <a href="/">Return to Home</a>
</body>
</html>
