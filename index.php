<?php
include 'koneksi.php';
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    </head>
        <body>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                     $data=mysqli_query($db, "SELECT nis, nama, jenis_kelamin from siswa ");
                     while($siswa = mysqli_fetch_array($data)){
                ?>
                <tr>
                <td>  
                    <?php echo $no++; ?></td>
                    <td><?php echo $siswa['nis'];?></td>
                    <td><?php echo $siswa['nama'];?></td>
                    <td><?php echo $siswa['jenis_kelamin'];?></td>
                </tr>
                    <?php
                    } ?>
            </tbody>
    <!-- sc link js-->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script src="js/app.js"></script>
    <!-- penutup js -->
        </body>
</html>