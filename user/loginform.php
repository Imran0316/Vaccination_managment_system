<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8fb; /* Light blue medical theme */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #ffffff; /* White clean card */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            color: #0077b6; /* Vaccine-related blue */
            margin-bottom: 20px;
            font-size: 24px;
        }

        .login-container input {
            width: 100%;
            padding: 10px 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container input:focus {
            border-color: #0077b6; /* Highlight on focus */
            outline: none;
        }

        .login-container button {
            width: 100%;
            padding: 10px 15px;
            background-color: #0077b6;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: #005f89; /* Slightly darker blue */
        }

        .login-container p {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Vaccine Login</h2>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p>Stay safe, stay vaccinated.</p> <a href="signupform.php" class="register-link">Register</a>

    </div>
</body>
</html>
