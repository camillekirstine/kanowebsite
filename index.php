<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">

    <title>Kano Hair & Beauty</title>
    <link rel="icon" type="image/x-icon" href="images/kanoprofilepic.webp">

    <meta name="robots" content="All">
    <meta name="author" content="Author">
    <meta name="copyright" content="Copyright Camille Kirstine 2023">

    <meta name=”description" content="Unisex salon in the heart of Shawlands">

    <meta name=”robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords"
          content="Hairsalon, Glasgow, Hair, Hairdresser, Kano Hair & Beauty">

    <meta property="og:title" content="Kano Hair & Beauty - Salon"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://camillekirstine.com/kanohair/index.php""/>
    <meta property="og:image" content="https://camillekirstine.com/kanopic/kanoprofilepic.webp"/>
    <meta property="og:description"
          content="Unisex salon in the heart of Shawlands"/>
    <meta property="og:locale" content="en_GB"/>

    <meta itemprop="name" content="Kano Hair & Beauty"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/zqt5oyc.css">
    <script src="https://kit.fontawesome.com/f5df81b727.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            overflow: hidden;
            height: 100%;
        }

        main {
            margin-top: 7rem;
            width: 100vw;
            height: auto;
            position: absolute;
            z-index: 1;
            bottom: 0;
        }

        .navbar {
            background: none;
        }

        .navbar-collapse {
            background: rgba(1,10,48, .9);
        }

        @media (min-width: 60rem) {
            h2 {
                font-size: 20pt;
            }

            .navbar-collapse {
                background: none;
            }
        }

    </style>
</head>

<body>
 <?php include "includes/nav.php"?>

<main>
    <div class="container d-flex align-items-center">
        <div class="row mx-auto mb-5 mb-xl-5 pb-xl-5">
            <div class="col-lg-2"></div>
            <div class="col col-lg-8 mb-5 mb-lg-0 mb-xl-5">
               <picture>
                   <img src="icons/KanoHBLogo.webp" alt="Kano hair and beauty logo">
               </picture>
                <h2 class="text-center text-lightYellow">Unisex salon in the heart of Shawlands</h2>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

    <?php include "includes/footer.php"?>
</main>


 <div class="wallpaper overflow-hidden">
     <video poster="kanoposter.webp" autoplay loop muted>
         <source src="video/kanofrontpage.mp4" type="video/mp4" />
     </video>
 </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
