<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content2'); ?>
<div class="container" style="width: 500px; height: 450px; background-color:#FFE4C4;">
    <br><br>
    <div class="panel panel-default justify-content-center">
        <h2 style="color:#857D6E ;">Daftar Kitty Care Center</h2>
    </div>
    <hr>
    <form>
        <div class="form-group">
            <input type="name" class="form-control" id="InputName1" aria-describedby="emailHelp"
                placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="confirmPassword" class="form-control" id="InputConfirmPassword1"
                placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-light" style="background-color:#857D6E; color:#DDD6C9;">Daftar</button>
    </form>
    <br><br>
</div>
<?= $this->endSection('content2'); ?>