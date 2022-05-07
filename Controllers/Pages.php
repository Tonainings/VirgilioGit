<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Pages extends BaseController {


public function view($page = 'home')
        {     
		    if (! is_file(APPPATH . 'Views/pages/' . $page . '.php'))
        {
                // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);;//If the page doesn’t exist, a “404 Page not found” 	error is shown.
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter. In the header template, the $title variable was used to customize the page title. The value of title is defined in this method, but instead of assigning the value to a variable, it is assigned to the title element in the $data array.

        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer', $data);     


}}
?>