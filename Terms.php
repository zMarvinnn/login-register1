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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MovMax</title>
    <link rel="shortcut icon" href="images/Movmax.png"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>

<section>
<div>
  <nav>
    <a href="index.php" class="logo">
      <img src="images/Movmax.png"/>
    </a>
    <u class="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="#">categories</a></li>
      <li><a href="footer1.php">Horror</a></li>
      <li><a href="#">About</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </u>
    <div class="search">
      <input type="text" placeholder="Find your Favorite Movies Here"/>
      <i class="fas fa-search"></i>
    </div>
</section>

<!------------------------------------------------Terms----------------------------------------->

<section>
    <div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Service</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <header class="header-mobile dark-theme">
            <h3 class="title-mobile"> beCoditive API </h3>
    </header>

    <section id="terms-of-service">
        <div class="card">
            <h1 class="primary-heading">Terms of Service</h1>
            <p class="paragraph">
                The whole set of terms and conditions governing your use of our site is contained in this Agreement. Please carefully read these conditions of use if you want to use the site, its tools, and services. You accept these terms and conditions by using this website, accessing any portion of it, or utilizing any of its services or content. You are not permitted to use the site, its services, or its content if you do not accept all of its terms and conditions. <br> <br>

                <br><br><br>
                <span class="bold">2) Modifications of Terms and Conditions</span>
                <br><br>
                 We may periodically make and implement changes to this agreement without providing you any further notice. Before using our site, you should carefully check the agreement displayed on it as it reflects the most recent version.
                <br><br>
                <span class="bold">3) Use of the site</span>
                <br><br>
                You can bid, sell, advertise, publish offers, and shop online using the site. The following, however, are forbidden: (a) using our sites, including its services and/or tools, if you are not of legal age, are not able to form legally binding contracts, or are temporarily or permanently suspended from using our sites, services, or tools; (b) posting items in inappropriate categories or areas on our sites and services; (c) gathering personal information about users; (d) manipulating the price of any item or interfering with other users' listings; (f) posting false, inaccurate, misleading, defamatory, or libelous content; and (g) engaging in any activity that could harm the rating system.
                <br><br><br>
                <span class="bold">4) Registration Information</span>
                <br><br>
                You must enter your complete legal name, current address, working email address, member name, and any additional information requested in order to finish the sign-up procedure on our website. You must meet the requirements of being at least eighteen years old, be in charge of protecting the confidentiality of your password, and be accountable for all actions and materials published under your account. It is forbidden for you to send any viruses, worms, or damaging codes. Any information you submit or that the website or third parties collect while you are on the site is governed by the provisions of the privacy policy on YesMovies.to. 
                <br><br><br>
            </p>
        </div>
    </section>
</body>
</html>
    </div>
</section>


    

    


    
    



  




<!------------------------------------------------Footer----------------------------------------->

<section>
<footer>
    <div class="footerContainer">
          <div class="socialIcons">
            <a href="https://www.facebook.com/zMarvinnn/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/mrvncbs/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com/_MaisieAsie" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UC2Vo05PVFE25squ7g_-DmYg" target="_blank"><i class="fa-brands fa-youtube"></i></a>
          </div>
          <div class="footerNav">
              <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="">Terms of service</a></li>
                  <li><a href="">Contact</a></li>
                  <li><a href="">About</a></li>
            </ul>
          </div>
      </div>

      <div class="footerBottom">
            <p>Copyright &copy;2023; Design by <span class="designer">Marvin Cabusas</span> </p>
      </div>
  </footer>
</section>

</body>
</html>