<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Complaint Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
            font-family: 'Poppins', sans-serif;
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

        .container {
            margin-top: 200px;
            /* height: 100%; */
            width: 400px;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.13);
            /* Glassmorphism effect */
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            color: #ffffff;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #00bcd4;
            /* Cyan color for title */
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #e0e0e0;
            /* Light gray for labels */
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #444;
            /* Darker border */
            border-radius: 6px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.07);
            /* Glass effect for inputs */
            color: #fff;
            /* White text */
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #00bcd4;
            /* Cyan border on focus */
            box-shadow: 0 0 5px rgba(255, 215, 0, 0.5);
            /* Cyan glow */
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            /* Blue button */
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        button:hover {
            background-color: #0056b3;
            /* Darker blue on hover */
        }

        /* Responsive Design */
        @media (max-width: 450px) {
            .container {
                width: 90%;
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }
        }

              .wrapper {
            position: fixed;
            z-index: 1;
            width: 100%;
            box-shadow: 2px 2px 5px #b6b6b6, -2px -2px 2px #ffffff;
            /* background: linear-gradient(to left, #0f2027, #203a43, #2c0300); */
            background: #112e42;
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
            font-size: 44px;
            font-style: oblique;
            font-weight: 800;
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
            /* background-color: #75223d; */
            background-color: transparent;
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
            <label for="show-menu" class="menu-icon"><i ></i></label>
            <div class="nav-content">
                <div class="logo"><b><i>SpeakOut</i></b></div>
                <ul class="links">
                    <li><a href="home1.php"><b>Home</b></a></li>
                    <!-- <li><a href="test.php"><b>Register</b></a></li> -->
                    <li><a href="test.php"><b>Logout</b></a></li>
                    <!-- <li><a href="#"><b>About Us</b></a></li> -->
                </ul>
            </div>
        </nav>
    </div>


    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container">
        <h1>Student Complaint Form</h1>
        <form method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" autocomplete="off">

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" autocomplete="off">

            <label for="year">Year:</label>
            <select id="year" name="year" style="background-color: rgb(52, 48, 48);" autocomplete="off">
                <option value="">Select Year</option>
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3">3rd Year</option>
                <option value="4">4th Year</option>
            </select>
            <label for="name">Branch:</label>
            <input type="text" id="branch" name="branch" autocomplete="off">

            <label for="semester">Semester:</label>
            <select id="semester" name="semester" style="background-color: rgb(52, 48, 48);" autocomplete="off">
                <option value="">Select Semester</option>
                <option value="1">1st Semester</option>
                <option value="2">2nd Semester</option>
            </select>

            <label for="complaint">Complaint:</label>
            <textarea id="complaint" name="complaint" rows="5" autocomplete="off"></textarea>

            <button type="submit" name="submit" id="btn">Submit Complaint</button>
        </form>
    </div>
    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "speakout";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        // echo die(mysqli_connect_error());
        die("Connection failed: " . mysqli_connect_error());
    }

    // if (isset($_POST['submit'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        date_default_timezone_set('Asia/Kolkata');
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $year = $_POST['year'];
        $branch = $_POST['branch'];
        $semester = $_POST['semester'];
        $complaint = $_POST['complaint'];
        $date = date("Y-m-d H:i:s");

        $sql = "INSERT INTO `complaints`(`srno`, `name`, `phno`, `year`, `branch`, `semister`, `complaint`, `cudate`) VALUES ('', '$name', '$phone', '$year', '$branch', '$semester', '$complaint', '$date')";

        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "<script> alert('error');</script>";
        } else {
            echo "<script> alert('complaint Registered Successfully!');</script>";
        }
    }

    // if (isset($_POST['login'])) {
//     $email = $_POST['lemail'];
//     $pass = $_POST['lpass'];
    
    //     $select = "select * from  registeruser";
//     $result = mysqli_query($conn, $select);
    
    //     while ($row = mysqli_fetch_array($result)) {
    
    //         $db_username = $row['username'];
//         $db_password = $row['password'];
    
    //         if ($db_username == $email and $db_password == $pass) {
//             $_SESSION['islogin'] = 'Yes';
//             $_SESSION['username'] = $db_username;
//             echo "<script>window.location.href='complaint.php';</script>";
//         }
//     }
// }
    ?>
</body>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
    var btn = document.getElementById('btn');
btn.addEventListener('click', function (e) {
    // e.preventDefault();

    // Trigger email functionality
    sendEmail();

    // Allow form to submit for database entry
    document.querySelector("form").submit();
});

function sendEmail() {
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var year = document.getElementById('year').value;
    var branch = document.getElementById('branch').value;
    var sem = document.getElementById('semester').value;
    var complaint = document.getElementById('complaint').value;
    var body = 'Dear: ' + name + '<br/> Your complaint for: ' + complaint + '<br/> Has been successfully registered on SpeakOut.' +
        '<br/> Appropriate action will be taken on your complaint.' +
        '<br/> Thank You....<br/> Team SpeakOut.';
    var subject = "Complaint Registered";

    Email.send({
        SecureToken: "9b71237d-c796-4c26-a5c3-f3913ddc6d55",
        To: 'chaudharidhiraj7020@gmail.com',
        From: 'dchaudhari1256@gmail.com',
        Subject: subject,
        Body: body
    }).then(
        message => alert("Email sent successfully: " + message)
    ).catch(
        error => alert("Error sending email: " + error)
    );
}

    // var btn = document.getElementById('btn');
    // btn.addEventListener('click', function (e) {
    //     e.preventDefault();

    //     var name = document.getElementById('name').value;
    //     var phone = document.getElementById('phone').value;
    //     var year = document.getElementById('year').value;
    //     var branch = document.getElementById('branch').value;
    //     var sem = document.getElementById('semester').value;
    //     var complaint = document.getElementById('complaint').value;
    //     var body = 'Dear: ' + name + '<br/> Your complaint for: ' + complaint + '<br/> Has been successfully registered. on SpeakOut ' + '<br/> appropriate action will taken on your complaint: ' + '<br/> Thank You....' + '<br/> Team SpeakOut.';
    //     var subject = "Complaint Registered";

    //     Email.send({
    //         SecureToken: "9b71237d-c796-4c26-a5c3-f3913ddc6d55",
    //         To: 'chaudharidhiraj7020@gmail.com',
    //         From: 'dchaudhari1256@gmail.com',
    //         Subject: subject,
    //         Body: body
    //     }).then(
    //         message => alert("Email sent successfully: " + message)
    //     ).catch(
    //         error => alert("Error sending email: " + error)
    //     );
    // });
</script>

</html>