<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Where am I</title>
</head>

<body>

    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 25rem;">
        <h3 class="mb-0 p-2">Where am I ?</h3>
        <p class=" p-2 mb-5">This site will show you how we identify each user's device in the internet. There is someting called IP, and it show your approximate location for... everyone.</p>
        <form action="location.php">
            <button type="submit" class="btn btn-primary position-absolute bottom-0 end-0 mb-2 me-2">Where am I ?</button>
        </form>
    </div>

    <?php if (isset($_SESSION['location']->city)) : ?>
        <div class="alert alert-primary mt-5 mx-auto" style="width: 25rem;">

            <img src="<?= $_SESSION['location']->country_flag ?>" class="position-absolute top-0 end-0 mt-2 me-2" width="64px" height="45px">

            <p>You are at <span class="fw-bolder"><?= $_SESSION['location']->city ?></span></p>
            <p>your internet provider is: <br>
                <span class="fw-bolder"><?= $_SESSION['location']->organization ?></span>
            </p>

        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['location']->message)) : ?>
        <div class="alert alert-warning mt-5 mx-auto d-flex align-items-center" style="width: 25rem;">

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>

            <p class="mb-0 ps-2">You are in a private IP. It can't find your location</p>

        </div>
    <?php endif; ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
