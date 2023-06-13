<!DOCTYPE html>
<html>
<head>
  <title> Role Management</title>
  <style>
    body {
      background-color: blue;
      font-family: Arial, sans-serif;
    }

    .container {
      width: 300px;
      padding: 30px;
      background-color: #E6E6FA;
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
    <h2>Role Management</h2>
    <form action="create_role" method="post">
      @csrf
    <label for="username">Role Name:</label>
    <input type="text" id="role_name" name="role_name" required>
    <label for="status">Status: </label>
    <label for="status">Active</label>
    <input type="radio" value="Active" id="status1" name="status" required>
    <label for="password">Inactive</label>
    <input type="radio" value="Inactive" id="status2"name="status" required>
    <button type="submit">Login</button></form>
  </div>
</body>
</html>
