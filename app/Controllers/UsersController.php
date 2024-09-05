<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Models\Offer;
use App\Models\RequestOffers;
use App\Models\User;
use CodeIgniter\Controller;

class UsersController extends BaseController
{
    public function index()
    {
        return view('index');
    }
    /**
     * ********************************* USER ********************************
     * 
     */
    public function login()
    {
        return view('user-login'); //anaran'ny fichier
    }

    public function registration()
    {
        return view('registration');
    }
    // insert data
    public function inserted()
    {
        helper(['form', 'url']);
        //verification
        $validated_image = $this->validate([
            'image' => [
                'uploaded[file]',
                'mime_in[file, image/png, image/jpg,image/jpeg, image/gif]',
                'max_size[file, 7096]',
            ],
        ]);
        $error = $this->validate([
            'fullname' => "required|min_length[2]",

            'email' => [
                'rules' => "required|min_length[2]|is_unique[users.email]",
                'errors' => [
                    'is_unique' => 'E-mail already exist'
                ]
            ],
            'password' => "required|min_length[2]",
            'confirmPassword' => [
                'rules' => "required|min_length[2]|Matches[password]",
                'errors' => [
                    'Matches' => 'Confirm password error'
                ]
            ],
            'phone' => "required|min_length[2]",
            'gender' => "required|min_length[2]",
            'address' => "required|min_length[2]"

        ]);

        if (!$error && !$validated_image) {
            echo view('registration', [
                'error' => $this->validator
            ]);
        } else {
            $userModel = new User();

            $imageFile = $this->request->getFile('file');
            $imageName = $imageFile->getRandomName();
            $password = $this->request->getPost('password');
            $donnes = [
                'fullname' => $this->request->getPost('fullname'),
                'email' => $this->request->getPost('email'),
                'password' => md5($password),
                'phone' => $this->request->getPost('phone'),
                'gender' => $this->request->getPost('gender'),
                'address' => $this->request->getPost('address'),
                'image' => $imageFile,
                'file' => $imageFile->getClientMimeType()
            ];
            $userModel->insert($donnes);
            return view('user-login');
        }

    }
    public function singnin()
    {
        $session = session();
        helper(['form', 'url']);
        $validation = $this->validate([
            'email' => [
                'rules' => "valid_email|min_length[0]|is_not_unique[users.email]",
                'errors' => [
                    'valid_email' => "Enter your e-mail!",
                    'min_length' => "Vide invalid!",
                    'is_not_unique' => "E-mail is incorrect or your account innexist!"
                ]
            ],
            'password' => [
                'rules' => "min_length[0]",
                'errors' => [
                    'min_length' => "Vide invalid!"
                ]
            ]
        ]);
        if (!$validation) {
            echo view("user-login", ['validation' => $this->validator]);
        } else {
            $user = new User();
            $email = $this->request->getPost("email");
            $password = $this->request->getPost("password");
            $userInfo = $user->where('email', $email)->first();
            if (md5($password) != $userInfo['password']) {
                return redirect()->to('/index')->with('error', 'Password is incorrect');
            } else {
                $userId = $userInfo['id'];
                $userInfo2 = $user->find($userId);
                $data['user'] = $userInfo2;
                $session->set($data);
                return view('dashboard', $data);
            }
        }
    }
    public function profil($id)
    {
        $session = session();
        if (empty($_SESSION['user'])) {
            return redirect()->to('/index')->with('error', 'You can login here !');
        }

        $user = new User();
        helper(['form', 'url']);
        $userInfo['user'] = $user->find($id);
        return view('edit-profile', $userInfo);
    }
    public function updateProfil($id)
    {
        $session = session();
        if (empty($_SESSION['user'])) {
            return redirect()->to('/index')->with('error', 'You can login here !');
        }
        $user = new User();
        helper(['form', 'url']);
        $userInfo['user'] = $user->find($id);
        $oldPassword = $userInfo['password'];
        $imageFile = $this->request->getFile('file');
        $imageName = $imageFile->getRandomName();
        $imageFile->move('upload/', $imageName);
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirmPassword');
        if ($oldPassword == md5($password)) {
            if ($password == $confirmPassword)
                $donnes = [
                    'fullname' => $this->request->getPost('fullname'),
                    'email' => $this->request->getPost('email'),
                    'password' => md5($password),
                    'phone' => $this->request->getPost('phone'),
                    'gender' => $this->request->getPost('gender'),
                    'address' => $this->request->getPost('address'),
                    'image' => $imageName,
                    'file' => $imageFile->getClientMimeType()
                ];
            $user->update($id, $donnes);
        }
    }
    public function offerView()
    {
        $session = session();
        if (empty($_SESSION['user'])) {
            return redirect()->to('/index')->with('error', 'You can login here !');
        }
        $offr = new Offer();
        $data['offr'] = $offr->findAll();
        return view('offersList', $data);
    }
    public function dashView()
    {
        $session = session();
        if (empty($_SESSION['user'])) {
            return redirect()->to('/index')->with('error', 'You can login here !');
        }
        return view('dashboard');
    }
    public function offerDemande($id)
    {
        helper(['form', 'url']);
        $session = session();
        $user = $session->get('user');
        $iduser = $user['id'];

        if (empty($_SESSION['user'])) {
            return redirect()->to('/index')->with('error', 'You can login here !');
        }
        $offer = new Offer();
        $user = new User();
        $requestModel = new RequestOffers();
        $offerInfo = $offer->find($id);
        $data = [
            'idOffers' => $id,
            'idUsers' => $iduser,
            'society' => $offerInfo['society'],
            'status' => $offerInfo['status']
        ];
        //var_dump($offerInfo);
        //var_dump($data);
        $requestModel->create($data);
        return redirect('myOffer');
    }
    public function offerHistory()
    {
        $session = session();
        if (empty($_SESSION['user'])) {
            return redirect()->to('/index')->with('error', 'You can login here !');
        }
        $user = $session->get('user');
        $iduser = $user['id'];
        $demand = new RequestOffers();
        $data['demand'] = $demand->where('idUsers', $iduser)->findAll();
        //var_dump($id);
        return view('job-offer', $data);
    }
    public function ListDetail($id)
    {
        $session = session();
        if (empty($_SESSION['user'])) {
            return redirect()->to('/index')->with('error', 'You can login here !');
        }
        $user = $session->get('user');
        $iduser = $user['id'];
        $demand = new Offer();
        $data['demand'] = $demand->where('id', $id)->findAll();
        //var_dump($id);
        return view('detail-job', $data);
    }
    public function logout(){
        $session = session();
        $_SESSION['user'] = $session;
        $session->destroy();
        return redirect()->to('/index')->with('error', 'Deconnexion Successfully !');
    }

}