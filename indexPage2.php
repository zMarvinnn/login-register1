<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>MovMax</title>
    <link rel="shortcut icon" href="images/Movmax.png"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>

<!---slider---->
<section id="main">

<div class="slides">

<div class="slide slide-1">
  <img src="images/s1.jpg" alt="">
</div>

<div class="slide slide-2">
  <img src="images/s2.jpg" alt="">
</div>

<div class="slide slide-3">
  <img src="images/s3.jpg" alt="">
</div>

<div class="slide slide-4">
  <img src="images/s4.jpg" alt="">
</div>

<div class="slide slide-5">
  <img src="images/landscape/m13.jpg" alt="">
</div>

<div class="slide slide-6">
  <img src="images/landscape/m10.jpg" alt="">
</div>

</div>
  </section>

<div>
  <nav>
    <a href="index.php" class="logo">
      <img src="images/Movmax.png"/>
    </a>
    <u class="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="#">categories</a></li>
      <li><a href="#">Horror</a></li>
      <li><a href="#">About</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </u>
    <div class="search">
      <input type="text" placeholder="Find your Favorite Movies Here"/>
      <i class="fas fa-search"></i>
    </div>
    



  </nav>

  <div class="Title1">
    <div class="box">
      <b>SHOWCASE</b>
    </div>
  </div>


  

  <!----------------------------Latest Movies------------------------>

  <section id="latest">
    <h6 class="latest-heading"><b>Latest Movies</b></h6>
  </section>

  <section id= "movies-list">
    <!---box1---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
        <div class="quality">HD</div>
        <img src="images/m1.jpg" alt="">
      </div>
      <!---text---->
      <a href="Mission.php">
      Mission: Impossible - Dead Reckoning Part One
      </a>
      <p>Action Movie</p>
    </div>

    <!---box2---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/m2.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-2.php">
      The Equalizer 3
      </a>
      <p>Action Movie</p>
    </div>

    <!---box3---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/m3.jpg" alt="">
      </div>
      <!---text---->
      <a href="thenun.php">
      The Nun II
      </a>
      <p>Horror Movie</p>
    </div>


    <!---box4---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/m4.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-4.php">
      The Exorcist: Believer
      </a>
      <p>Horror Movie</p>
    </div>


    <!---box5---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/m5.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-5.php">
      Saw X
      </a>
      <p>Horror Movie</p>
    </div>



    <!---box6---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/m6.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-6.php">
      Barbie
      </a>
      <p>Comedy, Adventure, Fantasy</p>
    </div>


    <!---box7---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/m7.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-7.php">
      Blue Beetle
      </a>
      <p>Action Movie</p>
    </div>



    <!---box8---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/m8.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-8.php">
      Talk to Me
      </a>
      <p>Horror Movie</p>
    </div>


    <!---box9---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/m10.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-9.php">
      Expend4bles
      </a>
      <p>Action</p>
    </div>

    <!---box10---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/m9.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-10.php">
      Meg 2: The Trench
      </a>
      <p>Action</p>
    </div>

                <!----------------------------Actions Movies------------------------>

  </section>

  <section id="latest">
    <h6 class="latest-heading"><b>Actions Movies</b></h6>
  </section>

  <section id= "movies-list">
    <!---box1---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
        <div class="quality">HD</div>
        <img src="images/m1.jpg" alt="">
      </div>
      <!---text---->
      <a href="Mission.php">
      Mission: Impossible - Dead Reckoning Part One
      </a>
      <p>Action Movie</p>
    </div>

    <!---box2---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/m2.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-2.php">
      The Equalizer 3
      </a>
      <p>Action Movie</p>
    </div>

    <!---box3---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/patayo/p8.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-11.php">
      Transformers: Age of Extinction
      </a>
      <p>Action Movie</p>
    </div>


    <!---box4---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/patayo/p9.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-12.php">
      Extraction 2
      </a>
      <p>Action Movie</p>
    </div>


    <!---box5---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/patayo/p10.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-13.php">
      Bumblebee
      </a>
      <p>Action Movie</p>
    </div>

    <!---box6---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p1.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-14.php">
      The Creator
      </a>
      <p>Action Movie</p>
    </div>

    <!---box7---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p2.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-15.php">
      Heart of Stone
      </a>
      <p>Action Movie</p>
    </div>

    <!---box8---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p3.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-16.php">
      6 Underground
      </a>
      <p>Action Movie</p>
    </div>

<!---box9---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p4.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-17.php">
      APOSTLE
      </a>
      <p>Action Movie</p>
    </div>

<!---box10---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p5.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-18.php">
      ARMY OF THE DEAD
      </a>
      <p>Action Movie</p>
    </div>

<!---box11---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p6.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-19.php">
      AVA
      </a>
      <p>Action Movie</p>
    </div>

<!---box12---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p7.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-20.php">
      Bullet Train
      </a>
      <p>Action Movie</p>
    </div>

<!---box13---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p8.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-21.php">
      Cold Pursuit
      </a>
      <p>Action Movie</p>
    </div>

<!---box14---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p9.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-22.php">
      Da 5 Bloods
      </a>
      <p>Action Movie</p>
    </div>

<!---box15---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p10.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-23.php">
      Dune
      </a>
      <p>Action Movie</p>
    </div>

<!---box16---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p11.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-24.php">
      Enola Holmes 2
      </a>
      <p>Action Movie</p>
    </div>

<!---box17---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p12.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-25.php">
      Enola Holmes
      </a>
      <p>Action Movie</p>
    </div>

    <!---box18---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p26.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-26.php">
      Uncharted
      </a>
      <p>Action Movie</p>
    </div>

    <!---box19---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p27.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-27.php">
      The Woman King
      </a>
      <p>Action Movie</p>
    </div>

    <!---box20---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p28.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-28.php">
      John Wick: Chapter 3 - Parabellum
      </a>
      <p>Action Movie</p>
    </div>

    <!---box21---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p29.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-29.php">
      War for the Planet of the Apes
      </a>
      <p>Action Movie</p>
    </div>

    <!---box22---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p30.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-30.php">
      Spider-Man: Across the Spider-Verse
      </a>
      <p>Action Movie</p>
    </div>

    <!---box23---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p31.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-31.php">
      Noah
      </a>
      <p>Action Movie</p>
    </div>

    <!---box24---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p32.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-32.php">
      The Mother
      </a>
      <p>Action Movie</p>
    </div>

    <!---box25---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/actions/a-p/p33.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-33.php">
      Red Notice
      </a>
      <p>Action Movie</p>
    </div>



    </div>


     <!------------------------------------------------------------------------------------------------Horror---->


    <section id="latest">
    <h6 class="latest-heading"><b>Horror Movies</b></h6>
  </section>

  <section id= "movies-list">
    <!---box1---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
        <div class="quality">HD</div>
        <img src="images/horror/a-p/p1.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-1.php">
      1922
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box2---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p2.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-2.php">
      A Quiet Place 2 
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box3---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p3.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-3.php">
      Apostle 
      </a>
      <p>Horror Movie</p>
    </div>


    <!---box4---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p4.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-4.php">
      Bird Box 
      </a>
      <p>Horror Movie</p>
    </div>


    <!---box5---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p5.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-5.php">
      Clarita 
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box6---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p6.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-6.php">
      Eerie 
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box7---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p7.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-7.php">
      Eli 
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box8---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p8.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-8.php">
      Feng Shui 
      </a>
      <p>Horror Movie</p>
    </div>

<!---box9---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p9.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-9.php">
      Incantation 
      </a>
      <p>Horror Movie</p>
    </div>

<!---box10---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p10.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-10.php">
      Insidious Red Door 
      </a>
      <p>Horror Movie</p>
    </div>

<!---box11---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p11.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-11.php">
      Kuwaresma 
      </a>
      <p>Horror Movie</p>
    </div>

<!---box12---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p12.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-12.php">
      Ouija 
      </a>
      <p>Horror Movie</p>
    </div>

<!---box13---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p13.jpg" alt="">
      </div>
      <!---text---->
      <a href="m-13.php">
      Pope_s Exorcist 
      </a>
      <p>Horror Movie</p>
    </div>

<!---box14---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p14.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-14.php">
      Shutter 
      </a>
      <p>Horror Movie</p>
    </div>

<!---box15---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p15.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-15.php">
      Slender Man
      </a>
      <p>Horror Movie</p>
    </div>

<!---box16---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p16.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-16.php">
      Sunod 
      </a>
      <p>Horror Movie</p>
    </div>

<!---box17---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p17.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-17.php">
      Texas Chainsaw Massacre 
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box18---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p18.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-18.php">
      The Boy
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box19---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p19.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-19.php">
      The Conjuring
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box20---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p20.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-20.php">
      The Platform
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box21---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p21.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-21.php">
      The Ritual
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box22---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p22.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-22.php">
      The Whole Truth
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box23---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p23.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-23.php">
      The Witch
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box24---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p24.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-24.php">
      Tia Madre
      </a>
      <p>Horror Movie</p>
    </div>

    <!---box25---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p25.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-25.php">
      Veronica
      </a>
      <p>Horror Movie</p>
    </div>



    </div>



    

    

</div>
</body>
</html>