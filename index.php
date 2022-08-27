<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal portfolio</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="mamu.jpeg" alt="image">
        <h3 class="name">Mohammad Zahur</h3>
        <p class="post">Graphic Designer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#portfolio">portfolio</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>Mohammad Zahur</span></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio deserunt aspernatur fugiat minus enim ullam repudiandae sint sed magnam tenetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, at.
    </p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> name : </span> Mohammad Zahur </h3>
        <h3> <span> age : </span> 29 random</h3>
        <h3> <span> qualification : </span> N/A </h3>
        <h3> <span> post : </span> Graphic Designer </h3>
        <h3> <span> language : </span> Hindi,English </h3>
        <a href="l.pdf" target="_blank" ><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span>12+</span>
            <h3>years of experience</h3>
        </div>

        <div class="box">
            <span>100+</span>
            <h3>porject completed</h3>
        </div>

        <div class="box">
            <span>430+</span>
            <h3>happy clients</h3>
        </div>

        <div class="box">
            <span>20+</span>
            <h3>awards won</h3>
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> my <span>education</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2015</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2016</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2017</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2018</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2021</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2022</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>

</div>

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> My <span>Portfolio</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="img1.jpg" alt="image">
    </div>

    <div class="box">
        <img src="img2.jpg" alt="image">
    </div>

    <div class="box">
        <img src="img3.jpg" alt="image not found">
    </div>

    <div class="box">
        <img src="img4.jpg" alt="image">
    </div>

    <div class="box">
        <img src="img5.jpg" alt="">
    </div>

    <div class="box">
        <img src="img6.jpg" alt="">
    </div>

</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> designerzahur@gmail.com </h3>
            <h3> <i class="fas fa-phone"></i> +123-456-7890 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Delhi, india - 110025. </h3>
        </div>

    </div>



    <form action="mail.php" method="POST">

        <input type="text" name="name" placeholder="name" class="box" required>
        <input type="email" name="email" placeholder="email" class="box">
        <input type="text" name="number" placeholder="mobile number" class="box">
        <textarea name="msg" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
        <button type="submit" name="submit_form" value="send" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

    </form>
       

</div>

</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="scroll-top-img.png" alt="img">
</a>







 







<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>


</body>
</html>