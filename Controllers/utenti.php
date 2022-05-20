<?php
namespace App\Controllers;
use App\Models\UtenteModel;
use CodeIgniter\Controller;

//ho creato il controller del sito, qui metterò tutte le funzioni, tutto quello che il sito dovrà fare.
class utenti extends BaseController {

    public function index()
    {
      $model = new UtenteModel();
      $data['utente'] = $model->getUtente();
	    $data['title'] = 'Utenti registrati';
      echo view('templates/header', $data);
      echo view('utente/overview', $data); //overview
      echo view('templates/footer', $data);

    }

    public function view($userid = null)
    {  
        $model = new UtenteModel();
        $data['utente'] = $model->getUtente($userid);

	    if (empty($data['utente'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the user: ' . $userid);
        }
    
        $data['title'] = ($data['utente']['userid']). ' '. ($data['utente']['email']);
    
        echo view('templates/header', $data);
        echo view('utente/view', $data);
        echo view('templates/footer', $data);
           
    }

    public function create()
    {
     $model = new UtenteModel();

     if ($this->request->getMethod() === 'post' && $this->validate([
	  'userid' => 'required',
      'email'  => 'required',
	  'password'  => 'required',
      'tipo'  => 'required'
	  ]) ) 
      {
        $data=[
        'userid' => $this->request->getPost('userid'),
        'email'  => $this->request->getPost('email'),
		'password'  => $this->request->getPost('password'),
        'tipo'  => $this->request->getPost('tipo')
        ];
		
    	$model->setUtente($data);
        // $model->save($data);
        echo view('templates/header', $data);
        echo view('login/signin', $data);
        echo view('templates/footer', $data);
      } else {
        echo view('templates/header', ['title' => 'Registrazione']);
        echo view('utente/registrazione');
        echo view('templates/footer');
      }
    } 

}
?>