<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<nav class="nav justify-content-center">
    <div class="title">
        <h3 class="quicksandBold-font">Follow us on Sosial Media</h3>
    </div>
</nav>
<br>
<nav class="nav justify-content-center">
    <ul>
        <li>
            <span>
                <img src="https://adopsi.org/images/home/icon-instagram.svg" alt="@adopsiapp" width="25">
            </span>
            <a href="https://www.instagram.com/kittycare_center/" target="_blank">@kittycare_center</a>
        </li>
        <br>
        <li>
            <span>
                <img src="https://adopsi.org/images/home/icon-fb.svg" alt="Adopsi" width="25">
            </span>
            <a href="https://www.facebook.com/adopsiapp" target="_blank">KittyCareCenter</a>
        </li>
    </ul>
</nav>
<br><br>
<?= $this->endSection('content'); ?>