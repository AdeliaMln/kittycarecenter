<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content2'); ?>
<div class="container" style="width: 500px; height: 400px; background-color: #FFE4C4;">
    <br><br>
    <div class="panel panel-default justify-content-center">
        <h2 style="color:#857D6E;">Masuk Kitty Care Center</h2>
    </div>
    <hr>
    <form>
        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="username or email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">ingat saya</label>
        </div>
        <button type="submit" class="btn btn-light" style="background-color:#857D6E; color:#DDD6C9;">Masuk</button>
    </form>
    <br><br>
</div>



<?= $this->endSection('content2'); ?>