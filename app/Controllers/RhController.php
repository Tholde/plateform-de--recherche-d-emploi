<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Models\Offer;
use App\Models\RequestOffers;
use App\Models\Rh;
use CodeIgniter\Controller;

class RhController extends BaseController
{
    public function index()
    {
        return view('index');
    }
    /**
     * ******************************** RH ***********************************
     * @return string
     */
    public function rhLog()
    {
        return view('rh/index'); //anaran'ny fichier
    }
    public function registrationRh()
    {
        return view('rh/registration');
    }
    // insert data
    public function insertedRh()
    {
        helper(['form', 'url']);
        //verification
        $error = $this->validate([
            'name' => "required|min_length[2]",
            'society' => "required|min_length[2]",
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
            'address' => "required|min_length[2]"

        ]);

        if (!$error) {
            echo view('signup', [
                'error' => $this->validator
            ]);
        } else {
            $rhModel = new Rh();
            $password = $this->request->getPost('password');
            $data = [
                'name' => $this->request->getPost('name'),
                'society' => $this->request->getPost('society'),
                'email' => $this->request->getPost('email'),
                'password' => md5($password),
                'phone' => $this->request->getPost('phone'),
                'address' => $this->request->getPost('address')
            ];
            $rhModel->save($data);
            return redirect('rhLogin');
        }

    }
    public function singninRh()
    {

        helper(['form', 'url']);

        $session = session();
        helper(['form', 'url']);
        $validation = $this->validate([
            'email' => [
                'rules' => "valid_email|min_length[0]|is_not_unique[rh.email]",
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
            echo view("rh/index", ['validation' => $this->validator]);
        } else {
            $rhModel = new Rh();
            $email = $this->request->getPost("email");
            $password = $this->request->getPost("password");
            $rhInfo = $rhModel->where('email', $email)->first();
            if (md5($password) != $rhInfo['password']) {
                return redirect()->to('/rhLogin')->with('error', 'Password is incorrect');
            } else {
                $rhId = $rhInfo['id'];
                $rhInfo2 = $rhModel->find($rhId);
                $data['rh'] = $rhInfo2;
                $session->set($data);
                return view('rh/dashboard', $data);
            }
        }
        /*$rhModel = new Rh();
        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");
        $rhInfo = $rhModel->where('email', $email)->first();
        var_dump($rhInfo);
        if (md5($password) == $rhInfo['password']) {
            $rhId = $rhInfo['id'];
            $userInfo2 = $rhModel->find($rhId);
            $data['rh'] = $userInfo2;
            return view('dashboard', $data);
        } else if (md5($password) != $rhInfo['password']) {
            return redirect()->to('/rhLogin')->with('error', 'Password is incorrect');
        }else if (md5($password) == $rhInfo['password']) {
            return redirect()->to('/rhLogin')->with('error', 'E-mail is incorrect');
        }
        else {
            return redirect()->to('/rhLogin')->with('error', 'E-mail and password is incorrect');
        }*/
        //}

    }
    public function dashViewRh()
    {
        $session = session();
        if (empty($_SESSION['rh'])) {
            return redirect()->to('/rhLogin')->with('error', 'You can login here !');
        }
        return view('rh/dashboard');
    }
    public function rhProfil($id)
    {
        $rh = new Rh();
        $session = session();
        if (empty($_SESSION['rh'])) {
            return redirect()->to('/rhLogin')->with('error', 'You can login here !');
        }
        helper(['form', 'url']);
        $rhInfo['user'] = $rh->find($id);
        return view('edit-profile', $rhInfo);
    }
    public function updateProfilRh($id)
    {
        $rh = new Rh();
        helper(['form', 'url']);
        $password = $this->request->getPost('password');
        $data = [
            'name' => $this->request->getPost('name'),
            'society' => $this->request->getPost('society'),
            'email' => $this->request->getPost('email'),
            'password' => md5($password),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address')
        ];
        $rh->update($id, $data);
    }
    
    public function viewOffersRh()
    {
        $rh = new Rh();
        $session = session();
        if (empty($_SESSION['rh'])) {
            return redirect()->to('/rhLogin')->with('error', 'You can login here !');
        }
        helper(['form', 'url']);
        $rh = $session->get('rh');
        $society = $rh['society'];
        $offer = new Offer();
        $offr['demand'] = $offer->where('society', $society)->findAll();
        return view('offersList', $offr);
    }
    public function addOffers()
    {
        $offer = new Offer();
        $rh = new Rh();
        $session = session();
        if (empty($_SESSION['rh'])) {
            return redirect()->to('/rhLogin')->with('error', 'You can login here !');
        }
        helper(['form', 'url']);
        $data = [
            'title' => $this->request->getPost('title'),
            'society' => $this->request->getPost('society'),
            'description' => $this->request->getPost('description'),
            'typeContrat' => $this->request->getPost('typeContrat'),
            'status' => '1'
        ];
        $offer->insert($data);
    }
    public function updateRhOffers($id = false){
        $offer = new Offer();
        helper(['form', 'url']);
        $rhInfo['rh'] = $offer->find($id);
        return view('rh/edit-Offer', $rhInfo);
    }
    public function updateOffer($id)
    {
        $offer = new Offer();
        
        helper(['form', 'url']);
        $data = [
            'title' => $this->request->getPost('title'),
            'society' => $this->request->getPost('society'),
            'description' => $this->request->getPost('description'),
            'typeContrat' => $this->request->getPost('typeContrat'),
            'status' => $this->request->getPost('status')
        ];
        $offer->update($id, $data);
    }
    public function offerDel($id = false)
    {
        $session = session();
        $offer = new Offer();
        if (empty($_SESSION['rh'])) {
            return redirect()->to('/rhLogin')->with('error', 'You can login here !');
        }
        helper(['form', 'url']);
        $rhInfo['demand'] = $offer->delete($id);
        return redirect('rh/offersList');
    }
    public function requestList()
    {
        $demand = new RequestOffers();
        $session = session();
        $offer = new Offer();
        if (empty($_SESSION['rh'])) {
            return redirect()->to('/rhLogin')->with('error', 'You can login here !');
        }
        $user = $session->get('rh');
        $society = $user['society'];
        $data['demand'] = $demand->where('society', $society)->findAll();
        return view('rh/request-list', $data);
    }
    public function logout(){
        $session = session();
        $_SESSION['rh'] = $session;
        $session->destroy();
        return redirect()->to('/rhLogin')->with('error', 'Deconnexion Successfully !');
    }
}