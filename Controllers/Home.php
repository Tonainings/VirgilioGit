<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //$this->session->set('logged_in',false);

        if (!$_SESSION['logged_in']) {
            $userdata = [
                'userid' => null,
                'password' => null,
                'email' => null,
                'tipo' => null,
                'id_num' => null,
                'name' => null,
                'last_name'  => null,
                'city' => null,
                'region' => null,
                'bio' => null,
                'phone_number' => null,
                'logged_in' => false,
            ];
            
            $this->session->set($userdata);
        }
   
        echo view('templates/header', ['title' => 'Home']);
        echo view('pages/home');
        echo view('templates/footer');
        return;
    }

    public function initialize_userdata()
    {

    $userdata = [
        'userid' => null,
        'password' => null,
        'email' => null,
        'tipo' => null,
        'id_num' => null,
        'name' => null,
        'last_name'  => null,
        'city' => null,
        'region' => null,
        'bio' => null,
        'phone_number' => null,
        'logged_in' => false,
    ];
    
    $this->session->set($userdata);

    }
}
