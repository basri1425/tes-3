<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <title>Data Siswa</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA SISWA
                    </div>
                    <div class="card-body">
                        <a href="create.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">NAMA LENGKAP</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../config/koneksi.php');
                                $no = 1;
                                $query = mysqli_query($connection, "SELECT * FROM tbl_siswa");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nisn'] ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td><?php echo $row['alamat'] ?></td>
                                        <td class="text-center">
                                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="../asset/js/jquery.js"></script>
        <script src="../asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>