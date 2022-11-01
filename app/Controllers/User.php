<?php

namespace App\Controllers;

use App\Models\CV;

class User extends BaseController {

    public function __construct(){
        $this->data = new CV();   
    } 
    public function index(){
        echo view ('CV-Yoga',['data'=> $this->data->first()]);
    }
    function add(){
        echo view('add',['data'=> $this->data->findAll()]);
    }

    public function simpan(){
        $this->data->save(
            [
                'Nama' => $this->request->getVar('Nama'),
                'Jabatan' => $this->request->getVar('Jabatan'),
                'Deskripsi_Diri' => $this->request->getVar('Deskripsi_Diri'),
                'Nama_TK' => $this->request->getVar('Nama_TK'),
                'Tahun_TK' => $this->request->getVar('Tahun_TK'),
                'Nama_SD' => $this->request->getVar('Nama_SD'),
                'Tahun_SD' => $this->request->getVar('Tahun_SD'),
                'Nama_SMP' => $this->request->getVar('Nama_SMP'),
                'Tahun_SMP' => $this->request->getVar('Tahun_SMP'),
                'Nama_SMK' => $this->request->getVar('Nama_SMK'),
                'Tahun_SMK' => $this->request->getVar('Tahun_SMK'),
                'Nama_Perguruan_Tinggi' => $this->request->getVar('Nama_Perguruan_Tinggi'),
                'Tahun_Perguruan_Tinggi' => $this->request->getVar('Tahun_Perguruan_Tinggi'),
                'Pelatihan1' => $this->request->getVar('Pelatihan1'),
                'TahunP1' => $this->request->getVar('TahunP1'),
                'Pelatihan2' => $this->request->getVar('Pelatihan2'),
                'TahunP2' => $this->request->getVar('TahunP2'),
                'Pengalaman' => $this->request->getVar('Pengalaman'),
                'TahunP3' => $this->request->getVar('TahunP3'),
                'Penghargaan1' => $this->request->getVar('Penghargaan1'),
                'TahunP4' => $this->request->getVar('TahunP4'),
                'Penghargaan2' => $this->request->getVar('Penghargaan2'),
                'TahunP5' => $this->request->getVar('TahunP5'),
                'Skill1' => $this->request->getVar('Skill1'),
                'Desk1' => $this->request->getVar('Desk1'),
                'Skill2' => $this->request->getVar('Skill2'),
                'Desk2' => $this->request->getVar('Desk2'),
                'Skill3' => $this->request->getVar('Skill3'),
                'Desk3' => $this->request->getVar('Desk3'),
                'Skill4' => $this->request->getVar('Skill4'),
                'Desk4' => $this->request->getVar('Desk4'),
                'Skill5' => $this->request->getVar('Skill5'),
                'Desk5' => $this->request->getVar('Desk5'),
                'Skill6' => $this->request->getVar('Skill6'),
                'Desk6' => $this->request->getVar('Desk6'),
                'Skill7' => $this->request->getVar('Skill7'),
                'Desk7' => $this->request->getVar('Desk7'),
            ]
            );
            return redirect()->to('/User');
    }
    function delete($id) {
        $this->data->delete($id);
        return redirect()->to('/User');
    }

    function get_edit($id) {
        $result =  $this->data->where(['id' => $id])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data = [
                'Nama' => $i['Nama'],
                'Jabatan' => $i['Jabatan'],
                'Deskripsi_Diri' => $i['Deskripsi_Diri'],
                'Nama_TK' => $i['Nama_TK'],
                'Tahun_TK' => $i['Tahun_TK'],
                'Nama_SD' => $i['Nama_SD'],
                'Tahun_SD' => $i['Tahun_SD'],
                'Nama_SMP' => $i['Nama_SMP'],
                'Tahun_SMP' => $i['Tahun_SMP'],
                'Nama_SMK' => $i['Nama_SMK'],
                'Tahun_SMK' => $i['Tahun_SMK'],
                'Nama_Perguruan_Tinggi' => $i['Nama_Perguruan_Tinggi'],
                'Tahun_Perguruan_Tinggi' => $i['Tahun_Perguruan_Tinggi'],
                'Pelatihan1' => $i['Pelatihan1'],
                'TahunP1' => $i['TahunP1'],
                'Pelatihan2' => $i['Pelatihan2'],
                'TahunP2'=> $i['TahunP2'],
                'Pengalaman' => $i['Pengalaman'],
                'TahunP3' => $i['TahunP3'],
                'Penghargaan1' => $i['Penghargaan1'],
                'TahunP4' => $i['TahunP4'],
                'Penghargaan2'=> $i['Penghargaan2'],
                'TahunP5' => $i['TahunP5'],
                'Skill1' => $i['Skill1'],
                'Desk1' => $i['Desk1'],
                'Skill2' => $i['Skill2'],
                'Desk2' => $i['Desk2'],
                'Skill3' => $i['Skill3'],
                'Desk3' => $i['Desk3'],
                'Skill4' => $i['Skill4'],
                'Desk4' => $i['Desk4'],
                'Skill5' => $i['Skill5'],
                'Desk5'=> $i['Desk5'],
                'Skill6' => $i['Skill6'],
                'Desk6' => $i['Desk6'],
                'Skill7'=> $i['Skill7'],
                'Desk7' => $i['Desk7'],
            ];
            return view('edit', $data);
        } else {
            echo "Data Was Not Found";
        }
    }
    function update() {
        $this->data->insert(
            [
                'Nama' => $this->request->getVar('Nama'),
                'Jabatan' => $this->request->getVar('Jabatan'),
                'Deskripsi_Diri' => $this->request->getVar('Deskripsi_Diri'),
                'Nama_TK' => $this->request->getVar('Nama_TK'),
                'Tahun_TK' => $this->request->getVar('Tahun_TK'),
                'Nama_SD' => $this->request->getVar('Nama_SD'),
                'Tahun_SD' => $this->request->getVar('Tahun_SD'),
                'Nama_SMP' => $this->request->getVar('Nama_SMP'),
                'Tahun_SMP' => $this->request->getVar('Tahun_SMP'),
                'Nama_SMK' => $this->request->getVar('Nama_SMK'),
                'Tahun_SMK' => $this->request->getVar('Tahun_SMK'),
                'Nama_Perguruan_Tinggi' => $this->request->getVar('Nama_Perguruan_Tinggi'),
                'Tahun_Perguruan_Tinggi' => $this->request->getVar('Tahun_Perguruan_Tinggi'),
                'Pelatihan1' => $this->request->getVar('Pelatihan1'),
                'TahunP1' => $this->request->getVar('TahunP1'),
                'Pelatihan2' => $this->request->getVar('Pelatihan2'),
                'TahunP2' => $this->request->getVar('TahunP2'),
                'Pengalaman' => $this->request->getVar('Pengalaman'),
                'TahunP3' => $this->request->getVar('TahunP3'),
                'Penghargaan1' => $this->request->getVar('Penghargaan1'),
                'TahunP4' => $this->request->getVar('TahunP4'),
                'Penghargaan2' => $this->request->getVar('Penghargaan2'),
                'TahunP5' => $this->request->getVar('TahunP5'),
                'Skill1' => $this->request->getVar('Skill1'),
                'Desk1' => $this->request->getVar('Desk1'),
                'Skill2' => $this->request->getVar('Skill2'),
                'Desk2' => $this->request->getVar('Desk2'),
                'Skill3' => $this->request->getVar('Skill3'),
                'Desk3' => $this->request->getVar('Desk3'),
                'Skill4' => $this->request->getVar('Skill4'),
                'Desk4' => $this->request->getVar('Desk4'),
                'Skill5' => $this->request->getVar('Skill5'),
                'Desk5' => $this->request->getVar('Desk5'),
                'Skill6' => $this->request->getVar('Skill6'),
                'Desk6' => $this->request->getVar('Desk6'),
                'Skill7' => $this->request->getVar('Skill7'),
                'Desk7' => $this->request->getVar('Desk7'),
            ]);
        return redirect()->to('/User');
    }

   
}