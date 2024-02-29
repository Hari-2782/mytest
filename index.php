
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
  
</head>
<body>

    <div class="time">

    </div>
    <div class="hero">
        <nav>
            
            <h2 class="logo">MR.TAXI</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="customer.php">customer</a></li>
                <li><a href="driver_dashboard.php">Driver</a></li>
                <li><a href="service.html">services</a></li>
            </ul>
            <div class="login">
                <button type="button"><a href="login.php">LOG IN</a></button>
            </div>
            
            
        </nav>

        <div class="displayname">
        <?php
        session_start();
                    if(isset($_SESSION['Cusername']))  {
                        $con = new mysqli("localhost", "root", "", "project");
                        $get = "select * from customer where username='{$_SESSION['Cusername']}'";
                        $save = $con->query($get);
                        $details = $save->fetch_assoc();
                        echo " <span id='intro' >Hi " . $details['username'] . "  &#128525;</span>";
                    }
?>
        </div>
        <div id="text-box">
            <h3 data-text="book">The company with <bR>The right fare</h3>
                <button type="button" onclick="window.location.href='customer.php'">Book Now</button>
            

                <div class="time">
                    <h1 style="text-align: center;">Result</h1>
                    <script src="time.js"></script>
                </div>

         
        </div>

       
        
    
</body>
</html>