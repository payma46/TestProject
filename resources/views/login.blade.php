<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }

    .container {
      width: 300px;
      padding: 30px;
      background-color: #C8A2C8;
      margin: 0 auto;
      margin-top: 100px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    label {
      font-weight: bold;
    }

    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 4px;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 4px;
      font-weight: bold;
    }

    button:hover {
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login Form</h2>
    <label for="username">Username</label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <label for="password">Password</label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit">Login</button>
  </div>
</body>
</html>
