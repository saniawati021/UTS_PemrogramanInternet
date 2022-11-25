<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA SEKOLAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-30 m-auto">
            <p class= "h1 text-center p-5">Table Data</p>
            <a href="create.php" class="btn btn-primary">Tambah Data</a>
            <table class="table table-hover table-bordered border-primary mt-2">
                <thead>
                    <tr>
                        <th scope="col">NPSN</th>
                        <th scope="col">Status</th>
                        <th scope="col">Bentuk Pendidikan</th>
                        <th scope="col">Nama Sekolah</th>
                        <th scope="col">SK Pendirian</th>
                        <th scope="col">Tanggal Pendirian</th>
                        <th scope="col">SK Izin Oprasional</th>
                        <th scope="col">Tanggal Izin Oprasional</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">RT</th>
                        <th scope="col">RW</th>
                        <th scope="col">Dusun</th>
                        <th scope="col">Desa</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Kabupatenn</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Kode Pos</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                    $query = "SELECT * FROM mahasiswa";
                    $result = mysqli_query($koneksi, $query);

                    $no = 1;
                    while($data = mysqli_fetch_assoc($result)){
                ?>
                <tbody>
                    <tr>
                        <td scope="row"><?= $data['npsn']?></td>
                        <td scope="row"><?= $data['status']?></td>
                        <td scope="row"><?= $data['bentuk_pendidikan']?></td>
                        <td scope="row"><?= $data['nama_sekolah']?></td>
                        <td scope="row"><?= $data['sk_pendirian']?></td>
                        <td scope="row"><?= $data['tgl_pendirian']?></td>
                        <td scope="row"><?= $data['sk_izin_operasional']?></td>
                        <td scope="row"><?= $data['tgl_izin_operasional']?></td>
                        <td scope="row"><?= $data['alamat']?></td>
                        <td scope="row"><?= $data['rt']?></td>
                        <td scope="row"><?= $data['rw']?></td>
                        <td scope="row"><?= $data['dusun']?></td>
                        <td scope="row"><?= $data['desa']?></td>
                        <td scope="row"><?= $data['kecamatan']?></td>
                        <td scope="row"><?= $data['kabupaten']?></td>
                        <td scope="row"><?= $data['provinsi']?></td>
                        <td scope="row"><?= $data['kode_pos']?></td>
                        <td scope="row">
                        <a href="edit.php?npsn=<?= $data['npsn']?>" class="btn btn-warning" 4s-3>Edit</a>
                        <form class="display-inline" action="delete.php" method="post">
                            <input type="hidden" name="npsn" value="<?=$data['npsn']?>">
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                </tbody>
                <?php
                  }
                ?>
            </table>
        </div>
    </div>
</body>
</html>