<?php
namespace app\Models;

use CodeIgniter\Model;
class CV extends Model
{
    protected $table ='curriculum-vitae';
    protected $allowedFields = ['Nama','Jabatan','Deskripsi_Diri','Nama_TK','Tahun_TK','Nama_SD','Tahun_SD',
'Nama_SMP','Tahun_SMP','Nama_SMK','Tahun_SMK','Nama_Perguruan_Tinggi','Tahun_Perguruan_Tinggi',
'Pelatihan1','TahunP1','Pelatihan2','TahunP2','Pengalaman','TahunP3','Penghargaan1','TahunP4','Penghargaan2',
'TahunP5','Skill1','Desk1','Skill2','Desk2','Skill3','Desk3','Skill4','Desk4','Skill5','Desk5','Skill6','Desk6',
'Skill7','Desk7s'];


}

