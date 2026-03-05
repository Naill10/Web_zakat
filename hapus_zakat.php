<?php
include "config.php";

$current_page = basename($_SERVER["PHP_SELF"]);
$id = $_GET["id"] ?? null;

$berhasil = false;
$error = false;

if ($id) {
    $query = mysqli_query($koneksi ,"DELETE FROM tbl_zakat WHERE id_zakat='$id'");

    if ($query) {
        $berhasil = true;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php if ($berhasil): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil!',
    text: 'Data berhasil dihapus',
    confirmButtonColor: '#198754'
}).then(() => {
    window.location.href = 'admin.php';
});
</script>
<?php endif; ?>

<?php if ($error): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Gagal!',
    text: 'Data gagal dihapus',
    confirmButtonColor: '#dc3545'
}).then(() => {
    window.location.href = 'admin.php';
});
</script>
<?php endif; ?>

</body>
</html>