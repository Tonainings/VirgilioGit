<?php
namespace App\Models;
use CodeIgniter\Model;
class LoginModel extends Model
{ 
	protected $table= 'utente';
	protected $primaryKey = 'userid';
	protected $allowedFields = [ 'userid', 'password', 'email', 'tipo'];

  
  public function __construct(ConnectionInterface &$db = null, ValidationInterface $validation = null)
  {
    parent::__construct($db, $validation);
    $this->db->schema = '"Virgilio"';
  }

  public function checkpwd($email = FALSE, $password = FALSE) {
    
    if ($email === FALSE)
    { 
      return false;

    } else {

      $sql = "SELECT * FROM utente WHERE email='$email';"; 
      $query = $this->query($sql);
      $utente = $query->getRowArray();

      if ($password === $utente['password'])
      {
        return $query->getRowArray();;
      } else {
        return false;
      }
    }
     
 } 
  


  /*public function getUtente($userid = FALSE)
  {
        if ($userid === FALSE)
          { $sql = "SELECT * FROM utente ORDER BY userid;";
            $query =  $this->query($sql);
            return $query->getResultArray();
          }
          $sql = "SELECT * FROM utente WHERE userid='$userid' and password='$password';"; 
          $query = $this->query($sql);
          return $query->getRowArray();
          
  } */
  
  /* public function login()
  {
    
    if($this->input->post('login'))
    {
      $e=$this->input->post('userid');
      $p=$this->input->post('password');


      $sql = "SELECT * FROM utente WHERE email='$e' and password='$p';";
      $query = $this->query($sql);
      /* return $query->getRowArray(); */
     // $row=$query->num_rows(); ricordati di togliere le /

     /* $sql=$this->db->query("select * from utente where email='".$e."' and password='$p'");
      $row = $que->num_rows();*/

     // if($row)
      //{
     // redirect('utenti/login'); /*non sono sicura sia login*/
     // }
     // else
      //{
    //$data['error']="<h3 style='color:red'>Invalid login details</h3>";
      //}	
    //}
    //$this->load->view('login',@$data);
  //} 

} 
?>