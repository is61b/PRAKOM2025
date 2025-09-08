<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Sehat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color: #EFF5D2;">
    <?php
    include('../navbar.php');
    ?>
    <div class="container">
        <!-- disini kontennya -->
        <div class="row">
            <div class="col-10 m-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <b>Data Pasien</b>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-primary">Tambah Data</a>
                        <table class="table mt-3 table-striped ">
                            <thead>
                                <tr class="table-success">
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    #1. koneksi
                                    include('../koneksi.php');

                                    #2. menuliskan query
                                    $qry = "SELECT * FROM pasien";

                                    #3. menjalankan query
                                    $result = mysqli_query($koneksi,$qry);    
                                    
                                    #4. melakukan looping data pasien
                                    $nomor = 1;
                                    foreach($result as $row){
                                        $tgl_lahir = date_create($row['Tanggal_LahirPasien']);
                                        $tgl_lahir = date_format($tgl_lahir,'D, d F Y')
                                ?>
                                <tr>
                                    <th scope="row"><?=$nomor++?></th>
                                    <td><?=$row['Nama_pasienKlinik']?></td>
                                    <td><?=$tgl_lahir?></td>
                                    <td><?=$row['Jenis_KelaminPasien']?></td>
                                    <td><?=$row['Alamat_Pasien']?></td>
                                    <td>
                                        <a href="" class="btn btn-info btn-sm">edit</a>
                                        <a href="" class="btn btn-danger btn-sm">hapus</a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>