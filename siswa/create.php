<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH SISWA
                    </div>
                    <div class="card-body">
                        <form action="save.php" method="POST">
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" placeholder="Masukkan Nama Siswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success mt-4">SIMPAN</button>
                            <button type="reset" class="btn btn-warning mt-4">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../asset/js/jquery.js"></script>
    <script src="../asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>