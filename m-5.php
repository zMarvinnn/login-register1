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
    <a href="m-5.php" class="s1">
      <img src="images/landscape/m5.png"/>
    </a>
    </div>
  </section>

  <div class="Title1">
    <div class="box">
      <b>Saw X</b>
    </div>
  </div>


    <div class="Trailer">
      <a href="https://www.youtube.com/watch?v=t3PzUo4P21c" target="_blank">
      <button>
        TRAILER <img src="images/play-regular-24.png" alt="">
      </button>
      </a>
      
    </div>



  <div class="label">
    <div class="flex">
      <div class="card">
        <h1><b>Description</b></h1>
        <p>Between the events of 'Saw' and 'Saw II', a sick and desperate John Kramer travels to Mexico for a risky and experimental medical procedure in hopes of a miracle cure for his cancer, only to discover the entire operation is a scam to defraud the most vulnerable. Armed with a newfound purpose, the infamous serial killer returns to his work, turning the tables on the con artists in his signature visceral way through devious, deranged, and ingenious traps.</p>
      </div>

      <div class="card">
        <p><b>Released:</b> 2023-09-26</p>
        <p><b>Genre:</b> Horror</p>
        <p><b>Casts:</b> Tobin Bell, Shawnee Smith, Synnøve Macody Lund, Renata Vaca, Paulette Hernández</p>
        <p><b>Duration:</b> 118 min</p>
        <p><b>Country:</b> United States of America</p>
        <p><b>Production:</b> Twisted Pictures, Lionsgate</p>

      </div>

      <div class="card">
        <h1><b>Links</b></h1>
        <p><a href="https://bit.ly/3taszlX" target="_blank">https://bit.ly/3taszlX</a></p>
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


  
</div>
</body>
</html>