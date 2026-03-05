<?php
include 'config.php';
include 'header.php';
$berhasil = false;
$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama    = $_POST['nama_zakat'];
    $jenis   = $_POST['jenis_zakat'];
    $jumlah_rupiah = $_POST['jumlah_rupiah'];
    $jumlah_beras = $_POST['jumlah_beras'];
    $metode  = $_POST['metode'];
   
    $keterangan = $_POST['keterengan'];

    $query = mysqli_query($koneksi, "INSERT INTO `tbl_zakat`
    (`nama_zakat`, `jenis_zakat`, `jumlah_rupiah`, `jumlah_beras`, `metode`, `keterengan`) 
    VALUES ('$nama','$jenis','$jumlah_rupiah','$jumlah_beras','$metode','$keterangan')");

  if ($query) {
        $berhasil = true;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Zakat</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
body{
    background: linear-gradient(135deg,#eef2f7,#dbe7ff);
    min-height:100vh;
}

/* Wrapper supaya ketengah */

/* Card modern */
.card-modern{
    border:none;
    border-radius:20px;
    box-shadow:0 15px 35px rgba(0,0,0,0.12);
    overflow:hidden;
    background:#ffffff;
    animation: zoomIn 0.5s ease-out;
    transition: all 0.3s ease;
}
.container-fluid{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-left: -200px;
}

/* Header biru elegan */
.card-header{
    background:linear-gradient(90deg,#0d2c54,#1e4f9c);
    color:white;
    text-align:center;
    padding:25px;
}

/* Input style */
.form-control, .form-select{
    border-radius:12px;
    border:1px solid #cfd8ea;
    padding:10px;
}

.form-control:focus, .form-select:focus{
    border-color:#0d6efd;
    box-shadow:0 0 0 0.2rem rgba(13,110,253,.15);
}

/* Tombol modern */
.btn-modern{
    background:#0d6efd;
    color:white;
    border:none;
    border-radius:30px;
    font-weight:bold;
    padding:10px 30px;
    transition:0.5s;
}

.btn-modern:hover{
    transform:translateY(-2px);
    background:#0b5ed7;
    box-shadow:0 8px 20px rgba(22, 115, 255, 0.88);
}

/* Judul */
.head_text{
    text-align:center;
    color:#0d2c54;
    font-weight:bold;
}

.card-modern {
    border-radius: 25px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.12);
}

.card-body {
    background: #ffffff;
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
</head>
<body>

<div class="container-fluid px-4 pt-5 ms-5">

    <div class="row justify-content-center ms-5">
        <div class="col-6">

            <div class="card card-modern">

                <div class="card-header">
                    <h3 class="mb-1">🌙 Form Input Zakat</h3>
                    <p class="mb-0 opacity-75">Sistem Pencatatan Zakat</p>
                </div>

                <div class="card-body p-4 p-md-5">

                    <form method="POST">

                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Nama Muzakki</label>
                                <input type="text" name="nama_zakat" class="form-control form-control-lg" required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Jenis Zakat</label>
                                <select name="jenis_zakat" class="form-select form-select-lg" required>
                                    <option value="">-- Pilih --</option>
                                    <option>Zakat Mal</option>
                                    <option>Zakat Fitrah</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Nominal Uang (Rp)</label>
                                <input type="number" name="jumlah_rupiah" class="form-control form-control-lg" value="0">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Nominal Beras (Kg)</label>
                                <input type="number" name="jumlah_beras" class="form-control form-control-lg" value="0">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Metode Pembayaran</label>
                                <select name="metode" class="form-select form-select-lg" required>
                                    <option>Transfer</option>
                                    <option>Tunai</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Keterangan</label>
                                <input type="text" name="keterengan" class="form-control form-control-lg" required>
                            </div>

                           

                        </div>

                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-modern px-5 py-3">
                                Simpan Data
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
    title: '✨ Berhasil!',
    text: 'Data zakat berhasil disimpan',
    icon: 'success',
    confirmButtonColor: '#192987'
}).then(() => {
    window.location.href = 'admin.php';
});
</script>
<?php endif; ?>

<?php if ($error): ?>
<script>
Swal.fire({
    title: 'Oops!',
    text: 'Data gagal disimpan',
    icon: 'error',
    confirmButtonColor: '#dc3545'
});
</script>
<?php endif; ?>
</body>
</html>


