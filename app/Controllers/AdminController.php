<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Models\ContactUs;
use App\Models\Offer;
use App\Models\Page;
use App\Models\User;
use App\Models\Rh;
use CodeIgniter\Controller;


class AdminController extends BaseController
{
    public function __construct()
    {
        $helpers = ['form', 'url'];
    }
    public function index()
    {
        return view('admin/index');
    }
    /**
    * ******************************** ADMIN ********************************
    
    */
    /*public function admin()
    {
    return view('admin/index'); //anaran'ny fichier
    }*/
    public function adminlogin()
    {
        $session = session();
        helper(['form', 'url']);
        $validation = $this->validate([
            'email' => [
                'rules' => "valid_email|min_length[0]|is_not_unique[admin.email]",
                'errors' => [
                    'valid_email' => "Enter your email!",
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
            echo view("/adm", ['validation' => $this->validator]);
        } else
            $admin = new Admin();
            $email = $this->request->getPost("email");
            $password = $this->request->getPost("password");
            $userInfo = $admin->where('email', $email)->first();
            if (md5($password) != $userInfo['password']) {
                return redirect()->to('/adm')->with('error', 'Password is incorrect');
            } else {
                $userId = $userInfo['id'];
                $userInfo2 = $admin->find($userId);
                $data['admin'] = $userInfo2;
                $session->set($data);
                //return view('/admin/dashboard',$data);
                return redirect()->to('/dashb');
            }
        //}
    }
    public function homeAdmin()
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }

        $userMod = new User();
        $rh = new Rh();
        $offer = new Offer();
        $conta = new ContactUs();
        helper(['form', 'url']);
        $userInfo['userMod'] = $userMod->countAll();
        $userInfo['rh'] = $rh->countAll();
        $userInfo['offer'] = $offer->countAll();
        $userInfo['conta'] = $conta->countAll();
        return view('admin/dashboard',$userInfo);
    }
    
    /**
     * 
     * ******************* USERS ****************************
     * 
     */
    public function usersList()
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        $user = new User();
        $data['user'] = $user->findAll();
        return view('admin/manage-users', $data);
    }
    public function createUser()
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        return view('admin/add-user');
    }
    public function registUser()
    {
        /*$rules = [
        'password' => 'required',
        'confirmPassword' => [
        'rules' => "required|min_length[6]|Matches[password]",
        'errors' => [
        'Matches' => 'Confirm password error'
        ]
        ],
        ];*/
        //if($this->validate([$rules])){
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        $user = new User();
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('upload/', $imageName);
        }

        $data = [
            'image' => $imageName,
            'gender' => $this->request->getPost('gender'),
            'fullname' => $this->request->getPost('fullname'),
            'address' => $this->request->getPost('address'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost(md5('password')),
        ];

        $user->insert($data);
        return redirect('listUser');
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
        /*}
        else
        {
        $data['validation'] = $this->validator;
        return view('admin/add-user', $data);
        }*/

    }
    public function userEdit($id = false)
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        $userMod = new User();
        helper(['form', 'url']);
        $userInfo['userMod'] = $userMod->find($id);
        return view('admin/edit-user', $userInfo);
    }
    public function useEdt($id)
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        $user = new User();
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('upload/', $imageName);
        }
        $data = [
            'image' => $imageName,
            'gender' => $this->request->getPost('gender'),
            'fullname' => $this->request->getPost('fullname'),
            'address' => $this->request->getPost('address'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost(md5('password')),
        ];
        $user->update($id,$data);
        return redirect('listUser');
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')

    }
    public function userDel($id = false)
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        $userMod = new User();
        helper(['form', 'url']);
        $userInfo['userMod'] = $userMod->delete($id);
        return redirect('listUser');
    }
    /**
     * 
     * ******************* RH ****************************
     * 
     */
    public function rhList()
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        $rh = new Rh();
        $data['rh'] = $rh->findAll();
        return view('admin/manage-rh', $data);
    }
    public function createRh()
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        return view('admin/add-rh');
    }
    public function registRh()
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        /*$rules = [
        'password' => 'required',
        'confirmPassword' => [
        'rules' => "required|min_length[6]|Matches[password]",
        'errors' => [
        'Matches' => 'Confirm password error'
        ]
        ],
        ];*/
        //if($this->validate([$rules])){
            $rh = new Rh();
        /*$file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('upload/', $imageName);
        }*/

        $data = [
            //'image' => $imageName,
            'name' => $this->request->getPost('name'),
            'society' => $this->request->getPost('society'),
            'address' => $this->request->getPost('address'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost(md5('password')),
        ];

        $rh->insert($data);
        return redirect('listRh');
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
        /*}
        else
        {
        $data['validation'] = $this->validator;
        return view('admin/add-user', $data);
        }*/

    }
    public function rhEdit($id = false)
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        $rh = new Rh();
        helper(['form', 'url']);
        $rhInfo['rh'] = $rh->find($id);
        return view('admin/edit-rh', $rhInfo);
    }
    public function rhEdt($id)
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        $rh = new Rh();
        /*$file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('upload/', $imageName);
        }*/
        $data = [
            //'image' => $imageName,
            'name' => $this->request->getPost('name'),
            'society' => $this->request->getPost('society'),
            'address' => $this->request->getPost('address'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost(md5('password')),
        ];
        $rh->update($id,$data);
        return redirect('listRh');
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')

    }
    public function rhDel($id = false)
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        $rh = new Rh();
        helper(['form', 'url']);
        $rhInfo['rh'] = $rh->delete($id);
        return redirect('listRh');
    }
    /**
     * 
     * ******************* Offers ****************************
     * 
     */
    public function offerList()
    {
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        $offers = new Offer();
        $data['offers'] = $offers->findAll();
        return view('admin/offer', $data);
    }
    /**
     * 
     * ******************* Contact Us ****************************
     * 
     */
    public function contactUsList(){
        $contus = new ContactUs();
        $data['contus'] = $contus->findAll();
        return view('admin/query', $data);
    }
    public function contactUsAdd(){
        $contus = new ContactUs();
        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('emailid'),
            'phone' => $this->request->getPost('mobileno'),
            'message' => $this->request->getPost('description'),
        ];

        $contus->insert($data);
        return redirect('/');
    }
    /**
     * 
     * ******************* Page ****************************
     * 
     */
    public function pageAboutView(){
        helper(['form', 'url']);
        $aboutView = new Page();
        $ab ="aboutus";
        $data['aboutView'] = $aboutView->where('pageType', 'aboutus')->findAll();
        return view('admin/about-us', $data);
    }
    public function pageAboutAdd(){
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        helper(['form', 'url']);
        $id = 1;
        $aboutPage = new Page();
        $data = [
            'id' => $id,
            'pageTitle' => $this->request->getPost('pagetitle'),
            'pageDescription' => $this->request->getPost('pageDescription'),
        ];

        $aboutPage->update($id,$data);
        return view('admin/dashboard');
    }
    public function pageContactView(){
        helper(['form', 'url']);
       
        $contView = new Page();
        $data['contView'] = $contView->where('pageType', 'contact')->findAll();
        return view('admin/contact', $data);
    }
    public function pageContactAdd(){
        $session = session();
        if (empty($_SESSION['admin'])) {
            return redirect()->to('/adm')->with('error', 'You can login here !');
        }
        helper(['form', 'url']);
        $contPage = new Page();
        $id = 2;
        $data = [
            'id' => $id,
            'pageTitle' => $this->request->getPost('pagetitle'),
            'pageDescription' => $this->request->getPost('pageDescription'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'disponibleTime' => $this->request->getPost('disponibleTime'),
        ];

        $contPage->update($id,$data);
        return view('admin/dashboard');
    }
    public function logout(){
        $session = session();
        $_SESSION['admin'] = $session;
        $session->destroy();
        return redirect()->to('/adm')->with('error', 'Deconnexion Successfully !');
    }
}