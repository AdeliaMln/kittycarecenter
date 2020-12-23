<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Kitty Care Center</title>
    <link rel="icon" type="image/png" href="img/home.png">
    <style type="text/css">
    /* body {
        background: url(img/kucing7.jpg) repeat;
        background-size: tile;
        background-attachment: fixed;
    } */

    .footercopyright {
        font-size: medium;
        text-align: center;
        padding: 20px 0px 20px 0px;
        background-color: #343a40;
        color: white;
    }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #857D6E;">
        <a class="navbar-brand" href="/">
            <img src="img/home.png" width="50" height="50">
            Kitty Care Center
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Adopsi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/meows-up">Meows-up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/interme-ow">Interme-ow</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/donasi">Donasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/petcare">Pet Care</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hubungikami">Hubungi Kami</a>
                </li>
                <li>
                    <div class="nav-item dropdown ml-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="img/user.png" width="25" height="25">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/daftar">Daftar</a>
                            <a class="dropdown-item" href="/masuk">Masuk</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/masuk">Keluar</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <nav class="nav justify-content-center" style="background-color: #DDD6C9;">
        <img src="img/header1.jpg" width="1200" height="350">
    </nav>
    <hr>
    <br>

    <?= $this->renderSection('content'); ?>
    <br><br>



    <div class="footercopyright justify-content-center" style="background-color: #857D6E;">
        <p class="text-center" style="color: #DDD6C9;">
            <b>©&nbsp;2020 Develope with </b>
            <b>love by Hana, Windu, Adel, dan Nina</b>
            <br>Dibuat untuk memenuhi tugas Mata Kuliah Pemrograman Web 2020
        </p>
    </div>
    <!-- <footer class="footer mt-auto py-3" style="background-color: #857D6E;">
        <div class="container">
            <p class="text-center" style="color: #DDD6C9;">
                <b>©&nbsp;2020 Develope with </b>
                <b>love by Hana, Windu, dan Adel</b>
            </p>
            <p class="text-center" style="color: #DDD6C9;">
                Dibuat untuk memenuhi tugas Mata Kuliah Pemrograman Web 2020
            </p>
        </div>
    </footer> -->
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

</html>