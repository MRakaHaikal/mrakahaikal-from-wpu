<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
                <?php Flasher::flash();?>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Siswa
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Search form -->
            <form action="<?= BASEURL;?>/siswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari siswa..." name="keyword" id="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari" autocomplete="off">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Daftar Siswa</h3>
            <ul class="list-group">
                <?php foreach( $data['sws'] as $sws ):?>
                    <li class="list-group-item ">
                        <?= $sws['nama'];?> 
                        <a href="<?= BASEURL;?>/siswa/hapus/<?= $sws['id'];?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">hapus</a>
                        <a href="<?= BASEURL;?>/siswa/edit/<?= $sws['id'];?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $sws['id']; ?>">edit</a>
                        <a href="<?= BASEURL;?>/siswa/detail/<?= $sws['id'];?>" class="badge badge-primary float-right ml-1">detail</a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>

</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="<?= BASEURL;?>/siswa/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="number" class="form-control" id="nis" name="nis">
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Manufaktur">Teknik Manufaktur</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Sastra Jepang">Sastra Jepang</option>
                        <option value="Sastra Inggris">Sastra Inggris</option>
                        <option value="Sastra Arab">Sastra Arab</option>
                    </select>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
                </div>
        </div>
    </div>
</div>