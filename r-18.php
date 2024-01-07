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
      <img src="images/Romance/a-l/l18.jpg"/>
    </a>
    </div>
  </section>

  <div class="Title1">
    <div class="box">
      <b>Royal Treatment</b>
    </div>
  </div>


    <div class="Trailer">
      <a href="https://www.youtube.com/watch?v=KWxJXZ3S3-g" target="_blank">
      <button>
        TRAILER <img src="images/play-regular-24.png" alt="">
      </button>
      </a>
      
    </div>



  <div class="label">
    <div class="flex">
      <div class="card">
        <h1><b>Description</b></h1>
        <p>Isabella runs her own salon and isnt afraid to speak her mind, while Prince Thomas runs his own country and is about to marry for duty rather than love. When Izzy and her fellow stylists get the opportunity of a lifetime to do the hair for the royal wedding, she and Prince Thomas learn that taking control of their own destiny requires following their hearts.</p>
      </div>

      <div class="card">
        <p><b>Released:</b>  2022-01-20</p>
        <p><b>Genre:</b> Comedy, Romance</p>
        <p><b>Casts:</b>  Laura Marano, Mena Massoud, Jacque Drew, Chelsie Preston Crayford, Jay Simon</p>
        <p><b>Duration:</b> 96 min</p>
        <p><b>Country:</b> United States of America, United Kingdom</p>
        <p><b>Production:</b> Focus Features International (FFI)</p>

      </div>

      <div class="card">
        <h1><b>Links</b></h1>
        <p><a href="http://tinyurl.com/5595x4zb" target="_blank">http://tinyurl.com/5595x4zb</a></p>
        <p><a href="http://tinyurl.com/3kfafwak" target="_blank">http://tinyurl.com/3kfafwak</a></p>
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
        <img src="images/Romance/a-p/p1.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-1.php">
      a tourist guide to love
      </a>
      <p>Romance Movie</p>
    </div>

    <!---box2---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p2.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-2.php">
      alex strangelove 
      </a>
      <p>Romance Movie</p>
    </div>

    <!---box3---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p3.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-3.php">
      along for the ride 
      </a>
      <p>Romance Movie</p>
    </div>


    <!---box4---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p4.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-4.php">
      always be my maybe 
      </a>
      <p>Romance Movie</p>
    </div>


    <!---box5---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p5.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-5.php">
      good on paper
      </a>
      <p>Romance Movie</p>
    </div>

    <!---box6---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p6.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-6.php">
      Greenberg 
      </a>
      <p>Romance Movie</p>
    </div>

    <!---box7---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p7.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-7.php">
      happiness for beginners 
      </a>
      <p>Romance Movie</p>
    </div>

    <!---box8---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p8.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-8.php">
      holidate 
      </a>
      <p>Romance Movie</p>
    </div>

<!---box9---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p9.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-9.php">
      Kidnap for romance 
      </a>
      <p>Romance Movie</p>
    </div>


  
</div>
</body>
</html>