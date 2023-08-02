<?php
    function rand_float($st_num=0,$end_num=1,$mul=1000000){
        if ($st_num>$end_num) return false;
            return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
    }
    $ipkSekarang = substr(rand_float(2.9,3.4),0,3);
?>
<?php include('layouts/header.php'); ?>

            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> </a></li>
                                </ol>
                            </nav>

                            <h2 class="text-white"> </h2>
                            <div class="d-flex align-items-center mt-5"></div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="topics-detail-block bg-white shadow-lg">
                            </div>
                        </div>

                    </div>
                </div>
            </header>


            <section class="topics-detail-section section-padding" id="topics-detail">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 m-auto">
                            <!-- Form Pendaftaran -->
                            <form action="confirm.php" style="font-family: comic-sans-bold;" class="p-4 shadow p-3 mb-5 bg-body rounded border border-5 bordersecondary position-absolute start-50 top-50 translate-middle" method="post">
                                <h3 class="pb-3">Form Pendaftaran</h3>
                                    <!-- Kolom Input -->
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control border border-dark border-1" id="nama" required name="nama">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control border border-dark border-1" id="email" required name="email">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="hp" class="col-sm-4 col-form-label">No. Hp</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control border border-dark border-1" id="hp" name="hp" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="semester" class="col-sm-4 col-form-label">Semester Saat Ini</label>
                                        <div class="col-sm-6">
                                            <select name="semester" id="semester" class="form-select border border-dark border-1" aria-label="Default select example" required>
                                                <option selected>Pilih Semester</option>
                                                <option value="Semester 1">Semester 1</option>
                                                <option value="Semester 2">Semester 2</option>
                                                <option value="Semester 3">Semester 3</option>
                                                <option value="Semester 4">Semester 4</option>
                                                <option value="Semester 5">Semester 5</option>
                                                <option value="Semester 6">Semester 6</option>
                                                <option value="Semester 7">Semester 7</option>
                                                <option value="Semester 8">Semester 8</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="ipk" class="col-sm-4 col-form-label">IPK Terakhir</label>
                                        <div class="col-sm-6">
                                            <input type="text" readonly class="form-control border borderdark border-1" id="ipk" name="ipk" value="<?= $ipkSekarang?>" required>
                                        </div>
                                    </div>
                                    <?php
                                        if ($ipkSekarang >= 3.0){
                                            echo'
                                                <div class="mb-3 row">
                                                    <label for="beasiswa" class="col-sm-4 col-form-label">Pilihan Beasiswa</label>
                                                    <div class="col-sm-6">
                                                        <select name="beasiswa" id="beasiswa" class="form-select border border-dark border-1" aria-label="Default select example" required>
                                                            <option selected>Pilih Beasiswa</option>
                                                            <option value="Paket Biasa">Paket Biasa</option>
                                                            <option value="Paket Sedang">Paket Sedang</option>
                                                            <option value="Paket Special">Paket Spesial</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="berkas" class="col-sm-4 col-form-label">Input berkas syarat</label>
                                                    <div class="col-sm-6">
                                                        <input type="file" class="form-control border border-dark border-1" id="berkas" name="berkas" required>
                                                    </div>
                                                </div>
                                            ';
                                        } else {
                                            echo '<p>Tidak dapat melanjutkan, karena IPK dibawah persyaratan minimal 3.0</p>';
                                        }
                                    ?>
                                    <!-- End Kolom Input -->
                                    <!-- Checklist -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="persetujuan" required="">
                                        <label class="form-check-label col-sm-10" for="persetujuan"> Saya telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan.</label>
                                    </div>
                                    <!-- End Checklist -->
                                    <!-- Button -->
                                    <div class="text-center mt-3">
                                        <?php
                                            if ($ipkSekarang >= 3.0){
                                                echo '<button id="submit" type="submit" class="btn btndark">Submit Pendaftaran</button>';
                                            }
                                        ?>
                                        <a href="index.php" class="btn btn-dark col-sm-2">Batal</a>
                                    </div>
                                    <!-- End Button -->
                            </form>
                        </div>

                    </div>
                </div>
            </section>

<!-- <?php include('layouts/footer.php'); ?> -->