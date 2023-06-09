<?php
require "settings/init.php";

if(!empty($_POST["data"])) {
    $data = $_POST["data"];
    $file = $_FILES;

    if(!empty($file["staffPicOverlay"]["tmp_name"]) && !empty($file["staffPicFramed"]["tmp_name"])){
        move_uploaded_file($file["staffPicOverlay"]["tmp_name"], "uploads/" . basename($file["staffPicOverlay"]["name"]));
        move_uploaded_file($file["staffPicFramed"]["tmp_name"], "uploads/" . basename($file["staffPicFramed"]["name"]));
    }

    $sql = "INSERT INTO staffInfo (staffName, staffDescription, staffPicOverlay, staffPicFramed) VALUES(:staffName, :staffDescription, :staffPicOverlay, :staffPicFramed)";
    $bind = [":staffName" => $data["staffName"],
        ":staffDescription" => $data["staffDescription"],
        ":staffPicOverlay" => (!empty($file["staffPicOverlay"]["tmp_name"])) ? $file["staffPicOverlay"]["name"] : NULL,
        ":staffPicFramed" => (!empty($file["staffPicFramed"]["tmp_name"])) ? $file["staffPicFramed"]["name"] : NULL];

    $db->sql($sql, $bind, false);

    echo "<div>
<h1>Your data has now been added</h1>
<a href='dbinsert.php'>Click here to add another staff member</a>
</div>",
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Database editing page</title>

    <meta name="robots" content="None">
    <meta name="author" content="Author">
    <meta name="copyright" content="Copyright Camille Kirstine 2023">
    <meta name=”description" content='Gallery of our work'>
    <meta name=”robots" content="noindex, nofollow">

    <meta itemprop="name" content="Kano Hair & Beauty Staff Database"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/zqt5oyc.css">
    <script src="https://kit.fontawesome.com/f5df81b727.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/sxyul2dverakco1agbdw63xorlfruj04q43vpaw8d25nnk4q/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<div class="container-fluid">
    <header>
        <div class="row mx-auto">
            <div class="col">
                <a href="index.php"><img alt="Kano hair and beauty logo" class="mx-auto d-block" src="icons/kanologo.webp"></a>
            </div>
        </div>

        <div class="row text-center">
            <div class="col">
                <h1>Staff Information</h1>
                <p class="text-coldPink">On this page you can add staff information to your staff database.</p>
            </div>
        </div>
    </header>
</div>

<section>
    <div class="container">
        <form method="post" action="dbinsert.php" enctype="multipart/form-data">
            <div class="row mt-2">
                <div class="col">
                    <div class="form-group">
                        <label class="text-coldPink" for="staffName">Name</label>
                        <input class="form-control" type="text" name="data[staffName]" id="staffName" placeholder="Name" value="">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <label class="text-coldPink" for="staffDescription">Description</label>
                    <textarea class="form-control" name="data[staffDescription]" id="staffDescription"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-6">
                    <label class="text-coldPink form-label" for="staffPicOverlay">Photo for staff overview</label>
                    <input type="file" class="form-control" id="staffPicOverlay" name="staffPicOverlay">
                </div>
                <div class="col-6">
                    <label class="text-coldPink form-label" for="staffPicFramed">Photo for personal information</label>
                    <input type="file" class="form-control" id="staffPicFramed" name="staffPicFramed">
                </div>
            </div>

            <div class="row text-center mt-3">
                <div class="col">
                    <button class="form-control btn bg-lightYellow text-navyBlue w-25" type="submit" id="btnSubmit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>


<script>
    tinymce.init({
        selector: "textarea",
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>