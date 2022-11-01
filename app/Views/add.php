<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>Add Curriculum-Vitae</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Form Insert Data CV</h1>
            </div>
        </div>
        <form action="/User/simpan" method="POST">

        <div class="row">
            <div class="col-lg-3">
                <label for="">Nama</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama">
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Jabatan</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Jabatan">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Deskripsi Diri</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Deskripsi_Diri">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Nama TK</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama_TK">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Tahun TK</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Tahun_TK">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Nama SD</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama_SD">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Tahun SD</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Tahun_SD">
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Nama SMP</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama_SMP">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Tahun SMP</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Tahun_SMP">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Nama SLTA Sederajat</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama_SMK">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Tahun SLTA Sederajat</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Tahun_SMK">
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Nama Perguruan Tinggi</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Nama_Perguruan_Tinggi">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Tahun Perguruan Tinggi</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Tahun_Perguruan_Tinggi">
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Pelatihan 1</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Pelatihan1">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Tahun P1</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="TahunP1">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Pelatihan 2</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Pelatihan2">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Tahun P2</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="TahunP2">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Pengalaman</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Pengalaman">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Tahun P3</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="TahunP3">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Penghargaan 1</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Penghargaan1">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Tahun P4</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="TahunP4">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Penghargaan 2</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Penghargaan2">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Tahun P5</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="TahunP5">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Skill 1</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill1">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Deskripsi 1</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk1">
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Skill 2</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill2">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Deskripsi 2</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk2">
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Skill 3</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill3">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Deskripsi 3</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk3">
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Skill 4</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill4">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Deskripsi 4</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk4">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Skill 5</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill5">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Deskripsi 5</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk5">
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Skill 6</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill6">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Deskripsi 6</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk6">
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Skill 7</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Skill7">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Deskripsi 7</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Desk7">
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-lg-9">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>

        </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>
