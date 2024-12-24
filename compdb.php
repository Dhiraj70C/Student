<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="main.css">
</head>

<body class="admin-body">
    <header class="admin-h">
        <h2 class="logo">SpeakOut</h2>

        <nav class="navigation">

            <!-- <a href="ngo.php" class="nav-link">Home</a> -->

            
            <a href="#d" class="nav-link donation-link" id="b1">Complaints</a>
            
            <a href="#u" class="nav-link user-link" id="b2">Complainers</a>

            <a href="test.php" class="nav-link">Logout</a>
        </nav>

        <br>
        <hr>
        <h2 class="di">Complaints</h2>
        <hr>
        <br>
        <br>
    </header>
    <div class="wrapper form-box ">
        <?php
        session_start();
        if ($_SESSION['islogin'] == 'Yes') {
            //echo "successful login done";
        } else {
            echo "<script>alert('Session Expired Login Again...!');window.location.href='test.php';</script>";
        }
        ?>
        <h1>Hello <?php echo $_SESSION['username']; ?></h1>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "speakout");
        ?>
        <div class="div-doner-table mar dont1" id="t1">
            <table class="doner-table ">
                <th>ID</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Branch</th>
                <th>Complaint</th>
                <th>Date & Time</th>
                <?php
                $query = "SELECT * FROM complaints";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['srno']; ?>
                            </td>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <?php echo $row['phno']; ?>
                            </td>
                            <td>
                                <?php echo $row['branch']; ?>
                            </td>
                            <td>
                                <?php echo $row['complaint']; ?>
                            </td>
                            <td>
                                <?php echo $row['cudate']; ?>
                            </td>

                        </tr>

                <?php }
                // mysqli_close($conn);
                ?>
            </table>
        </div>
        <!-- second table -->
        <div class="div-doner-table register dont2">
            <table class="doner-table" id="t2" style="display: none;">
                <th>sr No</th>
                <th>user Name</th>
                <th>Email</th>
                <th>Date & Time</th>

                <!-- <th>Password</th> -->
                <?php
                $query = "SELECT * FROM  registeruser";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['srno']; ?>
                            </td>
                            <td>
                                <?php echo $row['username']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['cudate']; ?>
                            </td>

                        </tr>

                <?php }
                mysqli_close($conn);
                ?>
            </table>
        </div>
    </div>
    <script>
        const wrapper = document.querySelector('.wrapper');

        const donL1 = document.querySelector('.dont1');

        const donL2 = document.querySelector('.dont2');

        const donationLink = document.querySelector('.donation-link');

        const userLink = document.querySelector('.user-link');

        // donationLink.addEventListener('click', () => {
        //     donL1.classList.add('dont1');
        //     donL1.classList.remove('own');

        //     donL2.classList.remove('dont2');
        //     wrapper.classList.add('own');
        // });


        // userLink.addEventListener('click', () => {
        //     donL2.classList.add('dont2');
        //     wrapper.classList.remove('own');

        //     donL1.classList.remove('dont1');
        //     donL1.classList.add('own');
        // });



        document.getElementById('b1').addEventListener('click', function () {
            document.getElementById('t1').style.display = ''; // Show table t1
            document.getElementById('t2').style.display = 'none'; // Hide table t2
        });

        document.getElementById('b2').addEventListener('click', function () {
            document.getElementById('t1').style.display = 'none'; // Hide table t1
            document.getElementById('t2').style.display = ''; // Show table t2
        });


    </script>
</body>

</html>