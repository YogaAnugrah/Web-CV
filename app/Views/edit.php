<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Update Data Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>From Update Data Diri</h1>
            </div>
        </div>

    <form action="<?php echo site_url('User/update');?>" method="post">
        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Nama</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama" 
                placeholder="Masukkan Nama...." value="<?= $Nama; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Jabatan</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Jabatan" 
                placeholder="Masukkan Jabatan...." value="<?= $Jabatan; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Deskripsi_Diri</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Deskripsi_Diri" 
                placeholder="Masukkan Deskripsi Diri...." value="<?= $Deskripsi_Diri; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Nama_TK</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama_TK" 
                placeholder="Masukkan Nama TK...." value="<?= $Nama_TK; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Tahun_TK</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Tahun_TK" 
                placeholder="Masukkan Tahun TK...." value="<?= $Tahun_TK; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Nama_SD</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama_SD" 
                placeholder="Masukkan Nama SD...." value="<?= $Nama_SD; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Tahun_SD</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Tahun_SD" 
                placeholder="Masukkan Tahun SD...." value="<?= $Tahun_SD; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Nama_SMP</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama_SMP" 
                placeholder="Masukkan Nama SMP...." value="<?= $Nama_SMP; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Tahun_SMP</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Tahun_SMP" 
                placeholder="Masukkan Tahun SMP...." value="<?= $Tahun_SMP; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Nama_SMK</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama_SMK" 
                placeholder="Masukkan Nama SMK...." value="<?= $Nama_SMK; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Tahun_SMK</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Tahun_SMK" 
                placeholder="Masukkan Tahun SMK...." value="<?= $Tahun_SMK; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Nama_Perguruan_Tinggi</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama_Perguruan_Tinggi" 
                placeholder="Masukkan Nama Perguruan Tinggi...." value="<?= $Nama_Perguruan_Tinggi; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Tahun_Perguruan_Tinggi</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Tahun_Perguruan_Tinggi" 
                placeholder="Masukkan Tahun Perguruan_Tinggi...." value="<?= $Tahun_Perguruan_Tinggi; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Pelatihan1</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Pelatihan1" 
                placeholder="Masukkan Pelatihan1...." value="<?= $Pelatihan1; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">TahunP1</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="TahunP1" 
                placeholder="Masukkan Tahun P1...." value="<?= $TahunP1; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Pelatihan2</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Pelatihan2" 
                placeholder="Masukkan Pelatihan2...." value="<?= $Pelatihan2; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">TahunP2</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="TahunP2" 
                placeholder="Masukkan Tahun P2...." value="<?= $TahunP2; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Pengalaman</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Pengalaman" 
                placeholder="Masukkan Pengalaman...." value="<?= $Pengalaman; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">TahunP3</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="TahunP3" 
                placeholder="Masukkan Tahun P3...." value="<?= $TahunP3; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Penghargaan1</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Penghargaan1" 
                placeholder="Masukkan Penghargaan1...." value="<?= $Penghargaan1; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">TahunP4</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="TahunP4" 
                placeholder="Masukkan Tahun P4...." value="<?= $TahunP4; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Penghargaan2</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Penghargaan2" 
                placeholder="Masukkan Penghargaan2...." value="<?= $Penghargaan2; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">TahunP5</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="TahunP5" 
                placeholder="Masukkan Tahun P5...." value="<?= $TahunP5; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Skill1</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill1" 
                placeholder="Masukkan Skill1...." value="<?= $Skill1; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Desk1</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk1" 
                placeholder="Masukkan Desk1...." value="<?= $Desk1; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Skill2</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill2" 
                placeholder="Masukkan Skill2...." value="<?= $Skill2; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Desk2</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk2" 
                placeholder="Masukkan Desk2...." value="<?= $Desk2; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Skill3</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill3" 
                placeholder="Masukkan Skill3...." value="<?= $Skill3; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Desk3</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk3" 
                placeholder="Masukkan Desk3...." value="<?= $Desk3; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Skill4</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill4" 
                placeholder="Masukkan Skill4...." value="<?= $Skill4; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Desk4</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk4" 
                placeholder="Masukkan Desk4...." value="<?= $Desk4; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Skill5</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill5" 
                placeholder="Masukkan Skill5...." value="<?= $Skill5; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Desk5</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk5" 
                placeholder="Masukkan Desk5...." value="<?= $Desk5; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Skill6</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill6" 
                placeholder="Masukkan Skill6...." value="<?= $Skill6; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Desk6</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk6" 
                placeholder="Masukkan Desk6...." value="<?= $Desk6; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Skill7</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill7" 
                placeholder="Masukkan Skill7...." value="<?= $Skill7; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Desk7</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk7" 
                placeholder="Masukkan Desk7...." value="<?= $Desk7; ?>">
            </div>
        </div>

        <div>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>