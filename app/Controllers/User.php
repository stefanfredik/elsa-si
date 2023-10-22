<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use Myth\Auth\Password;

class User extends BaseController {
    var $meta = [
        "url" => 'user',
        "title" => "Halaman User",
    ];


    public function __construct() {
        $this->userModel = new UsersModel();
    }

    public function index() {
        $data = [
            'title' => "Halaman User",
            'userCount' => $this->userModel->countAll(),
            "dataUser"  => $this->userModel->findAll(),
            'meta'      => $this->meta
        ];


        return view("/user/index", $data);
    }

    public function tambah() {
        $data = [
            "title" => "Tambah Data User",
            'meta'      => $this->meta,
            'role'      => $this->userModel->findAllRole()
        ];

        return view("/user/tambah", $data);
    }


    public function store() {
        $data = $this->request->getPost();

        $rules = [
            'username'  => [
                'rules'  => 'required|is_unique[users.username]',
                'errors' => [
                    'is_unique' => 'Username telah digunakan.'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'min_length' => 'Password minimal 8 Digit.'
                ]
            ],
            'password2' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'matches' => 'Password tidak sama.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        } else {

            $data['password_hash'] = Password::hash($this->request->getPost('password'));

            $this->userModel->withGroup($data["jabatan"])->save($data);

            setSwall("Sukses Menambah Data Data");
            return redirect()->to('/user');
        }
    }

    public function edit($id) {
        $user = $this->userModel->find($id);

        // dd($user);
        $data = [
            'title'     => 'Edit Data ' . $user['nama_user'],
            'user'      => $user,
            'role'      => $this->userModel->findAllRole(),
            'meta'      => $this->meta
        ];

        return view('/user/edit', $data);
    }

    public function delete($id) {
        $this->userModel->delete($id);

        $res = [
            'status' => 'success',
            'msg'   => 'Sukses Menghapus Data!',
        ];

        setSwall("Sukses Menghapus Data.");
        return redirect()->to('/user');
    }

    public function update($id) {
        $user = $this->userModel->find($id);


        $usernameRules = ($this->request->getPost('username') == $user['username']) ? 'required|min_length[3]' : 'min_length[3]|required|is_unique[users.username]';
        $rules = [
            'nama_user'  => [
                'rules'  => 'required',
            ],
            'username'  => [
                'rules'  => $usernameRules,
                'errors' => [
                    'is_unique' => 'Username telah digunakan.',
                    'min_length' => 'Username minimal 6 Digit.'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $data = $this->request->getPost();

        $this->userModel->update($id, $data);
        $this->userModel->updateGroup($id, $this->request->getPost("jabatan"));

        setSwall("Sukses Mengupdate Data");
        return redirect()->to('/user');
    }
}
