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

<div>
  <nav>
    <a href="index.php" class="logo">
      <img src="images/Movmax.png"/>
    </a>
    <u class="menu">
    <li><a href="index.php">Home</a></li>
      <li><a href="About.php">About</a></li>
      <li><a href="Terms.php">Terms</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </u>
    <div class="search">
      <input type="text" placeholder="Find your Favorite Movies Here"/>
      <i class="fas fa-search"></i>
    </div>
  </nav>

  <section id="main-movie">
      <!---heading---->
    <h5 class="showcase-heading-main"><b></b></h5>
      <!---box1---->
    <div class="showcase-box-main">
    <a href="#" class="s1">
      <img src="images/horror/a-l/l25.jpg"/>
    </a>
    </div>
  </section>

  <div class="Title1">
    <div class="box">
      <b>Veronica</b>
    </div>
  </div>


    <div class="Trailer">
      <a href="https://www.youtube.com/watch?v=AToHyHLYcp4" target="_blank">
      <button>
        TRAILER <img src="images/play-regular-24.png" alt="">
      </button>
      </a>
      
    </div>



  <div class="label">
    <div class="flex">
      <div class="card">
        <h1><b>Description</b></h1>
        <p>Madrid, June 1991. After celebrating a session of Ouija with her friends, Verónica is besieged by dangerous supernatural presences that threaten to harm her entire family.</p>
      </div>

      <div class="card">
        <p><b>Released:</b> 2017-08-25</p>
        <p><b>Genre:</b> Horror</p>
        <p><b>Casts:</b> Sandra Escacena, Bruna González, Claudia Placer, Iván Chavero, Ana Torrent</p>
        <p><b>Duration:</b> 105 min</p>
        <p><b>Country:</b> Spain</p>
        <p><b>Production:</b> Apaches Entertainment, Apache Films, Film Factory, Orange S.A., Sony Pictures International Productions, RTVE</p>

      </div>

      <div class="card">
        <h1><b>Links</b></h1>
        <p><a href="http://tinyurl.com/3f5xfjsk" target="_blank">http://tinyurl.com/3f5xfjsk</a></p>
        <p><a href="http://tinyurl.com/mr3p4t3y" target="_blank">http://tinyurl.com/mr3p4t3y</a></p>
      </div>


    </div>
  </div>

  </section>

  <div class="Title1">
    <div class="box">
      <b>You may also like</b>
    </div>
  </div>


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


  
</div>
</body>
</html>