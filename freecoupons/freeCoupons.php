<?php
session_start();
if (!isset($_SESSION['index'])) {
    $_SESSION['index'] = 10;
}
if (isset($_POST['submit'])) {
    if ($_SESSION['index'] > 0) {
        $_SESSION['index']--;
        $_SESSION['txtname'] = $_POST['name'];
        header("Location: result.php");
        exit();
    } else {
        echo "<script>alert('Sorry, free coupons are now unavailable.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Free Coupons</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Coupons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body class="position-absolute top-50 start-50 translate-middle border border-dark rounded-4 p-5">
        <h1 class="mb-3 text-center">Welcome Customer!</h1>
        <p class="fs-6">We're giving away <span class="fw-bold">free coupons</span> as a token of appreciation for the first <?= $_SESSION['index']; ?> customer(s)</p>
        <form method="POST">
            <label for="name" class="d-block form-label mt-5">Kindly type your name:</label>
            <input type="text" class="d-block form-control" name="name">
            <input type="submit" name="submit" class="d-block btn btn-success mt-3 position-relative bottom-0 start-50 translate-middle-x">
        </form>
    </body>
</html>
