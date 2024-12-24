<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
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
            background-color: rgba(255, 255, 255, 0.13);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
            width: 300px;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }
        label {
            margin-bottom: 5px;
            display: block;
            color: #e5e5e5;
        }
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #444;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.07);
            color: #ffffff;
        }
        ::placeholder {
            color: #e5e5e5;
        }
        input[type="submit"] {
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            border: none;
        }
        .message {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #e5e5e5;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container">
        <h2>Forgot Password</h2>
        <form id="forgotPasswordForm">
            <label for="email">Enter your email</label>
            <input type="email" id="email" name="email" placeholder="Your email" required>
            <input type="submit" value="Send Reset Link">
        </form>
        <div class="message">
            <p>We will send you an email to reset your password.</p>
        </div>
    </div>

    <script>
        const form = document.getElementById('forgotPasswordForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const email = document.getElementById('email').value;

            // Example action
            alert(`Reset link sent to ${email}!`);
        });
    </script>
</body>
</html>
