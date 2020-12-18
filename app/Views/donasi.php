<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <center>
        <h2>Ayo Donasi</h2>
    </center>
    <hr>
    <!-- <form>
        <div class="form-grup">
            <input type="name" class="form-control" id="inputnama" placeholder="Nama Lengkap">
        </div>
        <div class="form-grup">
            <input type="email" class="form-control" id="inputemail" placeholder="Email">
        </div> -->

    <form>
        <div class="form-group">
            <input type="name" class="form-control" id="InputName1" aria-describedby="emailHelp"
                placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="InputID" aria-describedby="emailHelp"
                placeholder="No Identitas (KTP)">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="InputAddress" aria-describedby="emailHelp" placeholder="Alamat">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" id="InputNumber" aria-describedby="emailHelp"
                placeholder="Nomor Handphone">
            <br>
            <div class="form-grup">
                <label for="inputpaket" class="form-label">Jenis Donasi</label>
                <select id="inputpaket" class="form-select">
                    <option selected>Silahkan Pilih</option>
                    <option value="pengobatan">
                        Pengobatan
                    </option>

                    <option value="Obat Cacing  Tetes Kutu">
                        Obat Cacing &amp; Tetes Kutu
                    </option>

                    <option value="Sterilisasi Jantan ">
                        Sterilisasi Jantan
                    </option>

                    <option value="Sterilisasi Betina ">
                        Sterilisasi Betina
                    </option>

                    <option value="TNR Kecil 5 kucing">
                        TNR Kecil (5 kucing)
                    </option>

                    <option value="TNR Besar 10 kucing">
                        TNR Besar (10 kucing)
                    </option>
                </select>
            </div>
            <div class="form-group">
                <input type="total" class="form-control" id="InputTotal" aria-describedby="emailHelp"
                    placeholder="Jumlah">
            </div>

            <!-- <div class="col-12"> -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Setuju
                </label>
            </div>
            <!-- </div> -->
            <!-- <div class="col-12"> -->
            <a class="btn btn-primary" href="/donasi/pembayaran" role="button">Donasi</a>
            <!-- </div> -->
    </form>
</div>

<br><br>

<?= $this->endSection('content'); ?>