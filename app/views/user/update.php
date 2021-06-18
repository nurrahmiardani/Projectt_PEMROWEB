<div class="container mt-5 pt-4">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Daftar</h2>
        <form style="width: 40%;" class="mx-auto mt-4" action="<?= BASEURL ?>/user/update" method="POST">
            <div class="row">
                <div class="col">
                    <?php Flasher::flash() ?>
                </div>
            </div>
            <input type="hidden" name="id" value="<?= $data['user']['id'] ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $data['user']['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $data['user']['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="password_confirm" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" name="password_confirm" id="password">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" name="address" id="address" cols="30" rows="10"><?= $data['user']['address'] ?></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
</div>