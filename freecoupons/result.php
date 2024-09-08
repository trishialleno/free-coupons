<?php
session_start();
$name = isset($_SESSION['txtname']) ? $_SESSION['txtname'] : "";
$index = isset($_SESSION['index']) ? $_SESSION['index'] : 0;

if(isset($_POST['reset'])){
    $_SESSION['index'] = 10;
    unset($_SESSION['txtname']);
    header("Location: freecoupons.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Discount Code</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Submitted Entry of Feedback Form">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="position-absolute top-50 start-50 translate-middle border border-dark rounded-4 p-5">
        <h1 class="mb-3 text-center">Welcome Customer!</h1>
        <p class="fs-6">We're giving away <span class="fw-bold">free coupons</span> as a token of appreciation</p>
        <p class="text-center">Hi, <?= $name ?>! Thank you for being our valued customer!</p>
        <p class="text-center"><?= $index ?> free coupons left</p>

        <div class="border border-black bg-warning bg-opacity-25">

            <h2 class="text-center">50% Discount Code: <span class="fs-1 text-danger d-block"><?= rand(1000000, 9999999); ?></span></h2>
        </div>
        <form action="freeCoupons.php" method="post">
            <input type="submit" class="btn btn-success mt-5 d-inline" value="Claim Again">
        </form>
        <form method="post">
            <input type="submit" class="btn btn-danger" style="position: absolute; right:50px; bottom:50px ;" value="Reset Count" name="reset"> 
        </form>
    </body> 
</html>
