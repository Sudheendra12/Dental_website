<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];
    
    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name,email,number,date) 
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message[] = 'appointment made successfully';
    } else {
        $message[] = 'appointment failed';
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Website</title>

    <!-- font style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- css file -->
    <link rel="stylesheet" href="css/styles.css">


</head>

<body>

<!-- header section -->
<header class="header fixed-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            
                <a href="#home" class="logo">dental <span>Care.</span></a>
          
                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#services">services</a>
                    <a href="#reviews">reviews</a>
                    <a href="#contact">contact</a>
                </nav>
            
                <a href="#contact" class="link-btn">make appointment</a>

                <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </div>
</header>

<!-- home section -->
<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>let us brighten your smile</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione ea nam doloribus sint, eos velit veniam odit hic! Doloremque incidunt voluptatibus dolore! Modi debitis velit, iste dolorum voluptatem voluptas!</p>
                <a href="#contact" class="link-btn">make appointment</a>
            </div>


        </div>
    </div>
</section>

<!-- about section -->
<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <img src="images/about1.jpg" class="w-100 mb-4 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
                <span>about us</span>
                <h3>True Healthcare For Your Family</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam labore magnam ex natus voluptas dolores nam vero reprehenderit similique cum?</p>
                <a href="#contact" class="link-btn">make appointment</a>
            </div>
        </div>
    </div>
</section>

<!-- service section -->
<section class="services" id="services">
    <h1 class="heading">our services</h1>
    <div class="box-container container">

        <div class="box">
            <img src="images/alignment_specialist.webp" height="50px" width="50px" alt="">
            <h3>Alignment specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, voluptatum!</p>
        </div>

        <div class="box">
            <img src="images/cosmetic_dentistry.webp" height="50px" width="50px" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, voluptatum!</p>
        </div>

        <div class="box">
            <img src="images/oral_hygine_experts.webp" height="50px" width="50px" alt="">
            <h3>Oral hygiene experts</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, voluptatum!</p>
        </div>

        <div class="box">
            <img src="images/root_canal_specialist.png" height="50px" width="50px" alt="">
            <h3>Root Canal specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, voluptatum!</p>
        </div>

        <div class="box">
            <img src="images/live_dental_advisory.jpg" height="50px" width="50px" alt="">
            <h3>Live Dental Advisory</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, voluptatum!</p>
        </div>

        <div class="box">
            <img src="images/inspectiion.png" height="50px" width="50px" alt="">
            <h3>Cavity Inspection</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, voluptatum!</p>
        </div>

    </div>
</section>

<!-- process section -->
<section class="process">
    <h1 class="heading">work process</h1>
    <div class="box-container container">
        <div class="box">
            <img src="images/process1.webp" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, iste.</p>
        </div>

        <div class="box">
            <img src="images/process2.webp" alt="">
            <h3>Pediatric Dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, iste.</p>
        </div>

        <div class="box">
            <img src="images/process31.png" alt="">
            <h3>Dental Implants</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, iste.</p>
        </div>


    </div>
</section>

<!-- reviews section -->
<section class="reviews" id="reviews">
    <h1 class="heading">satisfied clients</h1>
    <div class="box-container container">
        <div class="box">
            <img src="images/rdj1.jpg" alt="">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus omnis ut excepturi natus sapiente eos error quidem ex! Eos, dignissimos.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Robert Downey Jr.</h3>
            <span>satisfied client</span>
        </div>

        <div class="box">
            <img src="images/hems.jpg" alt="">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus omnis ut excepturi natus sapiente eos error quidem ex! Eos, dignissimos.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Chris Hemsworth</h3>
            <span>satisfied client</span>
        </div>

        <div class="box">
            <img src="images/tom4.jpg" alt="">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus omnis ut excepturi natus sapiente eos error quidem ex! Eos, dignissimos.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Tom Holland</h3>
            <span>satisfied client</span>
        </div>
    </div>
</section>

<!-- contact section -->
<section class="contact" id="contact">
    <h1 class="heading">make appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
            if(isset($message)){

               foreach($message as $message) {
                    echo '<p class="message">'.$message.'</p>';
               }
            }
        ?>
        <span>your name :</span>
        <input type="text" name="name" placeholder="enter your name" class="box" required>
        <span>your email :</span>
        <input type="email" name="email" placeholder="enter your email" class="box" required>
        <span>your number :</span>
        <input type="number" name="number" placeholder="enter your number" class="box" required>
        <span>appointment date :</span>
        <input type="datetime-local" name="date" class="box" required>
        <input type="submit" name="submit" value="make appointment" class="link-btn">
    </form>
</section>


<!-- footer sectio -->
<section class="footer">
    <div class="box-container container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>mumbai, India - 400104</p>
        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>working hours</h3>
            <p>09:00am to 09:00pm</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>dentalcare@gmail.com</p>
        </div>
    </div>
</section>

















<!-- js file -->
<script src="js/script.js"></script>
</body>
</html>