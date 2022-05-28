<?php
namespace App\Controllers;
use App\Models\TourModel;
use CodeIgniter\Controller;

//ho creato il controller del sito, qui metterò tutte le funzioni, tutto quello che il sito dovrà fare.
class tour extends BaseController {

  public function index()
  {
    $model = new TourModel();
    $data['tour'] = $model->getTour();
    $data['title'] = 'Tutti i tour';
    echo view('templates/header', $data);
    echo view('tour/tutti_tour', $data);
    echo view('templates/footer', $data);

  }

  public function view($tourid = null)
  {  
      $model = new TourModel();
      $data['tour'] = $model->getTour($tourid);
      

      if (! is_file (APPPATH . 'Views/tour/tour.php'))
      {
              // Whoops, we don't have a page for that!
          throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the tour: ' . $tourid);;//If the page doesn’t exist, a “404 Page not found” 	error is shown.
      }
      $data['title'] = ucfirst($data['tour']['tour_name']). ' '. ucfirst($data['tour']['tourid']);
      
      echo view('templates/header', $data);
      echo view('tour/tour', $data);
      echo view('templates/footer', $data);
         
  }

    public function create()
    {
     $model = new TourModel();

     if ($this->request->getMethod() === 'post' && $this->validate([
      'tourid' => 'required',
      'userid'  => 'required',
      
      'date_tour'  => 'required',
      'time_tour'  => 'required',
      'description'  =>'required',
      'city'  =>'required',
      'tour_name'  =>'required',
      'region'  => 'required' 
	  ]) ) 
      {
        $data=[
        'tourid' => $this->request->getPost('tourid'),
        'userid' => $this->request->getPost('userid'),

        'date_tour'  => $this->request->getPost('date_tour'),
        'time_tour'  => $this->request->getPost('time_tour'),
        'description'  => $this->request->getPost('description'),
        'city'  => $this->request->getPost('city'),
        'tour_name' => $this->request->getPost('tour_name'),
        'region'  => $this->request->getPost('region'),
        ];

        $model->setTour($data);

        echo view('templates/header');
        echo view('tour/success', $data);
        echo view('templates/footer');

      } else {
        echo view('templates/header', ['title' => 'Create a Tour']);
        echo view('tour/create');
        echo view('templates/footer');
      }
    } 

}
?>