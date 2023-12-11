<?php

// Fungsi validasi
function validateLogin($username, $password) {
    if (empty($username) || empty($password)) {
        return "Username dan password harus diisi.";
    } else {
        $validUsername = "user1";
        $validPassword = "password123";

        if ($username === $validUsername && $password === $validPassword) {
            return "Login berhasil!";
        } else {
            return "Username atau password salah.";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    // Validasi login
    $result = validateLogin($inputUsername, $inputPassword);
    echo $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        p {   
            text-align: center;
        }

        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar li {
            margin-right: 20px;
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .menu-toggle {
            cursor: pointer;
            display: none;
            font-size: 20px;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        .login-form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-form button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            width: 100%;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                display: none;
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
            }

            .navbar.show {
                display: flex;
            }

            .navbar li {
                margin: 10px 0;
            }

            .menu-toggle {
                display: block;
            }
        }
    </style>
    <title>Form Login</title>
</head>
<body>

    <header>
        <div class="logo">Yazid Mufid</div>
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="menu-toggle">&#9776; Menu</div>
    </header>

    <main>
    <p>Selamat datang, silahkan login dulu.</p>

        <!-- Formulir Login -->
        <div class="login-form">
            <h2>Login Form</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Yazid Mufid</p>
    </footer>

    <script>
        // JavaScript function to toggle the navigation menu
        function toggleNavbar() {
            var navbar = document.querySelector('.navbar');
            navbar.classList.toggle('show');
        }
    </script>

</body>
</html>
