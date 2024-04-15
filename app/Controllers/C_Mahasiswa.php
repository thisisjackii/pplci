<?php

namespace App\Controllers;

use App\Models\M_Mahasiswa;

class C_Mahasiswa extends BaseController
{
    public function index()
    {
        return view('view_display_mahasiswa');
    }

    public function display()
    {
        $model = new M_Mahasiswa();
        $data['mahasiswa'] = $model->fetchAll();
        return view('view_display_mahasiswa', $data);
    }

    public function view($id)
    {
        $model = new M_Mahasiswa();
        $data['mahasiswa'] = $model->fetchByID($id);

        if ($data['mahasiswa'] === null) {
            return redirect()->to(base_url('/'));
        }

        return view('view_individual_mahasiswa', $data);
    }

    public function create()
    {
        $id = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $umur = $this->request->getPost('umur');

        $model = new M_Mahasiswa();
        if (!$model->fetchByID($id)) {
            $model->insertData($id, $nama, $umur);
        }

        return redirect()->to(base_url('/'));
    }

    public function search()
    {
        $searchQuery = $this->request->getPost('search_query');

        $model = new M_Mahasiswa();
        $data['mahasiswa'] = $model->searchByName($searchQuery);

        return view('view_display_mahasiswa', $data);
    }

    public function delete($id)
    {
        $model = new M_Mahasiswa();
        if ($model->deleteByID($id)) {
            return redirect()->to(base_url('/'));
        } else {
            echo "Data Gagal Dihapus";
        }
    }

    public function updateView($id)
    {
        $model = new M_Mahasiswa();
        $data['mahasiswa'] = $model->fetchByID($id);

        if ($data['mahasiswa'] === null) {
            // Handle scenario where record is not found
            return redirect()->to(base_url('/'));
        }

        return view('view_update_mahasiswa', $data);
    }

    public function update($id)
    {
        $nama = $this->request->getPost('nama');
        $umur = $this->request->getPost('umur');

        $model = new M_Mahasiswa();
        $data = [
            'nama' => $nama,
            'umur' => $umur
        ];

        if ($model->updateData($id, $data)) {
            return redirect()->to(base_url('/'));
        } else {
            echo "Update failed";
        }
    }
}