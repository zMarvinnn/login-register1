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
      <img src="images/adventure/a-l/l24.jpg"/>
    </a>
    </div>
  </section>

  <div class="Title1">
    <div class="box">
      <b>World War Z</b>
    </div>
  </div>


    <div class="Trailer">
      <a href="https://www.youtube.com/watch?v=Md6Dvxdr0AQ" target="_blank">
      <button>
        TRAILER <img src="images/play-regular-24.png" alt="">
      </button>
      </a>
      
    </div>



  <div class="label">
    <div class="flex">
      <div class="card">
        <h1><b>Description</b></h1>
        <p>Life for former United Nations investigator Gerry Lane and his family seems content. Suddenly, the world is plagued by a mysterious infection turning whole human populations into rampaging mindless zombies. After barely escaping the chaos, Lane is persuaded to go on a mission to investigate this disease. What follows is a perilous trek around the world where Lane must brave horrific dangers and long odds to find answers before human civilization falls.</p>
      </div>

      <div class="card">
        <p><b>Released:</b> 2013-06-20</p>
        <p><b>Genre:</b> Action, Drama, Horror, Science Fiction, Thriller</p>
        <p><b>Casts:</b> Brad Pitt, Mireille Enos, Abigail Hargrove, Sterling Jerins, James Badge Dale</p>
        <p><b>Duration:</b> 116 min</p>
        <p><b>Country:</b> United States of America, Malta</p>
        <p><b>Production:</b> GK Films, Paramount, Hemisphere Media Capital, 2DUX², Apparatus Productions, Latina Pictures, Skydance Media</p>

      </div>

      <div class="card">
        <h1><b>Links</b></h1>
        <p><a href="http://tinyurl.com/5n8khejz" target="_blank">http://tinyurl.com/5n8khejz</a></p>
        <p><a href="http://tinyurl.com/4xv688ev" target="_blank">http://tinyurl.com/4xv688ev</a></p>
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