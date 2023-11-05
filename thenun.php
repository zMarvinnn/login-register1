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
    <a href="thenun.php" class="s3">
      <img src="images/s3.jpg"/>
    </a>
    </div>
  </section>

  <div class="Title1">
    <div class="box">
      <b>The Nun II</b>
    </div>
  </div>

  <div class="label">
    <div class="flex">
      <div class="card">
        <h1><b>Description</b></h1>
        <p>Set four years after the ending of the the nun, this follows Sister Irene as she investigates a murder at a boarding school in France. While investigating she is once again forced to face the demonic force Valak, the Nun.</p>
      </div>

      <div class="card">
        <p><b>Released:</b> 2023-09-06</p>
        <p><b>Genre:</b> Horror, Mystery, Thriller</p>
        <p><b>Casts:</b> ssa Farmiga, Jonas Bloquet, Bonnie Aarons, Storm Reid, Katelyn Rose Downey</p>
        <p><b>Duration:</b> 110 min</p>
        <p><b>Country:</b> United States of America</p>
        <p><b>Production:</b> New Line Cinema, Atomic Monster, The Safran Company</p>

        
      </div>

      <div class="card">
        <h1><b>Links</b></h1>
        <p>#</p>
      </div>


    </div>
  </div>

  </section>




  
</div>
</body>
</html>