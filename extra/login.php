<!DOCTYPE html>
<html lang="en">

<head>
    <title> Login </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(#1845ad, #23a2f6);
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(to right, #ff512f, #f09819);
            right: -30px;
            bottom: -80px;
        }

        form {
            margin-top: 60px;
            height: 420px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 30px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }

        .forgot-password a {
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .wrapper {
            position: fixed;
            z-index: 1;
            width: 100%;
            box-shadow: 2px 2px 5px #b6b6b6, -2px -2px 2px #ffffff;
            background: linear-gradient(to left, #0f2027, #203a43, #2c0300);
        }

        .menu-icon {
            display: none;
            font-size: 18px;
            color: #fff;
        }

        .nav-content {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px 0 10px;
        }

        @media (max-width: 900px) {
            .menu-icon {
                display: block;
            }

            .links {
                flex-direction: column;
                position: fixed;
                background: #fff;
                top: 70px;
                left: -100%;
                height: 100%;
                width: 100%;
                overflow-y: auto;
                transition: left 0.3s;
            }

            .links a {
                color: #fff;
                padding: 8px 18px;
                background: none;
            }

            #show-menu:checked~.nav-content .links {
                left: 0;
            }
        }

        .logo {
            color: #fff;
            font-size: 28px;
            font-style: oblique;
        }

        .links {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 40%;
            gap: 10px;
            list-style: none;
            margin-left: 30px;
        }

        .links li {
            line-height: 70px;
        }

        .links a {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            padding: 7px 14px;
            border-radius: 5px;
            background-color: #75223d;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .links a:hover {
            background: #d479a2;
        }
    </style>
    <script>
        // function handleLogin() {
        //     // Assuming basic validation here for the example
        //     const username = document.getElementById("username").value;
        //     const password = document.getElementById("password").value;

        //     if (username && password) { // Replace with actual validation if needed
        //         window.location.href = 'complaint.php'; // Redirect to complaint form page
        //     } else {
        //         alert("Please enter both username and password.");
        //     }
        // }
    </script>
</head>

<body>
    <div class="wrapper">
        <nav>
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="nav-content">
                <div class="logo"><b><i>SpeakOut</i></b></div>
                <ul class="links">
                    <li><a href="home1.php"><b>Home</b></a></li>
                    <li><a href="registration.php"><b>Register</b></a></li>
                    <li><a href="#"><b>About Us</b></a></li>
                    <!-- <li><a href="registration.php"><b>Register</b></a></li> -->
                </ul>
            </div>
        </nav>
    </div>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST">
        <h3>Login Here</h3>
        <input type="text" placeholder="Enter your Username" name="uName" id="username" required>
        <input type="password" placeholder="Enter Password" name="uPass" id="password" required>
        <button type="submit" name="login">Log In</button>
        <div class="forgot-password">
            <a href="forget.php">Forgot Password?</a>
        </div>
    </form>
    <?php
    session_start();

    $connection = mysqli_connect("localhost", "root", "", "speakout");
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['login'])) {
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Uname = mysqli_real_escape_string($connection, $_POST['uName']);
        $pass = $_POST['uPass'];


        $select = "SELECT * FROM registereduser WHERE UserName='$Uname'";

        $result = mysqli_query($connection, $select);


        if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                $db_username = $row['UserName'];
                $db_password = $row['Pass'];

                if (password_verify($pass, $db_password)) {
                    $_SESSION['islogin'] = 'Yes';
                    $_SESSION['username'] = $db_username;
                    print_r($row);

                    // header("Location: home1.php");
                    exit();
                } else {
                    echo "<script>alert('Invalid username or password');</script>";
                }
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
        mysqli_close($connection);
    }
    ?>
</body>
</html>