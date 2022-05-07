<?php
namespace App\Controllers;
use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
   public function index()
   {
     $model = new NewsModel();

     $data['news'] = $model->getNews();
	 $data['title'] = 'News archive';
     echo view('templates/header', $data);
     echo view('news/overview', $data);
     echo view('templates/footer', $data);

   }

   public function view($slug = null)
   {
    $model = new NewsModel();
    $data['news'] = $model->getNews($slug);

    if (empty($data['news'])) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
    }

    $data['title'] = $data['news']['title'];

    echo view('templates/header', $data);
    echo view('news/view', $data);
    echo view('templates/footer', $data);
   }
   public function create()
   {
     $model = new NewsModel();

     if ($this->request->getMethod() === 'post' && $this->validate([
	  'id'  => 'required',
	  'title' => 'required',
      'text'  => 'required',
	  'slug'  => 'required',    
	  ]) ) {
        $data=[
        'id' => $this->request->getPost('id'),
        'title' => $this->request->getPost('title'),
        'text'  => $this->request->getPost('text'),
		    'slug'  => $this->request->getPost('slug'),
        ];
		
        $model->setNews($data);
        // $model->save($data);
        echo view('news/success');
        } else {
            echo view('templates/header', ['title' => 'Create a news item']);
            echo view('news/create');
            echo view('templates/footer');
        }
   }

}
?>