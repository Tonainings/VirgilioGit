<?php
namespace App\Models;
use CodeIgniter\Model;
class UtenteModel extends Model
{ 
	protected $table= 'utente';
	protected $primaryKey = 'userid';
	protected $allowedFields = [ 'userid', 'password', 'email', 'tipo'];

  
  public function __construct(ConnectionInterface &$db = null, ValidationInterface $validation = null)
  {
    parent::__construct($db, $validation);
    $this->db->schema = '"Virgilio"';
  }
  


  public function getUtente($userid = FALSE)
  {
        if ($userid === FALSE)
          { $sql = "SELECT * FROM utente ORDER BY userid;";
            $query =  $this->query($sql);
            return $query->getResultArray();
          }
          $sql = "SELECT * FROM utente WHERE userid='$userid';"; 
          $query = $this->query($sql);
          return $query->getRowArray();
          
  } 


  public function setUtente($data)
  {
          $sql = "INSERT INTO utente (userid, password, email, tipo)  values( '$data[userid]','$data[password]', '$data[email]', '$data[tipo]');"; 
          $query =  $this->query($sql);
          return $query;
  } 


}
?>