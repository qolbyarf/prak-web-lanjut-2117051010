<?php

namespace App\Controllers;

use App\Models\KelasModel;  
use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }
    protected $helpers=['form'];
    public function index()
    {
        $data =[
            'title' => 'List User', 
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
        
    }
    public function edit($id){
        $user = $this->userModel->getUser($id);
        $kelas = $this->kelasModel->getKelas();


        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' =>$kelas,
        ];

        return view('edit_user', $data);
    }

    public function show($id)
    {
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];
        return view('profile', $data);
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
        
        $kelas = $this->kelasModel->getKelas();
        
        $data =[
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }
    public function store(){
        if($this->request->getVar('kelas')!= ''){
            $kelas_select = $this->kelasModel->where('id', $this->request->getVar('kelas'))->first();
            $nama_kelas = $kelas_select['nama_kelas'];
        }else{
            $nama_kelas ='';
        }

        if (!$this->validate([
            'nama'  => 'required|is_unique[user.nama]',
            'npm'   => 'required|is_unique[user.npm]',
            'kelas' => 'required' 
        ])){
            session()->setFlashdata('nama_kelas');
            return redirect()->back()->withInput()->with('nama_kelas', $nama_kelas);
        }

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'), 
            'id_kelas' => $this->request->getVar('kelas'), 
            'npm' => $this->request->getVar('npm'),
        ]);
        $data=[
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'), 
        ];
        return view('profile', $data);
    }

    public function update($id){
        $path = 'assets/upload/img/';
        $foto = $this->request->getFile('foto');

        $data = [
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];

        if ($foto->isValid()){
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)){
                $foto_path = base_url($path . $name);

                $data['foto'] = $foto_path;
            }
        }

        $result = $this->userModel->updateUser($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal menyimpan data');
        }

        return redirect()->to(base_url('/user'));
    }

    public function destroy($id){
        $result = $this->userModel->deleteUser($id);
        if (!$result){
            return redirect()->back()->with('eror', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/user'))
        ->with('success', 'Berhasil menghapus data');
    }

}
