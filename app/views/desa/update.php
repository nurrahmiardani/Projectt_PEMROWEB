<div class="container mt-5 pt-5" style="width:40%;">
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Update Desa</h2>
            <div class="row">
                <div class="col">
                    <?php Flasher::flash() ?>
                </div>
            </div>
            <form action="<?= BASEURL ?>/desa/update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data['village']['id'] ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Desa</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['village']['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="kabupaten" class="form-label">Kabupaten</label>
                <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= $data['village']['kabupaten'] ?>">
            </div>
            <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $data['village']['provinsi'] ?>">
            </div>
            <div class="mb-3">
                <label for="jumlah_penduduk" class="form-label">Jumlah Penduduk</label>
                <input type="text" class="form-control" id="jumlah_penduduk" name="jumlah_penduduk" value="<?= $data['village']['jumlah_penduduk'] ?>">
            </div>
            <div class="mb-3">
                <label for="nama_kepala_desa" class="form-label">Nama Kepala Desa</label>
                <input type="text" class="form-control" id="nama_kepala_desa" name="nama_kepala_desa" value="<?= $data['village']['nama_kepala_desa'] ?>">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Desa (jika ada)</label>
                <input class="form-control" type="file" id="foto" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Update Desa</button>
            </form>
        </div>
    </div>
</div>