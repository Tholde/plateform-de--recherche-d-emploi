<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Models\Page;
use App\Models\User;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        $contView = new Page();
        $contcVi = new Page();
        helper(['form', 'url']);
        $data['contView'] = $contView->where('id', '1')->findAll();
        $data['contcVi'] = $contcVi->where('id', '2')->findAll();
        return view('index', $data);
    }
}