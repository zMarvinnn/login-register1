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
      <img src="images/Romance/a-l/l17.jpg"/>
    </a>
    </div>
  </section>

  <div class="Title1">
    <div class="box">
      <b>Persuasion</b>
    </div>
  </div>


    <div class="Trailer">
      <a href="https://www.youtube.com/watch?v=Fz7HmgPJQak" target="_blank">
      <button>
        TRAILER <img src="images/play-regular-24.png" alt="">
      </button>
      </a>
      
    </div>



  <div class="label">
    <div class="flex">
      <div class="card">
        <h1><b>Description</b></h1>
        <p>Living with her snobby family on the brink of bankruptcy, Anne Elliot is an unconforming woman with modern sensibilities. When Frederick Wentworth - the dashing one she once sent away - crashes back into her life, Anne must choose between putting the past behind her or listening to her heart when it comes to second chances.</p>
      </div>

      <div class="card">
        <p><b>Released:</b>  2022-07-01</p>
        <p><b>Genre:</b> Romance, Drama</p>
        <p><b>Casts:</b> Cosmo Jarvis, Dakota Johnson, Henry Golding, Nikki Amuka-Bird, Richard E. Grant</p>
        <p><b>Duration:</b> 107 min</p>
        <p><b>Country:</b> United States of America</p>
        <p><b>Production:</b> Media Rights Capital</p>

      </div>

      <div class="card">
        <h1><b>Links</b></h1>
        <p><a href="http://tinyurl.com/4kxz9yf4" target="_blank">http://tinyurl.com/4kxz9yf4</a></p>
        <p><a href="http://tinyurl.com/2p9t3mnh" target="_blank">http://tinyurl.com/2p9t3mnh</a></p>
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