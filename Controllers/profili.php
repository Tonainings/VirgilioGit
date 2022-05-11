<?php
namespace App\Controllers;
use App\Models\ProfiloModel;
use CodeIgniter\Controller;

//ho creato il controller del sito, qui metterò tutte le funzioni, tutto quello che il sito dovrà fare.
class profili extends BaseController {

    public function index()
    {
      $model = new ProfiloModel();
      $data['profilo'] = $model->getProfilo();
	    $data['title'] = 'Profilo Utente';
      echo view('templates/header', $data);
      echo view('profili/overview', $data);
      echo view('templates/footer', $data);

    }

    public function view($userid = null)
    {  
        $model = new ProfiloModel();
        $data['profilo'] = $model->getProfilo($userid);
        

        if (! is_file(APPPATH . 'Views/profili/profilo.php'))
        {
                // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the profile: ' . $userid);;//If the page doesn’t exist, a “404 Page not found” 	error is shown.
        }
        $data['title'] = ucfirst($data['profilo']['name']). ' '. ucfirst($data['profilo']['last_name']);
        
        echo view('templates/header', $data);
        echo view('profili/view', $data);
        echo view('templates/footer', $data);
           
    }

    public function create()
    {
     $model = new ProfiloModel();

     if ($this->request->getMethod() === 'post' && $this->validate([
      'userid' => 'required',
      'identificationid'  => 'required',
      'id_num' => 'required',
      'name'  => 'required',
      'last_name'  => 'required',
      'city'  =>'required',
      'region'  => 'required' 
	  ]) ) 
      {
        $data=[
        'userid' => $this->request->getPost('userid'),
        'identificationid'  => $this->request->getPost('identificationid'),
        'id_num'  => $this->request->getPost('id_num'),
        'name'  => $this->request->getPost('name'),
        'last_name'  => $this->request->getPost('last_name'),
        'city'  => $this->request->getPost('city'),
        'region'  => $this->request->getPost('region'),
        'bio'  => $this->request->getPost('bio'),
        'phone_number'  => $this->request->getPost('phone_number'),
        //'image'  => $this->request->getPost('image'),
        //'imageFile' => $this->request->getFile('image')
        ];

        $path = FCPATH . '/uploads';

        $image = $this->request->getFile('image');
        $image->move($path);
        $data['image'] = '/uploads/' . $_FILES['image']['name'];		
    	$model->setProfilo($data);
        // $model->save($data);
        echo view('profili/success');
      } else {
        echo view('templates/header', ['title' => 'Create a Profilo']);
        echo view('profili/create');
        echo view('templates/footer');
      }
    } 

    public function modify($userid = null)
    {
     $model = new ProfiloModel();
     $data['profilo'] = $model->getProfilo($userid);
     

     if ($this->request->getMethod() === 'post' && $this->validate([
      'userid' => 'required',
      'identificationid'  => 'required',
      'id_num' => 'required',
      'name'  => 'required',
      'last_name'  => 'required',
      'city'  =>'required',
      'region'  => 'required' 
	  ]) ) 
      {
        $data=[
        'userid' => $this->request->getPost('userid'),
        'identificationid'  => $this->request->getPost('identificationid'),
        'id_num'  => $this->request->getPost('id_num'),
        'name'  => $this->request->getPost('name'),
        'last_name'  => $this->request->getPost('last_name'),
        'city'  => $this->request->getPost('city'),
        'region'  => $this->request->getPost('region'),
        'bio'  => $this->request->getPost('bio'),
        'phone_number'  => $this->request->getPost('phone_number'),
        'image'  => $this->request->getPost('image')
        ];
		        $path = FCPATH . '/uploads';

        $image = $this->request->getFile('image');
        $image->move($path);
        $data['image'] = '/uploads/' . $_FILES['image']['name'];    
        
    	$model->modifyProfilo($data);
        // $model->save($data);
        $data['title'] = ucfirst($data['profilo']['name']). ' '. ucfirst($data['profilo']['last_name']);

        echo view('templates/header', $data);
        echo view('profili/success', $data, );
        echo view('templates/footer', $data);
        
      } else{
        
        
        echo view('templates/header', $data,);
        echo view('profili/modifica', $data);
        echo view('templates/footer', $data);
      }
    }


}
?>