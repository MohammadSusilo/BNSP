@extends('layouts.frontend.based.apps')
@section('title', 'Confirm')

@section('content')
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
                <!-- Form cek data -->
                <form method="POST" action="{{ route('bnsp.store') }}" style="font-family: comic-sans-bold;" class="p-4 shadow p-3 mb-5 bg-body rounded border border-5 bordersecondary position-absolute start-50 top-50 translate-middle">
                @csrf
                    <h3 class="pb-3">Form Cek Data</h3>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-6 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['nama'] ?>" name="nama" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-6 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" readonly class="form-control-plaintext" value="<?= $_POST['email'] ?>" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hp" class="col-sm-6 col-form-label">No. Hp</label>
                        <div class="col-sm-6">
                            <input type="number" readonly class="form-control-plaintext" value="<?= $_POST['hp'] ?>" name="hp" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="semester" class="col-sm-6 col-form-label">Semester Saat Ini</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['semester'] ?>" name="semester" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ipk" class="col-sm-6 col-form-label">IPK Terakhir</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['ipk'] ?>" name="ipk" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="beasiswa" class="col-sm-6 col-form-label">Pilihan Beasiswa</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['beasiswa'] ?>" name="beasiswa" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="berkas" class="col-sm-6 col-form-label">Berkas Terinput</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['berkas'] ?>" name="berkas" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ url('/') }}" class="btn btn-dark">Batal</a>
                        <input type="submit" class="btn btn-dark" id="confirm-daftar" name="insert" value="Confim" onclick="berhasil()">
                    </div>
                </form>
                <!-- End Form cek data -->
            </div>

        </div>
    </div>
</section>
@endsection()

@push('js')
    <!-- Alert tombol Bayar -->
    <script>
        function berhasil() {
            alert("Pendaftaran Berhasi, silahkan tunggu informasi selanjutnya melalui email");
        }
    </script>
    <!-- End Alert tombol Bayar -->
@endpush