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
            width: 400px;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.13); /* Glassmorphism effect */
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
            color: #00bcd4; /* Cyan color for title */
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #e0e0e0; /* Light gray for labels */
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #444; /* Darker border */
            border-radius: 6px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.07); /* Glass effect for inputs */
            color: #fff; /* White text */
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #00bcd4; /* Cyan border on focus */
            box-shadow: 0 0 5px rgba(255, 215, 0, 0.5); /* Cyan glow */
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff; /* Blue button */
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        button:hover {
            background-color: #0056b3; /* Darker blue on hover */
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
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container">
        <h1>Student Complaint Form</h1>
        <form id="complaintForm" action="#" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="year">Year:</label>
            <select id="year" name="year" required>
                <option value="">Select Year</option>
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3">3rd Year</option>
                <option value="4">4th Year</option>
            </select>
 <label for="name">Branch:</label>
            <input type="text" id="branch" name="branch" required>

            <label for="semester">Semester:</label>
            <select id="semester" name="semester" required>
                <option value="">Select Semester</option>
                <option value="1">1st Semester</option>
                <option value="2">2nd Semester</option>
            </select>

            <label for="complaint">Complaint:</label>
            <textarea id="complaint" name="complaint" rows="5" required></textarea>

            <button type="submit">Submit Complaint</button>
        </form>
    </div>

    <script>
        document.getElementById('complaintForm').addEventListener('submit', function(event) {
            const phoneInput = document.getElementById('phone').value;

            // Validate phone number: must be exactly 10 digits
            if (!/^\d{10}$/.test(phoneInput)) {
                alert('Invalid number. Please enter a valid 10-digit phone number.');
                event.preventDefault(); // Prevent form submission
            } else {
                // Redirect to the home page on successful submission
                event.preventDefault(); // Prevent form submission for the demo
                window.location.href = 'hpme1.php'; // Change to your home page URL
            }
        });
    </script>
</body>
</html>
