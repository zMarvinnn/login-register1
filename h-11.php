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
      <img src="images/horror/a-l/l11.jpg"/>
    </a>
    </div>
  </section>

  <div class="Title1">
    <div class="box">
      <b>Kuwaresma</b>
    </div>
  </div>


    <div class="Trailer">
      <a href="https://www.youtube.com/watch?v=l1SsObjIMoo" target="_blank">
      <button>
        TRAILER <img src="images/play-regular-24.png" alt="">
      </button>
      </a>
      
    </div>



  <div class="label">
    <div class="flex">
      <div class="card">
        <h1><b>Description</b></h1>
        <p>Luis finds out that his twin has just died, and comes back home to find out the cause of her death. He soon realizes that the darkness in their house never left.</p>
      </div>

      <div class="card">
        <p><b>Released:</b> 2023-08-09</p>
        <p><b>Genre:</b> Horror, Mystery & Thriller</p>
        <p><b>Casts:</b> Sharon Cuneta, John Arcilla, Kent Gonzales, Pam Gonzales</p>
        <p><b>Duration:</b> 128 Min.</p>
        <p><b>Country:</b> Philippines</p>
        <p><b>Production:</b> Reality Entertainment Inc.</p>

      </div>

      <div class="card">
        <h1><b>Links</b></h1>
        <p><a href="http://tinyurl.com/3yz67ket" target="_blank">http://tinyurl.com/3yz67ket</a></p>
        <p><a href="http://tinyurl.com/ys539ust" target="_blank">http://tinyurl.com/ys539ust</a></p>
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