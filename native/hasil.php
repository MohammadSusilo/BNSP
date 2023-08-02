<?php
include("koneksi.php");
$result = mysqli_query($db, "SELECT * FROM tb_daftar");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>INI Foundation | Location</title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="assets/bootstrap/css/carousel.css">
</head>
<body>
<!-- header -->
<?php
include('layout/header.php');
?>
<!-- end header -->
<section>
<table class="table">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">Nama</th>
<th scope="col">Email</th>
<th scope="col">Hp</th>
<th scope="col">Semester</th>
<th scope="col">IPK</th>
<th scope="col">Beasiswa</th>
<th scope="col">Berkas</th>
<th scope="col">Status</th>
</tr>
</thead>
<tbody>
<?php
while($res = mysqli_fetch_array($result)) {
echo '<tr>';
echo '<td >'.$res['id'].'</td>';
echo '<td >'.$res['nama'].'</td>';
echo '<td >'.$res['email'].'</td>';
echo '<td >'.$res['hp'].'</td>';
echo '<td >'.$res['semester'].'</td>';
echo '<td >'.$res['ipk'].'</td>';
echo '<td >'.$res['beasiswa'].'</td>';
echo '<td >'.$res['berkas'].'</td>';
if ($res['status'] == 0){
echo '<td >Belum diverifikasi</td>';
}
echo '</tr>';
}
?>
</tbody>
</table>
</section>
<!-- Footer -->
<?php
include('layout/footer.php');
?>
<!-- end Footer -->
</body>
</html>