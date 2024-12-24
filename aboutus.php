<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container {
            position: relative;
            font-family: Arial;
        }

        .text-block {
            position: absolute;
            bottom: 80px;
            margin-left: 20%;
            background-color: rgba(0, 0, 0, 0.7);
            ;
            color: white;
            left: 0%;
            height: 400px;
            width: 720px;
            margin-top: 150px;


        }

        @import url("https://fonts.googleapis.com/css?family=Raleway");

        :root {
            --glow-color: hsl(186 100% 69%);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }



        @import url("https://fonts.googleapis.com/css?family=Raleway");

        :root {
            --glow-color: hsl(186 100% 69%);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }





        .glowing-btn {
            position: relative;
            color: var(--glow-color);
            cursor: pointer;
            padding: 0.35em 1em;
            border: 0.15em solid var(--glow-color);
            border-radius: 0.45em;
            background: none;
            perspective: 2em;
            font-family: "Raleway", sans-serif;
            font-size: 1em;
            font-weight: 900;
            letter-spacing: 0em;


            -webkit-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
                0px 0px 0.5em 0px var(--glow-color);
            -moz-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
                0px 0px 0.5em 0px var(--glow-color);
            box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
                0px 0px 0.5em 0px var(--glow-color);
            animation: border-flicker 2s linear infinite;
        }

        .glowing-txt {
            float: left;
            margin-right: -0.8em;
            -webkit-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
                0 0 0.45em var(--glow-color);
            -moz-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
                0 0 0.45em var(--glow-color);
            text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em var(--glow-color);
            animation: text-flicker 3s linear infinite;
        }

        .faulty-letter {
            opacity: 0.5;
            animation: faulty-flicker 2s linear infinite;
        }

        .glowing-btn::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0.7;
            filter: blur(1em);
            transform: translateY(120%) rotateX(95deg) scale(1, 0.35);
            background: var(--glow-color);
            pointer-events: none;
        }

        .glowing-btn::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0;
            z-index: -1;
            background-color: var(--glow-color);
            box-shadow: 0 0 2em 0.2em var(--glow-color);
            transition: opacity 100ms linear;
        }

        .glowing-btn:hover {
            color: rgba(0, 0, 0, 0.8);
            text-shadow: none;
            animation: none;
        }

        .glowing-btn:hover .glowing-txt {
            animation: none;
        }

        .glowing-btn:hover .faulty-letter {
            animation: none;
            text-shadow: none;
            opacity: 1;
        }

        .glowing-btn:hover:before {
            filter: blur(1.5em);
            opacity: 1;
        }

        .glowing-btn:hover:after {
            opacity: 1;
        }

        @keyframes faulty-flicker {
            0% {
                opacity: 0.1;
            }

            2% {
                opacity: 0.1;
            }

            4% {
                opacity: 0.5;
            }

            19% {
                opacity: 0.5;
            }

            21% {
                opacity: 0.1;
            }

            23% {
                opacity: 1;
            }

            80% {
                opacity: 0.5;
            }

            83% {
                opacity: 0.4;
            }

            87% {
                opacity: 1;
            }
        }

        @keyframes text-flicker {
            0% {
                opacity: 0.1;
            }

            2% {
                opacity: 1;
            }

            8% {
                opacity: 0.1;
            }

            9% {
                opacity: 1;
            }

            12% {
                opacity: 0.1;
            }

            20% {
                opacity: 1;
            }

            25% {
                opacity: 0.3;
            }

            30% {
                opacity: 1;
            }

            70% {
                opacity: 0.7;
            }

            72% {
                opacity: 0.2;
            }

            77% {
                opacity: 0.9;
            }

            100% {
                opacity: 0.9;
            }
        }

        @keyframes border-flicker {
            0% {
                opacity: 0.1;
            }

            2% {
                opacity: 1;
            }

            4% {
                opacity: 0.1;
            }

            8% {
                opacity: 1;
            }

            70% {
                opacity: 0.7;
            }

            100% {
                opacity: 1;
            }
        }

        @media only screen and (max-width: 600px) {
            .glowing-btn {
                font-size: 1em;
            }
        }

        .wrapper {
            /* background: #8446f7; */
            position: fixed;
            width: 100%;
            box-shadow: 2px 2px 5px #b6b6b6, -2px -2px 2px #ffffff;
        }

        .wrapper nav {
            position: relative;
            display: flex;
            max-width: calc(100% - 200px);
            margin: 0 auto;
            height: 70px;
            align-items: center;
            justify-content: space-between;
        }

        nav .nav-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        nav .nav-content .links {
            margin-left: 80px;
            display: flex;
            gap: 10px;
        }

        .nav-content .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-content .logo img {
            width: 30px;
        }

        .nav-content .logo a {
            color: #fff;
            font-size: 44px;
            font-style: oblique;
            font-weight: 800;
        }

        .nav-content .links li {
            list-style: none;
            line-height: 70px;
        }

        .nav-content .links li a,
        .nav-content .links li label {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            padding: 7px 14px;
            border-radius: 5px;
            transition: all 0.3s ease;
            background-color: #75223d;
            /* margin: 0 5px; */
        }

        .nav-content .links li label {
            display: none;
        }

        .nav-content .links li a:hover,
        .nav-content .links li label:hover {
            background: #d479a2;
            color: #fff;
        }

        .wrapper .search-icon,
        .wrapper .menu-icon {
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            line-height: 70px;
            width: 70px;
            text-align: center;
        }

        .wrapper .menu-icon {
            display: none;
        }

        .wrapper #show-search:checked~.search-icon i::before {
            content: "\f00d";
        }

        .wrapper .search-box {
            position: absolute;
            height: 100%;
            max-width: calc(100% - 50px);
            width: 100%;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .wrapper #show-search:checked~.search-box {
            opacity: 1;
            pointer-events: auto;
        }

        .search-box input {
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            font-size: 17px;
            color: #fff;
            background: #ffff;
            padding: 0 100px 0 15px;
        }

        .search-box input::placeholder {
            color: #545252;
        }

        .search-box .go-icon {
            position: absolute;
            display: flex;
            right: 10px;
            top: 50%;
            align-items: center;
            transform: translateY(-50%);
            line-height: 60px;
            width: 51px;
            height: 50px;
            justify-content: center;
            border: none;
            outline: none;
            color: #fff;
            font-size: 20px;
            border-radius: 50%;
            cursor: pointer;
            background: transparent;
        }

        .wrapper input[type="checkbox"] {
            display: none;
        }

        /* Dropdown Menu code start */
        .nav-content .links ul {
            position: absolute;
            background: #fff;
            top: 80px;
            z-index: -1;
            opacity: 0;
            visibility: hidden;
            color: #fff;
        }

        .nav-content .links li:hover>ul {
            top: 70px;
            opacity: 1;
            visibility: visible;
            transition: all 0.3s ease;
        }

        .nav-content .links ul li a {
            color: #fff;
            display: block;
            width: 100%;
            line-height: 30px;
            border-radius: 0px !important;
        }

        .nav-content .links ul ul {
            position: absolute;
            top: 0;
            right: calc(-100% + 8px);
        }

        .nav-content .links ul li {
            position: relative;
        }

        .nav-content .links ul li:hover ul {
            top: 0;
        }

        /* Responsive code start */
        @media screen and (max-width: 1250px) {
            .wrapper nav {
                max-width: 100%;
                padding: 0 20px;
            }

            nav .nav-content .links {
                margin-left: 30px;
            }

            .nav-content .links li a {
                color: #fff;
                padding: 8px 13px;
                font-size: 17px;
            }

            .wrapper .search-box {
                max-width: calc(100% - 100px);
            }

            .wrapper .search-box input {
                padding: 0 100px 0 15px;
            }
        }

        @media screen and (max-width: 900px) {
            .wrapper .menu-icon {
                display: block;
            }

            .nav-content .logo a {
                font-size: 25px;
            }

            .wrapper #show-menu:checked~.menu-icon i::before {
                content: "\f00d";
            }

            nav .nav-content .links {
                display: block;
                position: fixed;
                background: #fff;
                height: 100%;
                width: 100%;
                top: 70px;
                left: -100%;
                margin-left: 0;
                max-width: 350px;
                overflow-y: auto;
                padding-bottom: 100px;
                transition: all 0.3s ease;
            }

            nav #show-menu:checked~.nav-content .links {
                left: 0%;
            }

            .nav-content .links li {
                margin: 15px 20px;
            }

            .nav-content .links li a,
            .nav-content .links li label {
                line-height: 20px;
                font-size: 17px;
                display: block;
                padding: 8px 18px;
                cursor: pointer;
                color: #fff;
            }

            .nav-content .links li a.desktop-link {
                display: none;
            }

            /* dropdown responsive code start */
            .nav-content .links ul,
            .nav-content .links ul ul {
                position: static;
                opacity: 1;
                visibility: visible;
                background: none;
                max-height: 0px;
                overflow: hidden;
            }

            .nav-content .links #show-features:checked~ul,
            .nav-content .links #show-services:checked~ul,
            .nav-content .links #show-items:checked~ul {
                max-height: 100vh;
            }

            .nav-content .links ul li {
                margin: 7px 20px;
            }

            .nav-content .links ul li a {
                font-size: 17px;
                line-height: 30px;
                border-radius: 15px !important;
            }
        }

        @media screen and (max-width: 400px) {
            .wrapper nav {
                padding: 0 10px;
            }

            .nav-content .logo img {
                width: 25px;
            }

            .nav-content .logo a {
                font-size: 23px;
            }

            .wrapper .search-box {
                max-width: calc(100% - 70px);
            }

            .wrapper .search-box .go-icon {
                width: 30px;
                right: 0;
            }

            .wrapper .search-box input {
                padding-right: 30px;
            }
        }

        footer {
            background-color: #343434;
            padding-top: 50px;
        }

        .container {

            margin: auto;
            display: flex;
            justify-content: center;
        }

        .footer-content {
            width: 33.3%;

        }

        h3 {
            font-size: 28px;
            margin-bottom: 15px;
            text-align: center;
            color: #fff;

        }

        .footer-content p {
            width: 190px;
            margin: auto;
            padding: 7px;
        }

        .footer-content {
            text-align: center;
        }

        .list {
            padding: 0%;
            color: white;
        }

        .list li {
            width: auto;
            text-align: center;
            list-style-type: none;
            padding: 7px;
            position: relative;
            color: white;

        }

        .list li::before {
            content: '';
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 100%;
            width: 0%;
            height: 2px;
            background-color: #e678ca;
            transition-duration: .5s;
        }

        .list li:hover::before {
            width: 70px;
        }

        .social-icons {
            text-align: center;
            padding: 0;
        }

        .social-icons li {
            display: inline-block;
            text-align: center;
            padding: 5px;
            color: #fff;
        }

        .social-icons i {
            color: #f7a4e7;
            font-size: 25px;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: #f7a4e7;
        }

        .social-icons l:hover {
            color: #e284be;
            text-align: center;
            padding: 10px 0;
            margin-top: 50px;
        }

        .bottom-bar p {
            color: #343434;
            margin: 0;
            font-size: 16px;
            padding: 7px;
        }

        .p {
            color: white;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="wrapper">
            <nav>
                <input type="checkbox" id="show-search">
                <input type="checkbox" id="show-menu">
                <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                <div class="nav-content">
                    <div class="logo" style="color: #fff; font-size: 28px; font-style: oblique;"><b><i>SpeakOut</i></b>
                    </div>
                    <ul class="links">
                        <li><a href="#"><b>Home</b></a></li>
                        <li>
                            <a href="#" class="desktop-link" style="background-color: #d18fa6;"><b>About Us </b></a>
                            <input type="checkbox" id="show-services">
                            <label for="show-services"><b>Register</b> <i class="fa-solid fa-angle-down"></i></label>
                        </li>
                        <li><a href="#" class="nav-login"><b>Login</b></a></li>
                        <li><a href="#"><b>Register</b></a></li>
                    </ul>
                </div>
                <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
                <form action="#" class="search-box">
                    <input type="text" placeholder="Search Something..." required>
                    <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>

                </form>
            </nav>
        </div>
    </div>

    </div>

    <img src="b2.jfif" style="width:1300px; height:600px">


    <div class="text-block">

        <h3 style="font-size: 38px; text-align: center; color: #cc1470;  ">Hello Students!!!</h4>

            <h style="font-size: 38px; text-align: center; color: #de84b1; font-size: 25px; margin-left: 220px;  ">
                <b>Welcome to SpeakOut...</b></h>
            <b>
                <p style="text-align: center; font-size: 16.5px; font-style: italic;"> A platform built for YOU, where
                    every issue you faced in college can be heard, addressed, and solved. College life is a journey
                    filled with opportunities, challengens, and moments that shape your futures. But sometimes, you may
                    find barriers that stand in the way of making the most of this experience. We believe that every
                    student deserve a voice, <span style="color: #d479a2;">SpeakOut</span> is created with same purpose.
                    Getting involved is easy! Just log in with your correct credentials, submit your concerns and solved
                    your issues.
                </p>
                <p style="text-align: center; font-size: 16.5px; font-style: italic;">We believe that change starts with
                    you. By using<span style="color: #d479a2;"> SpeakOut</span>, you're not only advocating for yourself
                    but also for future students who will benefit from the improvements we can bring about together.
                    With <span style="color: #d479a2;">SpeakOut</span> you're part of a movement to create a better
                    college experience for everyone. Together, we can make sure our voices are heard, our challenges are
                    addressed, and our college becomes a place that supports every students. </p>
            </b>


    </div>
    </div>
    <footer>
        <div class="container">
            <div class="footer-content">
                <h3>Contact Us
                </h3>

                <p style="color: white;">Email:Info@exmple.com</p>
                <p style="color: white;">Contact. No1234567889</p>
                <p style="color: white;">Address: your Adress is 123</p>
            </div>
            <div class="footer-content">
                <h3 style="color: white;">Quick Links</h3>
                <ul class="list">
                    <li><a style="color: white;" href="home1.php">Home</a></li>

                    <!-- <li><a style="color: white;" href="">About Us</a></li> -->
                    <!-- <li><a  style="color: white;" href="">Register</a></li> -->

                    <li><a style="color: white;" href="test.php">Login</a></li>
                    <!-- <li><a  style="color: white;" href="">Services</a></li> -->
                </ul>
            </div>
            <div class="footer-content">
                <h3 style="color: white;">Follow Us</h3>

                <li><a href="https://www.facebook.com/"><i style="color: white;" class="fab fa-facebook"></i></a></li>

                <li><a href="https://x.com/?lang=en-in"><i style="color: white;" class="fab fa-twitter"></i></a></li>

                <li><a href="https://www.instagram.com/"><i style="color: white;" class="fab fa-instagram"></i></a></li>

            </div>
        </div>
        <div class="bootom-bar">
            <p style="background: #000; height: 50px; color: #fff; text-align: center; padding: 20px;">&copy;2023 Your
                company. All rights Reserved</p>
        </div>
    </footer>


</body>

</html>