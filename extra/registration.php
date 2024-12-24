<!DOCTYPE html>
<html lang="en">

<head>
    <title> Registration </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <style media="screen">
        *,
        *:before,
        *:after {
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
            margin-top: 100px;
            height: 520px;
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

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
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
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .social {
            margin-top: 30px;
            display: flex;
        }

        .social div {
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
        }

        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
        }

        .social .fb {
            margin-left: 25px;
        }

        .social i {
            margin-right: 4px;
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
            padding:0 20px 0 10px;
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
</head>

<body>
        <div class="wrapper">
        <nav>
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="nav-content">
                <div class="logo"><b><i>SpeakOut</i></b></div>
                <ul class="links">
                    <li><a href="home1.php"><b>Home</b></a></li>
                    <li><a href="login.php"><b>Login</b></a></li>
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
        <h3>Register Here</h3>
        <input type="text" placeholder="Enter your Name" name="Name" id="name" autocomplete="name">
        <input type="text" placeholder="Choose Username" name="UserName" id="username" autocomplete="username">
        <input type="text" placeholder="Phone No." name="Phone" id="phone" autocomplete="tel">
        <input type="text" placeholder="Enter Your Email" name="Email" id="email" autocomplete="email">
        <input type="password" placeholder="Password" name="Pass1" id="password1" autocomplete="new-password">
        <input type="password" placeholder="Confirm Password" name="Pass2" id="password2" autocomplete="new-password">
        <button id="btn" name="submit">Submit</button>
    </form>
</body>
<?php
$connection = mysqli_connect("localhost", "root", "", "speakout"); //host name, username, password, db  name
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {   //check wether the button is clicked or not if clicked then access the values as below.
    $Name = $_POST['Name'];
    $Uname = $_POST['UserName'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $pass = $_POST['Pass1'];

    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `registereduser`(`Name`, `UserName`, `PhoneNo`, `Email`, `Pass`) VALUES ('$Name','$Uname','$Phone','$Email','$hashed_pass')";

    if (mysqli_query($connection, $sql)) {
        // echo "<script>alert('Account Created Successfully!');</script>";
        // header("Location: login.php");
        echo "<script>
                alert('Account Created Successfully!');
                window.location.href='login.php';
              </script>";
        exit();
    } else {
        echo "<script>alert('Error: " . mysqli_error($connection) . "');</script>";
    }
    mysqli_close($connection);
}
?>


<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
    let btn = document.querySelector('#btn');

    btn.addEventListener('click', function (e) {
        // e.preventDefault();
        let name = document.querySelector('#name').value;
        uName = document.querySelector('#username').value;
        phone = document.querySelector('#phone').value;
        email = document.querySelector('#email').value;
        pass1 = document.querySelector('#password1').value;
        pass2 = document.querySelector('#password2').value;
        subject = "SpeakOut Registration Successful";

        var body = subject + ' Your Credentials are <br/> name: ' + name +
            '<br/> email: ' + email +
            '<br/> Username: ' + uName +
            '<br/> Password: ' + pass1 +
            '<br/> phone: ' + phone;

        Email.send({
            SecureToken: "9b71237d-c796-4c26-a5c3-f3913ddc6d55",
            To: 'chaudharidhiraj7020@gmail.com',
            From: 'dchaudhari1256@gmail.com',
            Subject: subject,
            Body: body
        }).then(
            message => alert("Registration Done successfully: " + message)
        ).catch(
            error => alert("Error sending email: " + error)
        );

        setTimeout(() => {
            window.location.href = "login.php";
        }, 2000);
    })
</script>

</html>