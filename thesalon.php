<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">

    <title>Kano Hair & Beauty - The salon</title>

    <meta name="robots" content="All">
    <meta name="author" content="Author">
    <meta name="copyright" content="Copyright Camille Kirstine 2023">

    <meta name=”description" content='Information about the salon'>

    <meta name=”robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords"
          content="Hairsalon, Glasgow, Salon, Beauty Shawlands, Beauty, Dog friendly, Glasgow hairdresser">

    <meta property="og:title" content="Kano Hair & Beauty - Salon"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="#"/>
    <meta property="og:image" content="https://camillekirstine.com/kanopic/kanoprofilepic.webp"/>
    <meta property="og:description"
          content="Information about the salon"/>
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
            height: calc(100vh - 6vh);
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
                <div class="col col-lg-6 col-xl-5 text-center text-lg-start pe-lg-5 pt-xl-5 ps-xl-5">
                    <h1>the salon</h1>
                    <h2 class="pe-2 pe-lg-0 pb-lg-2">Kano Hair & Beauty is a unisex salon, based in Shawlands - the heart of Glasgow Southside.</h2>

                    <div class="text-coldPink theSalonTextDesktop">
                        <p>
                            Located on Kilmarnock Road, close to public transportation and parking it’s easy to access the salon.
                        </p>
                        <br>
                        <p>
                            The space is cosy and airy, as we want our guests to feel comfortable and at home. This goes for humans as well as
                            dogs, as we are a dog friendly salon you’re more than welcome to bring your little loved one with you.
                        </p>
                        <br>
                        <p>
                            So sit back, relax and enjoy some self-pampering!
                        </p>
                    </div>
                </div>

                <div class="row col-lg-6 mx-auto py-lg-3 pe-lg-5">
                    <img class="framed mx-auto" src="images/thesalonframe.webp">
                </div>
            </div>
        </article>
    </section>


    <section class="mt-2 mx-3 mb-3 text-coldPink text-center theSalonTextMobile">
        <article>
            <div class="row px-3">
                <div class="col">
                    <p>
                        Located on Kilmarnock Road, close to public transportation and parking it’s easy to access the salon.
                    </p>
                    <br>
                    <p>
                        The space is cosy and airy, as we want our guests to feel comfortable and at home. This goes for humans as well as
                        dogs, as we are a dog friendly salon you’re more than welcome to bring your little loved one with you.
                    </p>
                    <br>
                    <p>
                        So sit back, relax and enjoy some self-pampering!
                    </p>
                </div>
            </div>
        </article>
    </section>

    <section>
        <picture class="salonpics">
            <div class="row g-0">
                <div class="col-3"><img alt="Kano front with blue overlay" src="images/thesalonfrontblue.webp"></div>
                <div class="col-3"><img alt="The backwash" src="images/thesalonbackwash.webp"></div>
                <div class="col-3"><img alt="Work in the salon with pink overlay" src="images/thesalonworkpink.webp"></div>
                <div class="col-3"><img alt="Hair products" src="images/thesalonproducts.webp"></div>
            </div>
        </picture>
    </section>

    <?php include "includes/footer.php"?>
</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
