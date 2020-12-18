<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mr-auto">
                <div class="container">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 500px">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/kucing3.jpg" class="d-block w-100 h-60" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/kucing6.jpg" class="d-block w-100 h-70" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white" style="max-width: 50rem; max-height:max-content; background-color:#857D6E;">
                <div class="card-header">
                    <h1>Tentang Kami</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">Website kami adalah sebuah web yang mewadahi para pencinta kucing agar bisa
                        mengadopsi
                        kucing-kucing liar di luar sana yang sesuai dengan kriteria mereka. Seperti halnya manusia,
                        kucing-kucing di luar sana juga layak untuk mendapatkan kasih sayang dari sesama makhluk hidup.
                    </p>
                    <p class="card-text"> Selain menjadi wadah untuk mengadopsi, website kami juga disertai dengan
                        ulasan-ulasan
                        yang berkaitan dengan kucing untuk menambah pengetahuan dalam dunia perkucingan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr><br>


<div class="container">
    <h1>Galeri Kami</h1>
    <br>
    <div class="card-group">
        <div class="card">
            <img src="img/kucing4.jpg" class="card-img-top" width="200" height="250" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/kucing1.jpeg" class="card-img-top" width="200" height="250" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/kucing2.jpg" class="card-img-top" width="200" height="250" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="card-group">
        <div class="card">
            <img src="img/kucing4.jpg" class="card-img-top" width="200" height="250" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/kucing1.jpeg" class="card-img-top" width="200" height="250" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/kucing2.jpg" class="card-img-top" width="200" height="250" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
            </div>
        </div>
    </div>
</div>

<hr><br><br>



<?= $this->endSection(); ?>