<?php
namespace App\Controllers;
use App\Models\LoginModel;
use CodeIgniter\Controller;

class Login extends BaseController {
    
  public function getcredential() {
/*
          if ($this->session->userdata('logged_in')) {
              redirect('home', 'refresh');
          } else {
*/
$model = new loginModel();
//$data['utente'] = $model->getUtente();
$data['title'] = 'LOGIN';
echo view('templates/header', $data);
echo view('login/signin', $data); //overview
echo view('templates/footer', $data);
/*
              $data = array();
              $data['titolo'] = 'Login';
              $this->load->view('templates/header', $data);
              $this->load->view('login/view', $data);
              $this->load->view('templates/footer');
          }
          */
        
 }

    public function dologin() {
        $model = new LoginModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
         'email' => 'required',
         'password'  => 'required'
         ]) ) 
         {
           $data=[
           'email' => $this->request->getPost('email'),
           'password'  => $this->request->getPost('password')
           ];
           
           $data['utente']=$model->checkpwd($data['email'],$data['password']);
           if ($data['utente']) {
             // memorizzo i dati nella sessione
            
             $userdata = [
              'userid' => $data['utente']['userid'],
              'email' => $data['utente']['email'],
              'tipo' => $data['utente']['tipo'],
              'logged_in' => true,
             ];
          
             $this->session->set($userdata);
      
                echo view('templates/header', ['title' => 'Login']);
                echo view('pages/myvirgilio');
                echo view('templates/footer');
               
            } else {

            //    $this->form_validation->set_message('check_database', 'Invalid username or password');
            echo view('templates/header', ['title' => 'Login']);
            echo view('login/loginerror', $data);
            echo view('templates/footer');
         
            }
           
        }
        
    }

    public function dologout() {
      $model = new LoginModel();

           $userdata = [
            'userid' => null,
            'email' => null,
            'tipo' => null,
            'logged_in' => false,
           ];
        
           $this->session->set($userdata);
    
           echo view('templates/header', ['title' => 'Home']);
           echo view('pages/home');
           echo view('templates/footer');
      
  }


}
?>