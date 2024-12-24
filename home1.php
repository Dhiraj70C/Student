<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <style>
        :root {
            --glow-color: hsl(186 100% 69%);
        }

        body {
            font-family: 'Raleway', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            width: 100%;
            height: 590px;
            justify-content: center;
            position: relative;
        }

        .wrapper {
            position: fixed;
            z-index: 1;
            width: 100%;
            box-shadow: 2px 2px 5px #b6b6b6, -2px -2px 2px #ffffff;
            /* background: linear-gradient(to left, #0f2027, #203a43, #2c0300); */
            background :#112e42;
        }

        nav {
            max-width: 100%;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .logo {
            color: #fff;
            font-size: 44px;
            font-style: oblique;
            font-weight: 800;
        }

        .nav-content {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .links {
            display: flex;
            align-items: center;
            justify-content: space-around;
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
            /* background-color: #75223d; */
            background-color: transparent;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .links a:hover {
            background: #d479a2;
        }

        .menu-icon {
            display: none;
            font-size: 18px;
            color: #fff;
        }

        .search-box {
            position: relative;
            width: 100%;
            max-width: calc(100% - 70px);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .search-box input {
            width: 100%;
            padding: 0 100px 0 15px;
            height: 100%;
            border: none;
            outline: none;
            font-size: 17px;
            color: #545252;
        }

        .text-block {
            position: absolute;
            width: 100%;
            bottom: 80px;
            left: 0;
            font-size: 30px;
            width: 1320px;
            height: 400px;
            color: #fff;
            text-align: center;
            /* background: linear-gradient(to right, #0f2027, #203a43, #2c5364); */
            background: #112e42;
        }

        .glowing-btn {
            width: 30%;
            height: 20%;
            margin-top: 20px;
            padding: 0.35em 1em;
            border: 0.15em solid var(--glow-color);
            border-radius: 0.45em;
            background: none;
            color: var(--glow-color);
            cursor: pointer;
            font-weight: 900;
            font-size: 1.5rem;
            text-shadow: 0 0 0.45em var(--glow-color);
            box-shadow: 0 0 0.5em var(--glow-color);
            animation: border-flicker 2s linear infinite;
        }

        .glowing-btn:hover {
            background-color: var(--glow-color);
            color: rgba(0, 0, 0, 0.8);
            box-shadow: 0 0 2em 0.2em var(--glow-color);
        }

        @keyframes border-flicker {

            0%,
            100% {
                opacity: 1;
            }

            70% {
                opacity: 0.7;
            }
        }

        footer {
            width: 100%;
            background-color: #343434;
            color: #fff;
            text-align: center;
            padding: 50px 0;
        }

        .footer-content {
            width: 100%;
            margin-bottom: 20px;
        }

        .footer-content h3 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .list {
            padding: 0;
            list-style: none;
        }

        .list li {
            margin: 7px 0;
            position: relative;
            padding: 7px 0;
        }

        .list li a {
            color: #fff;
            text-decoration: none;
        }

        .list li::before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #e678ca;
            transition: width 0.5s;
        }

        .list li:hover::before {
            width: 70px;
        }

        .social-icons {
            padding: 0;
        }

        .social-icons li {
            display: inline-block;
            padding: 5px;
        }

        .social-icons i {
            color: #f7a4e7;
            font-size: 25px;
        }

        .bottom-bar {
            background: #000;
            color: #fff;
            padding: 20px;
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
    </style>
</head>

<body>
    <div class="wrapper">
        <nav>
            <label for="show-menu" class="menu-icon"><i></i></label>
            <div class="nav-content">
                <div class="logo"><b><i>SpeakOut</i></b></div>
                <ul class="links">
                    <li><a href="test.php"><b>Login</b></a></li>
                    <li><a href="aboutus.php"><b>About Us</b></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="text-block">
            <h3>SPEAK OUT FOR CHANGE, SILENCE SOLVES NOTHING...</h3>
            <p>RAISE YOUR VOICE FOR TODAY, IMPROVE TOMORROW!!!</p>
            <button class='glowing-btn' onclick="window.location.href='test.php'">Register your
                Complaint</button>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <h3>Contact Us</h3>
            <p>Email: SpeakOut@gmail.com</p>
            <p>Contact: 1234567889</p>
            <p>Address: PRPCEM AMRAVATI</p>
        </div>
        <div class="footer-content">
            <h3>Quick Links</h3>
            <ul class="list">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="registration.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#">Services</a></li>
            </ul>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="bottom-bar">
            <p>&copy;SpeakOut. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>