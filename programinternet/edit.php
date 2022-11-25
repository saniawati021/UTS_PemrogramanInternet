<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
         <?php
            include 'koneksi.php';
            $npsn   = $_GET ['npsn'];
            $query  = "SELECT * FROM mahasiswa WHERE npsn = '$npsn'";
            $result = mysqli_query($koneksi, $query);
            $data   = mysqli_fetch_assoc($result);
        ?>
        <div class="col-25 m-auto" style="padding: 100px 0 0 0;">
        <h2 class="text-center fw-bold">Edit Data Sekolah</h2>
        <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
            <form action="editproses.php" method="post">
                <input type="hidden" name="npsn" value="<?= $data['npsn']?>">
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">NPSN</label>
                    <input name="npsn" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['npsn']?>">
                </div>
                <div class="mb-3">
                    <p>Status</p>
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <input name="status" type="radio" id="status1Input" value="Negeri"<?=$data['status']=='Negeri'?'checked' : null?>>
                    <label for="status1Input" class="form-label">Negeri</label>
                    <input name="status" type="radio" id="status2Input" value="Swasta" <?=$data['status']=='Swasta'?'checked' : null?>>
                    <label for="status2Input" class="form-label">Swasta</label>
                    
                </div>
                <div class="mb-3">
                    <p>Bentuk Pendidikan</p>
                    <input name="bentuk_pendidikan" type="radio" id="bentuk_pendidikan1Input" value="TK"<?=$data['bentuk_pendidikan']=='TK'?'checked' : null?>>
                    <label for="bentuk_pendidikan1Input" class="form-label">TK</label>
                    <input name="bentuk_pendidikan" type="radio" id="bentuk_pendidikan2Input" value="SD"<?=$data['bentuk_pendidikan']=='SD'?'checked' : null?>>
                    <label for="bentuk_pendidikan2Input" class="form-label">SD</label>
                    <input name="bentuk_pendidikan" type="radio" id="bentuk_pendidikan3Input" value="SMP"<?=$data['bentuk_pendidikan']=='SMP'?'checked' : null?>>
                    <label for="bentuk_pendidikan3Input" class="form-label">SMP</label>
                    <input name="bentuk_pendidikan" type="radio" id="bentuk_pendidikan4Input" value="SMA"<?=$data['bentuk_pendidikan']=='SMA'?'checked' : null?>>
                    <label for="bentuk_pendidikan4Input" class="form-label">SMA</label>
                    <input name="bentuk_pendidikan" type="radio" id="bentuk_pendidikan5Input" value="SMK"<?=$data['bentuk_pendidikan']=='SMK'?'checked' : null?>>
                    <label for="bentuk_pendidikan5Input" class="form-label">SMK</label>
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">Nama Sekolah</label>
                    <input name="nama_sekolah" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['nama_sekolah']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">SK Pendirian</label>
                    <input name="sk_pendirian" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['sk_pendirian']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Pendirian</label>
                    <input name="tgl_pendirian" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['tgl_pendirian']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">SK Izin Oprasional</label>
                    <input name="sk_izin_operasional" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['sk_izin_operasional']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Izin Oprasional</label>
                    <input name="tgl_izin_operasional" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['tgl_izin_operasional']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlInput1"><?= $data['alamat']?></textarea>
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">RT</label>
                    <input name="rt" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['rt']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">RW</label>
                    <input name="rw" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['rw']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">Dusun</label>
                    <input name="dusun" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['dusun']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">Desa</label>
                    <input name="desa" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['desa']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                    <input name="kecamatan" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['kecamatan']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">Kabupaten</label>
                    <input name="kabupaten" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['kabupaten']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                    <input name="provinsi" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['provinsi']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="npsn" value="<?= $npsn?>">
                    <label for="exampleFormControlInput1" class="form-label">Kode Pos</label>
                    <input name="kode_pos" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['kode_pos']?>">
                </div>
                <div class="col-3 m-auto">
                    <button class="btn btn-md btn-primary px-5 mt-2">Submit</button>
                </div>    
            </form>
        </div>    
        </div>
    </div>
</body>
</html>