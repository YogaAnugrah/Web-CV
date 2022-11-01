<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My-CV</title>

    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">
  </head>

<>
    <!-- Navbarr -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
        <a class="navbar-brand" href="#">User</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pendidikan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pengalaman & Penghargaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Skill / Kemampuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
      
            </ul>
        </div>
    </div>
</nav>
    <!-- Akhir Navbar -->

    <!-- Selection -->
     <section id="header" class="py-5 bg-primary">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto text-center">
                    <img class="" src="/Assets/img/User.jpg" alt="" width="200">
                    <h1> <?=$data ['Nama']?> </h1>
                    <p> <?=$data ['Jabatan']?> </p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" 
        fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,186.7C384,160,480,96,576,69.3C672,43,768,53,
        864,80C960,107,1056,149,1152,154.7C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,
        320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,
        320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Selection -->

    <!-- About -->
    <section id="About">
        <div class="container">
            <div class="row text-center mb-2">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col">
                    <p> <?=$data ['Deskripsi_Diri']?> </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir About -->

   <!-- Pendidikan -->
   <section id="Pendidikan">
       <div class="countainer">
           <div class="row text-center">
               <div class="col">
                   <h2></h2>
               </div>
           </div>
           <div class="row">
               <div class="col text-center">
                   <h2>Pendidikan Formal</h2>
                <div class="col">
                <div class="row fs-5 text-center">
                        <div class="col-sm-6">
                            <p><?php echo $data['Nama_TK']?></p>
                            <p><?php echo $data['Nama_SD']?></p>
                            <p><?php echo $data['Nama_SMP']?></p>
                            <p><?php echo $data['Nama_SMK']?></p>
                            <p><?php echo $data['Nama_Perguruan_Tinggi']?></p>
                        </div>
                        <div class="col-sm-6">
                            <p><?php echo $data['Tahun_TK']?></p>
                            <p><?php echo $data['Tahun_SD']?></p>
                            <p><?php echo $data['Tahun_SMP']?></p>
                            <p><?php echo $data['Tahun_SMK']?></p>
                            <p><?php echo $data['Tahun_Perguruan_Tinggi']?></p>
                        </div>
                </div>
                </div>
               </div>
               <div class="col text-center">
                   <h2>Pendidikan Non Formal</h2>
                   <div class="col">
                <div class="row fs-5 text-center">
                        <div class="col-sm-6">
                            <p><?php echo $data['Pelatihan1']?></p>
                            <p><?php echo $data['Pelatihan2']?></p>
                        </div>
                        <div class="col-sm-6">
                            <p><?php echo $data['TahunP1']?></p>
                            <p><?php echo $data['TahunP2']?></p>
                        </div>
                </div>
                </div>
               </div>
           </div>
       </div>
    </section>
  <!-- Akhir Pendidikan -->

<!-- Pengalaman & Penghargaan Serta Skill & Kemampuan -->
<section id="Pengalaman & Penghargaan, Skill / Kemampuan">
       <div class="countainer">
           <div class="row text-center">
               <div class="col">
                   <h2></h2>
               </div>
           </div>
           <div class="row">
               <div class="col text-center">
                   <h2>Pengalaman & Penghargaan</h2>
                <div class="col">
                <div class="row fs-5 text-center">
                        <div class="col-sm-6">
                            <p><?php echo $data['Pengalaman']?></p>
                            <p><?php echo $data['Penghargaan1']?></p>
                            <p><?php echo $data['Penghargaan2']?></p>
                        </div>
                        <div class="col-sm-6">
                            <p><?php echo $data['TahunP3']?></p>
                            <p><?php echo $data['TahunP4']?></p>
                            <p><?php echo $data['TahunP5']?></p>
                        </div>
                </div>
                </div>
               </div>
               <div class="col text-center">
                   <h2>Skill / Kemampuan</h2>
                   <div class="col">
                <div class="row fs-5 text-center">
                        <div class="col-sm-6">
                            <p><?php echo $data['Skill1']?></p>
                            <p><?php echo $data['Skill2']?></p>
                            <p><?php echo $data['Skill3']?></p>
                            <p><?php echo $data['Skill4']?></p>
                            <p><?php echo $data['Skill5']?></p>
                            <p><?php echo $data['Skill6']?></p>
                            <p><?php echo $data['Skill7']?></p>
                        </div>
                        <div class="col-sm-6">
                            <p><?php echo $data['Desk1']?></p>
                            <p><?php echo $data['Desk2']?></p>
                            <p><?php echo $data['Desk3']?></p>
                            <p><?php echo $data['Desk4']?></p>
                            <p><?php echo $data['Desk5']?></p>
                            <p><?php echo $data['Desk6']?></p>
                            <p><?php echo $data['Desk7']?></p>
                        </div>
                </div>
                </div>
               </div>
           </div>
       </div>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" 
       d="M0,192L48,176C96,160,192,128,288,144C384,160,480,224,576,250.7C672,277,768,267,864,256C960,245,1056,235,1152,208C1248,181,1344,
       139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,
       288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            <td>
                    <a href="<?php echo site_url('User/add/'.$data['id']);?>" 
                    class="btn btn-sm btn-info">Tambah</a>
                    <a href="<?php echo site_url('User/get_edit/'.$data['id']);?>" 
                    class="btn btn-sm btn-warning">Update</a>
                    <a href="<?php echo site_url('User/delete/'.$data['id']);?>" 
                    class="btn btn-sm btn-danger">Delete</a>
            </td>
    </section>
<!-- Akhir Pengalaman & Penghargaan Serta Skill & Kemampuan -->

<!-- Contact -->
<section id="Contact">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Contact Me</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="Name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="Email">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Contact -->

  <!-- Boostrap Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
    crossorigin="anonymous"></script>
  </body>
</html>