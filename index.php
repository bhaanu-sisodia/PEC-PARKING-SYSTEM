<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login | BMI Calculator & Analysis</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
            overflow: hidden;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            color: #007BFF;
            font-size: 28px;
            margin: 0;
        }

        .container {
            width: 350px;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #007BFF;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error {
            color: red;
            font-size: 0.9em;
            margin-top: 10px;
            text-align: center;
        }

        button {
            width: 100%;
            background: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <header>
        <h1>BMI Calculator & Analysis</h1>
    </header>

    <div class="container">
        <h2>User Login</h2>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="error"><?= htmlspecialchars($_SESSION['error']); unset($_SESSION['error']); ?></div>
        <?php endif; ?>

        <form action="login_check.php" method="post">
            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</div>

</body>
</html>
