<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama, 
            'kelas' => $kelas, 
            'npm' => $npm,
        ];
        return view('profile', $data);
    }
    public function create() {
        return view('create_user');
    }
    public function store(){
        $data=[
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $this->request->getVar('kelas')
        ];
        return view('profile', $data);
    }
}
