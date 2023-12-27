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
      <img src="images/horror/a-l/l4.jpg"/>
    </a>
    </div>
  </section>

  <div class="Title1">
    <div class="box">
      <b>Bird Box</b>
    </div>
  </div>


    <div class="Trailer">
      <a href="https://www.youtube.com/watch?v=MPWMBITCudM" target="_blank">
      <button>
        TRAILER <img src="images/play-regular-24.png" alt="">
      </button>
      </a>
      
    </div>



  <div class="label">
    <div class="flex">
      <div class="card">
        <h1><b>Description</b></h1>
        <p>Five years after an ominous unseen presence drives most of society to suicide, a survivor and her two children make a desperate bid to reach safety.</p>
      </div>

      <div class="card">
        <p><b>Released:</b> 2018-12-13</p>
        <p><b>Genre:</b>  Thriller, Drama, Science Fiction, Horror</p>
        <p><b>Casts:</b>  Danny Max, Jacki Weaver, Happy Anderson, Pruitt Taylor Vince, Taylor Handley</p>
        <p><b>Duration:</b> 124 min</p>
        <p><b>Country:</b> United States of America</p>
        <p><b>Production:</b>  Universal Pictures, Bluegrass Films, Chris Morgan Productions</p>

      </div>

      <div class="card">
        <h1><b>Links</b></h1>
        <p><a href="http://tinyurl.com/382w7uns" target="_blank">http://tinyurl.com/382w7uns</a></p>
        <p><a href="http://tinyurl.com/yrrnvhkh" target="_blank">http://tinyurl.com/yrrnvhkh</a></p>
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

    <!---box13---->
<div class="movies-box">
      <!---img---->
      <div class="movies-img">
      <div class="quality">HD</div>
        <img src="images/horror/a-p/p13.jpg" alt="">
      </div>
      <!---text---->
      <a href="h-13.php">
      Pope_s Exorcist 
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