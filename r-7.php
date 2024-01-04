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
      <li><a href="#">Movies</a></li>
      <li><a href="#">Horror</a></li>
      <li><a href="#">About</a></li>
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
      <img src="images/Romance/a-l/l7.jpg"/>
    </a>
    </div>
  </section>

  <div class="Title1">
    <div class="box">
      <b>Happiness for Beginners</b>
    </div>
  </div>


    <div class="Trailer">
      <a href="https://www.youtube.com/watch?v=45Iuy6YmMBs" target="_blank">
      <button>
        TRAILER <img src="images/play-regular-24.png" alt="">
      </button>
      </a>
      
    </div>



  <div class="label">
    <div class="flex">
      <div class="card">
        <h1><b>Description</b></h1>
        <p>At a crossroads after her divorce, a schoolteacher ventures toward a fresh start in life — and love — when she signs up for a grueling group hiking trip.</p>
      </div>

      <div class="card">
        <p><b>Released:</b>  2023-07-27</p>
        <p><b>Genre:</b> Romance, Adventure, Comedy</p>
        <p><b>Casts:</b> Ellie Kemper, Luke Grimes, Gus Birney, Ben Cook, Esteban Benito</p>
        <p><b>Duration:</b> 103 min</p>
        <p><b>Country:</b> United States of America</p>
        <p><b>Production:</b> Cranetown Media, Synthetic Cinema International</p>

      </div>

      <div class="card">
        <h1><b>Links</b></h1>
        <p><a href="http://tinyurl.com/nhb95jme" target="_blank">http://tinyurl.com/nhb95jme</a></p>
        <p><a href="http://tinyurl.com/mut98jds" target="_blank">http://tinyurl.com/mut98jds</a></p>
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
   <!---box11---->
   <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p11.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-11.php">
      look both ways 
      </a>
      <p>Romance Movie</p>
    </div>

<!---box12---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p12.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-12.php">
      love and gelato 
      </a>
      <p>Romance Movie</p>
    </div>

<!---box13---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p13.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-13.php">
      love and other drugs 
      </a>
      <p>Romance Movie</p>
    </div>

<!---box14---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p14.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-14.php">
      Love at first sight 
      </a>
      <p>Romance Movie</p>
    </div>

<!---box15---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p15.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-15.php">
      love is in the air
      </a>
      <p>Romance Movie</p>
    </div>

<!---box16---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p16.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-16.php">
      our souls at night 
      </a>
      <p>Romance Movie</p>
    </div>

<!---box17---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p17.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-17.php">
      persuasion
      </a>
      <p>Romance Movie</p>
    </div>

    <!---box18---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p18.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-18.php">
      royal treatment
      </a>
      <p>Romance Movie</p>
    </div>

    <!---box19---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/Romance/a-p/p19.jpg" alt="">
      </div>
      <!---text---->
      <a href="r-19.php">
      set it up
      </a>
      <p>Romance Movie</p>
    </div>


  
</div>
</body>
</html>