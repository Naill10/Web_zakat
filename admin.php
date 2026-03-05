
<?php
include 'config.php';
include 'header.php';

                        $query = mysqli_query($koneksi, "SELECT SUM(jumlah_rupiah) AS Total FROM tbl_zakat;");

                        $calon = mysqli_fetch_assoc($query); // mengambil data dari hasil query
                        echo number_format($calon['Total']);


                        
                        

                        

                      ?>
                      <style>
                        .card-body{
                            font-size: 18px;
                            font-weight: 600;
                            animation: zoomIn 0.5s ease-out;
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
                            table.dataTable tbody td,
table.dataTable tbody th {
    text-align: center !important;
    vertical-align: middle !important;
}
                                

                      </style>
                      <!DOCTYPE html>
                      <html lang="en">
                      <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Document</title>
                      </head>
                      <body>
                        
                      


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard Zakat</li>
                        </ol>
                        <div class="row">
                         
                        
                            <div class="col-xl-3 col-md-6">  
                                <div class="card bg-warning text-white mb-4"> <?php
                        $query = mysqli_query($koneksi, "SELECT SUM(jumlah_rupiah) AS Total FROM tbl_zakat;");   
                        $calon = mysqli_fetch_assoc($query); // mengambil data dari hasil query
                            
                        
                        ?>
                                    <div class="card-body">Total Penerimaan Uang Zakat</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                      RP  <?php echo number_format($calon['Total'], 0, ',', '.'); ?>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-success text-white mb-4">
                                             <?php
                                            $query = mysqli_query($koneksi, "SELECT SUM(keterengan) AS jumlah FROM tbl_zakat");
                                            $data = mysqli_fetch_assoc($query);
                                            ?>
                                        <div class="card-body">Jumlah Orang yang Berzakat</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                           <?php echo $data['jumlah']; ?> Jiwa
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                        <?php
                                                $query = mysqli_query($koneksi, "SELECT SUM(jumlah_beras) AS Total FROM tbl_zakat;");
                                                $calon = mysqli_fetch_assoc($query); // mengambil data dari hasil query
                                                ?>
                                    <div class="card-body">Jumlah Beras</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php echo $calon['Total']; ?> KG
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="card mb-4 text-center">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Laporan Zakat
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Name</th>
                                            <th>Jenis</th>
                                            <th>Nominal</th>
                                            <th>Kg(Beras)</th>
                                            <th>Metode</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                           <th>Name</th>
                                            <th>Jenis</th>
                                            <th>Nominal</th>
                                            <th>Kg(Beras)</th>
                                            <th>Metode</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                  <?php 
                    $no =1;
                    $data = mysqli_query($koneksi, "SELECT * FROM tbl_zakat");
                     foreach($data as $row):
                  ?>
                                  <tr>
    <th class="text-center"><?= $no++; ?></th>
    <th class="text-center"><?php echo $row['nama_zakat']; ?></th>
    <th class="text-center"><?php echo $row['jenis_zakat']; ?></th>
    <th class="text-center"><?php echo 'Rp ' . number_format($row['jumlah_rupiah'], 0, ',', '.'); ?></th>
    <th class="text-center"><?php echo $row['jumlah_beras']; ?> KG</th>
    <th class="text-center"><?php echo $row['metode']; ?></th>
    <th class="text-center"><?php echo $row['tanggal']; ?></th>
    <th class="text-center"><?php echo $row['keterengan']; ?> (Jiwa)</th>

    <th class="align-middle text-center text-sm fade-row">
        <a href="edit_zakat.php?id=<?= $row['id_zakat']; ?>" class="btn btn-primary">Edit</a>
        <a href="hapus_zakat.php?id=<?php echo $row['id_zakat']; ?>" class="btn btn-danger">Hapus</a>
    </th>
</tr>
                  <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="startbootstrap-sb-admin-gh-pages/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="startbootstrap-sb-admin-gh-pages/assets/demo/chart-area-demo.js"></script>
        <script src="startbootstrap-sb-admin-gh-pages/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="startbootstrap-sb-admin-gh-pages/js/datatables-simple-demo.js"></script>
    </body>
</html>
