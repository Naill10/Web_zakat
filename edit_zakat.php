<?php
include "config.php";

$id = $_GET['id'] ?? null;

if ($id) {
    $query = mysqli_query($koneksi,"SELECT * FROM `tbl_zakat` WHERE id_zakat = '$id'");
    $siswa = mysqli_fetch_assoc($query);
}

$berhasil = false;
$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama    = $_POST['nama_zakat'];
    $jenis   = $_POST['jenis_zakat'];
    $jumlah_rupiah = $_POST['jumlah_rupiah'];
    $jumlah_beras = $_POST['jumlah_beras'];
    $metode = $_POST['metode'];
    
    $keterangan = $_POST['keterengan'];

    $sql = "UPDATE `tbl_zakat` SET
        nama_zakat='$nama',
        jenis_zakat='$jenis',
        jumlah_rupiah='$jumlah_rupiah',
        jumlah_beras='$jumlah_beras',
        metode='$metode',   
        keterengan='$keterangan'
        WHERE id_zakat='$id'";

    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        $berhasil = true;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>


<style>
body{
    background: linear-gradient(135deg,#1A237E,#0000CD);
    min-height:100vh;
}

.card-modern{
    border:none;
    border-radius:20px;
    box-shadow:0 20px 40px rgba(0,0,0,0.2);
    animation: zoomIn 0.5s ease-out;
}

.card-header{
    background:linear-gradient(90deg,#003366,#0066cc);
    color:white;
    text-align:center;
    padding:20px;
}

.form-control, .form-select{
    border-radius:12px;
}

.btn-modern{
    background:#ffc107;
    border:none;
    border-radius:30px;
    font-weight:bold;
    transition:0.3s;
}

.btn-modern:hover{
    transform:scale(1.05);
}


                        @keyframes zoomIn {
                                from {
                                    opacity: 0;
                                    transform: scale(0.9);
                                }
                                to {
                                    opacity: 1;
                                    transform: scale(1);
                                }
                                }
</style>
 



   <div class="container py-5">
<div class="row justify-content-center">
<div class="col-md-8">

<div class="card card-modern">
<div class="card-header">
<h3>✏️ Edit Data Zakat</h3>
</div>

<div class="card-body p-4">

<form method="POST">

<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama_zakat" class="form-control"
value="<?= $siswa['nama_zakat']; ?>" required>
</div>

<div class="mb-3">
<label>Jenis</label>
<select name="jenis_zakat" class="form-select" required>
<option value="Zakat Fitrah" <?= $siswa['jenis_zakat']=='Zakat Fitrah'?'selected':'' ?>>Zakat Fitrah</option>
<option value="Zakat Mal" <?= $siswa['jenis_zakat']=='Zakat Mal'?'selected':'' ?>>Zakat Mal</option>
</select>
</div>

<div class="mb-3">
<label>Nominal (Rp)</label>
<input type="number" name="jumlah_rupiah" class="form-control"
value="<?= $siswa['jumlah_rupiah']; ?>" required>
</div>

<div class="mb-3">
<label>Beras (Kg)</label>
<input type="number" name="jumlah_beras" class="form-control"
value="<?= $siswa['jumlah_beras']; ?>" >
</div>

<div class="mb-3">
<label>Metode</label>
<select name="metode" class="form-select" required>
<option value="Tunai" <?= $siswa['metode']=='Tunai'?'selected':'' ?>>Tunai</option>
<option value="Transfer" <?= $siswa['metode']=='Transfer'?'selected':'' ?>>Transfer</option>
</select>
</div>

<div class="mb-3">
<label>Keterangan</label>
<input type="text" name="keterengan" class="form-control"
value="<?= $siswa['keterengan']; ?>" required>
</div>

<div class="text-center mt-4">
<button type="submit" class="btn btn-modern px-5 py-2">
Update Data
</button>
</div>

</form>

</div>
</div>

</div>
</div>
</div>
<?php if ($berhasil): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil!',
    text: 'Data berhasil diperbarui',
    confirmButtonColor: '#198754'
}).then(() => {
    window.location.href = "admin.php";
});
</script>
<?php endif; ?>

<?php if ($error): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Gagal!',
    text: 'Data gagal diperbarui',
    confirmButtonColor: '#dc3545'
});
</script>
<?php endif; ?>
</body>
</html>
 