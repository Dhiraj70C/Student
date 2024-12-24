<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="project.css">
</head>

<body>
    <header>
        <?php
        session_start();
        session_unset();
        // destroy the session
        session_destroy();

        //echo $_SESSION['a'];
        
        // echo "<script>window.location.href='login.php';</script>";
        
        //print_r($_SESSION);
        
        //echo $a;
        ?>
        <h2 class="logo">SpeakOut</h2>

        <nav class="navigation">

            <a href="home1.php">Home</a>

            <a href="aboutus.php">About</a>

        </nav>

    </header>
    <div class="wrapper">
        <!-- <span class="icon-close"><i class="fa-sharp fa-solid fa-xmark"></i></span> -->
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#" method="POST">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="text" name="lemail" required>
                    <label>Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="lpass" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Rmember Me</label>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
                <div class="login-register">
                    <p>Dont have an account?
                        <a href="#" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>


        <div class="form-box register">
            <h2>Registration</h2>
            <form action="#" method="POST">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input name="uname" type="text" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input name="email" type="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input name="pass" type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" required>I agree to the terms & conditions.</label>

                </div>
                <button type="submit" name="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Alrady have an account?
                        <a href="#" class="login-link">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script>

        const wrapper = document.querySelector('.wrapper');
        const loginLink = document.querySelector('.login-link');
        const registerLink = document.querySelector('.register-link');

        // const iconClose = document.querySelector('.icon-close');

        registerLink.addEventListener('click', () => {
            wrapper.classList.add('active');
        });
        loginLink.addEventListener('click', () => {
            wrapper.classList.remove('active');
        });
        // iconClose.addEventListener('click', () => {
        //     wrapper.classList.remove('active-popup');
        // });
    </script>
    <?php
    session_start();
    //create the objects for assigning the values for db connection.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "speakout";

    //connection to the database.
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        echo die(mysqli_connect_error()); //if some error occur then display the error.
    }

    if (isset($_POST['submit'])) {   //check wether the button is clicked or not if clicked then access the values as below.
        date_default_timezone_set('Asia/Kolkata');
        $name = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $date = date("Y-m-d H:i:s");

        $sql = "INSERT INTO `registeruser`(`srno`, `username`, `email`, `password`, `cudate`) VALUES ('','$name','$email','$password', '$date')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "<script> alert('error');</script>";
        } else {
            echo "<script> alert('Account Created Successfully!');</script>";
        }
    }

    if (isset($_POST['login'])) {
        $email = $_POST['lemail'];
        $pass = $_POST['lpass'];

        $select = "select * from  registeruser";
        $result = mysqli_query($conn, $select);

        while ($row = mysqli_fetch_array($result)) {

            $db_username = $row['username'];
            $db_password = $row['password'];

            if ($db_username == $email and $db_password == $pass) {
                $_SESSION['islogin'] = 'Yes';
                $_SESSION['username'] = $db_username;
                if ($email == "admin" and $pass == "1234") {
                    echo "<script>window.location.href='compdb.php';</script>";
                } else {
                    echo "<script>window.location.href='complaint.php';</script>";
                }
            }
        }
    }
    ?>
</body>

</html>