<div class="container mt-5">

    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['sws']['nama'];?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['sws']['nis'];?></h6>
        <p class="card-text"><?= $data['sws']['email'];?></p>
        <p class="card-text"><?= $data['sws']['jurusan'];?></p>
        <a href="<?= BASEURL;?>/siswa" class="card-link">Kembali</a>
    </div>
    </div>

</div>