        <div class="row">
                <div class="col">
                    <?php Flasher::flash() ?>
                </div>
            </div>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Daftar Desa</h2>
                    <h3 class="section-subheading text-muted">Pilih Desa Sesuai Potensimu</h3>
                    <a class="btn btn-primary btn-xl text-uppercase" href="#services">Cari Desa</a>
                </div><br><br><br>
                <div class="row">
                    <?php foreach($data['villages'] as $key => $village): ?>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <!-- portofolio loop -->
                            <!-- Portfolio item 1-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#item<?= $key ?>">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="<?= BASEURL ?>/images/foto-desa/<?= $village['foto'] ?>" alt="..." />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading"><?= $village['nama'] ?></div>
                                        <div class="portfolio-caption-subheading text-muted"><?= "{$village['kabupaten']}, {$village['provinsi']}" ?></div>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        
        <!-- Portfolio item 1 modal popup-->
        <?php foreach($data['villages'] as $key => $village): ?>
        <div class="portfolio-modal modal fade" id="item<?= $key ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?= BASEURL ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2><?= $village['nama'] ?></h2>
                                    <p class="item-intro text-muted"><?= "{$village['kabupaten']}, {$village['provinsi']}" ?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?= BASEURL ?>/images/foto-desa/<?= $village['foto'] ?>" alt="..." />
                                    <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p> -->
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Jumlah Penduduk</strong>
                                            <?= $village['jumlah_penduduk'] ?>
                                        </li>
                                        <li>
                                            <strong>Nama Kepala Desa</strong>
                                            <?= $village['nama_kepala_desa'] ?>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Ubah
                                    </button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Tutup
                                    </button>
                                    <a href="<?= BASEURL ?>/desa/delete/<?= $village['id'] ?>" class="btn btn-primary btn-xl text-uppercase" >
                                        <i class="fas fa-times me-1"></i>
                                        Hapus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
