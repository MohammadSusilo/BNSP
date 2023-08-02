<?php
    require_once 'koneksi.php';
    // Ambil Input Form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $hp = $_POST["hp"];
    $semester = $_POST["semester"];
    $ipk = $_POST["ipk"];
    $beasiswa = $_POST["beasiswa"];
    $berkas = $_POST["berkas"];
    if (isset($_POST['insert'])) {
        $table = "tb_daftar";
        $nama = $_POST["modal-nama"];
        $email = $_POST["modal-email"];
        $hp = $_POST["modal-hp"];
        $semester = $_POST["modal-semester"];
        $ipk = $_POST["modal-ipk"];
        $beasiswa = $_POST["modal-beasiswa"];
        $berkas = $_POST["modal-berkas"];
            // Insert Data
            $query = "INSERT INTO `tb_daftar` (`nama`, `email`, `hp`, `semester`, `ipk`, `beasiswa`, `berkas`) VALUES ('$nama', '$email', '$hp', '$semester', '$ipk', '$beasiswa', '$berkas') ";
            $result = $db->query($query);
        // BALIK KE HOME
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>INI Foundation | Cek Data</title>
<!-- Boostrap5 CSS -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="assets/bootstrap/css/carousel.css">
<!-- End Boostrap5 CSS -->
</head>
<body>
<!-- Form cek data -->
<form action="" method="post" accept-charset="utf-8" style="fontfamily: comic-sans-ms;" class="p-4 shadow p-3 mb-5 bg-body rounded
border border-5 border-secondary position-absolute start-50 top-50
translate-middle">
<h3 class="pb-3">Form Cek Data</h3>
<div class="mb-3 row">
<label for="nama" class="col-sm-6 col-form-label">Nama
Lengkap</label>
<div class="col-sm-6">
<input type="text" readonly class="form-control-plaintext"
value="<?= $_POST['nama'] ?>" name="modal-nama" required>
</div>
</div>
<div class="mb-3 row">
<label for="email" class="col-sm-6 col-form-label">Email</label>
<div class="col-sm-6">
<input type="email" readonly class="form-control-plaintext"
value="<?= $_POST['email'] ?>" name="modal-email" required>
</div>
</div>
<div class="mb-3 row">
<label for="hp" class="col-sm-6 col-form-label">No. Hp</label>
<div class="col-sm-6">
<input type="number" readonly class="form-control-plaintext"
value="<?= $_POST['hp'] ?>" name="modal-hp" required>
</div>
</div>
<div class="mb-3 row">
<label for="semester" class="col-sm-6 col-form-label">Semester
Saat Ini</label>
<div class="col-sm-6">
<input type="text" readonly class="form-control-plaintext"
value="<?= $_POST['semester'] ?>" name="modal-semester" required>
</div>
</div>
<div class="mb-3 row">
<label for="ipk" class="col-sm-6 col-form-label">IPK
Terakhir</label>
<div class="col-sm-6">
<input type="text" readonly class="form-control-plaintext"
value="<?= $_POST['ipk'] ?>" name="modal-ipk" required>
</div>
</div>
<div class="mb-3 row">
<label for="beasiswa" class="col-sm-6 col-form-label">Pilihan
Beasiswa</label>
<div class="col-sm-6">
<input type="text" readonly class="form-control-plaintext"
value="<?= $_POST['beasiswa'] ?>" name="modal-beasiswa" required>
</div>
</div>
<div class="mb-3 row">
<label for="berkas" class="col-sm-6 col-form-label">Berkas
terinput</label>
<div class="col-sm-6">
<input type="text" readonly class="form-control-plaintext"
value="<?= $_POST['berkas'] ?>" name="modal-berkas" required>
</div>
</div>
<div class="text-center">
<a href="index.php" class="btn btn-dark">Batal</a>
<input type="submit" class="btn btn-dark" id="confirm-daftar"
name="insert" value="Confim" onclick="berhasil()">
</div>
</form>
<!-- End Form cek data -->
</body>
</html>
<!-- Alert tombol Bayar -->
<script>
function berhasil() {
alert("Pendaftaran Berhasi, silahkan tunggu informasi selanjutnya
melalui email");
}
</script>
<!-- End Alert tombol Bayar -->
<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>