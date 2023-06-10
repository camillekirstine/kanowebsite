<?php
require "settings/init.php";
$id = $_GET['staffId'];
$staffInfo = $db->sql("SELECT * FROM staffinfo WHERE staffId = :staffId", [':staffId' => $id]);
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">

    <title>Kano Hair & Beauty - Meet the stylists</title>

    <meta name="robots" content="All">
    <meta name="author" content="Author">
    <meta name="copyright" content="Copyright Camille Kirstine 2023">

    <meta name=”description" content='Meet the stylists at Kano Hair & Beauty'>

    <meta name=”robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords"
          content="Hairstylist, curly hair specialist, hair colour specialist, hairstyle, hairstyling">

    <meta property="og:title" content="Kano Hair & Beauty - Stylists"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="#"/>
    <meta property="og:image" content="https://camillekirstine.com/kanopic/kanoprofilepic.webp"/>
    <meta property="og:description"
          content="Meet the stylists at Kano Hair & Beauty"/>
    <meta property="og:locale" content="en_GB"/>

    <meta itemprop="name" content="Kano Hair & Beauty"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/zqt5oyc.css">
    <script src="https://kit.fontawesome.com/f5df81b727.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>



<?php include "includes/nav.php"?>

<article class="localnav fixed-top mt-5 pt-3">
    <?php include "includes/aboutnav.php"?>
</article>

<main class="mt-5 pt-5 pt-lg-5">
    <section>
        <div class="row mt-4 mt-lg-5 mb-4">
            <div class="col-12 col-lg-8 col-xl-6 text-center mx-auto">
                <h1>meet the stylist</h1>
                <h2>Here you can read more about our stylists.  </h2>
                <p class="text-coldPink px-3 ps-xl-5 pe-xl-5">Our stylists are highly trained in both haircuts and colours, and are always open for a chat about your dream hair.
                    We pride ourselves on providing quality services, along with a friendly and relaxed atmosphere.</p>
            </div>
        </div>
    </section>

    <section class="staff mx-auto mb-4 mb-lg-5">
    </section>


    <?php include "includes/footer.php"?>

</main>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script type="module">
    import KanoStaff from "./js/staffinfo.js";

    const staff = new KanoStaff();
    staff.init();
</script>
</body>
</html>
