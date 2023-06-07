<html lang="en">


<head>
    <meta charset="utf-8">

    <title>Kano Hair & Beauty - Products</title>

    <meta name="robots" content="All">
    <meta name="author" content="Author">
    <meta name="copyright" content="Copyright Camille Kirstine 2023">

    <meta name=”description" content='Learn more about the products we use in the salon'>

    <meta name=”robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords"
          content="Goldwell, Goldwell UK and Ireland, Goldwell UK, Haircolour, Balayage, Colour, Haircare">

    <meta property="og:title" content="Kano Hair & Beauty - Products"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="#"/>
    <meta property="og:image" content="https://camillekirstine.com/kanopic/kanoprofilepic.webp"/>
    <meta property="og:description"
          content="Learn more about the products we use in the salon"/>
    <meta property="og:locale" content="en_GB"/>

    <meta itemprop="name" content="Kano Hair & Beauty"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/zqt5oyc.css">
    <script src="https://kit.fontawesome.com/f5df81b727.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        main {
            margin-top: 7rem;
            height: calc(100vh - 7vh);
        }
        .navbar {
            background: rgba(1,10,48, .8);
        }
    </style>
</head>

<body>
<?php include "includes/nav.php"?>

<article class="localnav fixed-top mt-5 pt-3">
    <?php include "includes/aboutnav.php"?>
</article>

<main>
    <section class="pt-3 pt-lg-5 ms-lg-5 pb-lg-5 mb-lg-2">
        <article>
            <div class="row ms-xl-2">
                <div class="col col-lg-6 col-xl-5 text-center text-lg-start pe-lg-5 ps-xl-5 pt-xl-5">
                    <h1>products</h1>
                    <h2 class="pe-2 px-3 px-lg-0 pe-lg-0 pb-lg-2 mx-3 mx-lg-0">We pride ourselves on quality, that’s why we use the best products!</h2>

                    <div class="text-coldPink theSalonTextDesktop">
                        <p>
                            Because quality is such an important thing for us, we’re a Goldwell Salon. Goldwell has some of the best products on the market,
                            and offers a wide variety of lines, so we’ll be able to use exactly what suits your hair.
                        </p>
                        <br>
                        <p class="pb-xl-4">
                            For more information on Goldwell, click the button below and step into a world of colour and styling.
                        </p>

                        <button class="my-4 py-2 mt-xl-5" type="button">
                            <a class="p-5" href="https://www.goldwell.com/en-gb/home/" target="_blank">Learn more</a>
                        </button>
                    </div>
                </div>

                <div class="row col-lg-6 mx-auto py-lg-3 pe-lg-5">
                    <img class="framed mx-auto" src="images/productsframe.webp">
                </div>
            </div>
        </article>
    </section>


    <section class="mt-2 mx-3 mb-3 text-coldPink text-center theSalonTextMobile">
        <article>
            <div class="row px-3">
                <div class="col">
                    <p>
                        Because quality is such an important thing for us, we’re a Goldwell Salon. Goldwell has some of the best products on the market,
                        and offers a wide variety of lines, so we’ll be able to use exactly what suits your hair.
                    </p>
                    <br>
                    <p>
                        For more information on Goldwell, click the button below and step into a world of colour and styling.
                    </p>

                    <button class="my-4 py-2" type="button">
                        <a class="p-5" href="https://www.goldwell.com/en-gb/home/" target="_blank">Learn more</a>
                    </button>
                </div>
            </div>
        </article>
    </section>

    <section>
        <picture class="salonpics">
            <div class="row g-0">
                <div class="col-4"><img alt="Picture of products with blue overlay" src="images/productblue.webp"></div>
                <div class="col-4"><img alt="Picture of products with pink overlay" src="images/productpink.webp"></div>
                <div class="col-4"><img alt="Picture of products with yellow overlay" src="images/productyellow.webp"></div>
            </div>
        </picture>
    </section>

    <?php include "includes/footer.php"?>
</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>