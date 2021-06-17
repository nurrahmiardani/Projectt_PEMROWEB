<div class="container mt-5 pt-4">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Login</h2>
        <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
        <form style="width: 40%;" class="mx-auto mt-4" action="<?= BASEURL ?>/auth/login" method="POST">
            <div class="row">
                <div class="col">
                    <?php Flasher::flash() ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>
</div>