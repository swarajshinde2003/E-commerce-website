<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
// echo "Success connecting to the db";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];
$sql = "INSERT INTO `kbp`.`kbp` (`name`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$email', '$phone', '$other', current_timestamp());";
// echo $sql;

if($con->query($sql)== true){
    // echo"Successfully inserted";
    $insert = true;

}
else{

    echo"ERROR:$sql <br>$con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yewale Electronics</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="ss5.png" alt="yewaleelectronics.com">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Products</a></li>
            <li class="item"><a href="#partner-section">Our Partners</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>
    <section id="home">
        <h1 class="h-primary">Yewale Electronics
        <p>Always on, Always new </p> </h1>
    
        <!-- <button class="btn">Order Now</button> -->
    </section>
    <section id="services-container">
        <h1 class="h-primary center">Services</h1>
        <div id="services">
            <div class="box">
                <img src="./img/6.jpg" alt="">
                <h2 class="h-secondary center">PTZ Camera</h2>
                <!-- <p class="center">Pan-tilt-zoom or PTZ cameras have been around for years and had become a popular camera for a range of applications. Pan-tilt-zoom or PTZ cameras can be used to provide surveillance over much larger areas than conventional security cameras..</p> -->
            </div>
            <div class="box">
                <img src="./img/7.jpg" alt="">
                <h2 class="h-secondary center">Dome Camera</h2>
                <p class="center">Dome cameras get their name from their dome-shaped structure. These security cameras are designed to withstand all elements, both inside and outside. Their construction allows for the camera to work even in low-light or no-light settings due to the built-in infrared LEDs.</p>
            </div>
            <div class="box">
                <img src="./img/8.jpg" alt="">
                <h2 class="h-secondary center">Bullet Camera</h2>
                <p class="center">A bullet camera is a small camera designed for security applications. The name comes from the small size of these cameras resembling bullets. The camera is typically connected to a surveillance system. These cameras allow businesses and individuals to monitor their property for suspicious activity.</p>
            </div>
            
    
    </section>
    <section id="partner-section">
        <h1 class="h-primary center">Our Partners</h1>
        <div id="clients">
            <div class="client-item">
                <img src="Hikvision-logo.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="Panasonic-logo.jpg" alt="Our Client">
            </div>
          
            <div class="client-item">
                <img src="cp plus.png" alt="Our Client">
            </div>
        </div>

    </section>
    <section id="contact">
    <div id="contact-box">
    <img class="bg" src="ss2.jpg" alt="contact us">
    <div class="container">
        <h1>Contact Us</h1>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for your response.We will get back to you soon</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enquiry regarding.."></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    </section>
    <!-- <script src="index.js"></script> -->
    <footer>
        <center>copyright &copy yewaleelectronics.com|All rights reserved. </center>
    </footer>
</body>
</html>























<!-- <section id="contact">
    <h1 class="h-primary center">Contact Us</h1>
    <div id="contact-box">
        <form action="">
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="name" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number: </label>
                <input type="phone" name="name" id="phone" placeholder="Enter your phone">
            </div>
            <div class="form-group">
                <label for="message">Message: </label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <button class="btn success">Submit</button>
        </form>
    </div>
</section> -->






















<!-- <section id="contact">
    <h1 class="h-primary center">Contact Us</h1>
    <div id="contact-box">
        <form action="">
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="name" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number: </label>
                <input type="phone" name="name" id="phone" placeholder="Enter your phone">
            </div>
            <div class="form-group">
                <label for="message">Message: </label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <button class="btn success">Submit</button>
        </form>
    </div>
</section> -->