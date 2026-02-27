<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>

   <link rel="stylesheet" href="style.css">
   <script src="script.js"></script>
</head>

<body class="login">

<div class="login-container">
    <h1>LOGIN</h1>
<form method="post" action="login_action.php">
    <input type="text" placeholder="Enter Roll Number" name="roll_number" required><br>
   <input type="password" id="password" placeholder="Enter Password" name="password" required><br>
    <div class="show-password">
    <input type="checkbox" onclick="togglePassword()">
    <label for="showPass">Show me</label>
</div>


    <button>LOGIN</button>

    <p>Don't have an account? <a href="index.php">Register</a></p>
</div>

    
</form>

</body>
</html>
