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
      <img src="images/adventure/a-l/l14.png"/>
    </a>
    </div>
  </section>

  <div class="Title1">
    <div class="box">
      <b>Monster Hunter (2020)</b>
    </div>
  </div>


    <div class="Trailer">
      <a href="https://www.youtube.com/watch?v=3od-kQMTZ9M" target="_blank">
      <button>
        TRAILER <img src="images/play-regular-24.png" alt="">
      </button>
      </a>
      
    </div>



  <div class="label">
    <div class="flex">
      <div class="card">
        <h1><b>Description</b></h1>
        <p>A portal transports Lt. Artemis and an elite unit of soldiers to a strange world where powerful monsters rule with deadly ferocity. Faced with relentless danger, the team encounters a mysterious hunter who may be their only hope to find a way home.</p>
      </div>

      <div class="card">
        <p><b>Released:</b>  2020-12-03</p>
        <p><b>Genre:</b>  Action, Fantasy, Adventure</p>
        <p><b>Casts:</b>  Aaron Beelner, Ron Perlman, Hirona Yamazaki, Adrián Muñoz, Tony Jaa</p>
        <p><b>Duration:</b> 104 min</p>
        <p><b>Country:</b> Germany, China, United States of America, Canada, Japan</p>
        <p><b>Production:</b>  Toho Company, Ltd., Capcom, Screen Gems, Impact Pictures, Constantin Film, Tencent Pictures</p>

      </div>

      <div class="card">
        <h1><b>Links</b></h1>
        <p><a href="http://tinyurl.com/2tpumxx9" target="_blank">http://tinyurl.com/2tpumxx9</a></p>
        <p><a href="http://tinyurl.com/28dfx5f3" target="_blank">http://tinyurl.com/28dfx5f3</a></p>
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
        <img src="images/adventure/a-p/p1.jpg" alt="">
      </div>
      <!---text---->
      <a href="g-1.php">
      amazing spider man 2
      </a>
      <p>Adventure Movie</p>
    </div>

    <!---box2---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/adventure/a-p/p2.jpg" alt="">
      </div>
      <!---text---->
      <a href="g-2.php">
      BATTLE_ LOS ANGELES
      </a>
      <p>Adventure Movie</p>
    </div>

    <!---box3---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/adventure/a-p/p3.jpg" alt="">
      </div>
      <!---text---->
      <a href="g-3.php">
      Battleship 
      </a>
      <p>Adventure Movie</p>
    </div>


    <!---box4---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/adventure/a-p/p4.jpg" alt="">
      </div>
      <!---text---->
      <a href="g-4.php">
      Divergent
      </a>
      <p>Adventure Movie</p>
    </div>


    <!---box5---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/adventure/a-p/p5.jpg" alt="">
      </div>
      <!---text---->
      <a href="g-5.php">
      Dora and the Lost City of Gold
      </a>
      <p>Adventure Movie</p>
    </div>

    <!---box6---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/adventure/a-p/p6.jpg" alt="">
      </div>
      <!---text---->
      <a href="g-6.php">
      how to train dragon 2
      </a>
      <p>Adventure Movie</p>
    </div>

    <!---box7---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/adventure/a-p/p7.jpg" alt="">
      </div>
      <!---text---->
      <a href="g-7.php">
      Journey 2 - The Mysterious Island
      </a>
      <p>Adventure Movie</p>
    </div>

    <!---box8---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/adventure/a-p/p8.jpg" alt="">
      </div>
      <!---text---->
      <a href="g-8.php">
      Jumanji 2 The next level
      </a>
      <p>Adventure Movie</p>
    </div>

<!---box9---->
    <div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/adventure/a-p/p9.jpg" alt="">
      </div>
      <!---text---->
      <a href="g-9.php">
      Jumanji_ Welcome to the Jungle
      </a>
      <p>Adventure Movie</p>
    </div>


  
</div>
</body>
</html>