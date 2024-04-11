<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
        header {
           background-color: #333;
           color: #fff;
           padding: 20px;
           text-align: center;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Shoppers stop</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="prodcat.html">Products</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <h2>Login</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit" name="login">Login</button>
                <br>
                Don't have and account?
                <a href="signup.php">Sign-Up</a>
            </form>
        </div>
    </main>
    <footer>
        <p>Welcome-Store</p>
    </footer>

<?php
session_start();

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "usersinfo";

// Connect to MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if(isset($_POST['login'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query database for user with matching username
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    // Check if user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Authentication successful, create session
            $_SESSION['username'] = $username;
            echo "Login successful";
            // Redirect to dashboard or home page
            header("location: index.html");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
    
    // Close database connection
    $conn->close();
}
?>

</body>
</html>
