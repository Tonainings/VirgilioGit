<?php
namespace App\Models;
use CodeIgniter\Model;
class ProfiloModel extends Model
{ 
	protected $table= 'profilo';
	protected $primaryKey = 'id_num';
	protected $allowedFields = ['id_num', 'userid', 'identificationid', 'image', 'name', 'last_name', 'city', 'region','bio','phone_number'];

  
  public function __construct(ConnectionInterface &$db = null, ValidationInterface $validation = null)
  {
    parent::__construct($db, $validation);
    $this->db->schema = '"Virgilio"';
  }
  


  public function getProfilo($userid = FALSE)
  {
        if ($userid === FALSE)
          { $sql = "SELECT * FROM profilo ORDER BY userid;";
            $query =  $this->query($sql);
            return $query->getResultArray();
          }
          $sql = "SELECT * FROM profilo WHERE userid='$userid';"; 
          $query = $this->query($sql);
          return $query->getRowArray();
          
  } 
  


  public function setProfilo($data)
  {
          $sql = "INSERT INTO profilo (userid, identificationid, id_num, image, name, last_name, city, region, bio, phone_number)  values( '$data[userid]','$data[identificationid]','$data[id_num]', '$data[image]', '$data[name]', '$data[last_name]', '$data[city]', '$data[region]', '$data[bio]', '$data[phone_number]');"; 
          $query =  $this->query($sql);
          return $query;
  } 

  public function modifyProfilo($data)
  {
    $sql = "UPDATE profilo SET userid ='$data[userid]', identificationid ='$data[identificationid]', id_num ='$data[id_num]', image ='$data[image]', name = '$data[name]', last_name ='$data[last_name]', city ='$data[city]', region ='$data[region]', bio ='$data[bio]', phone_number ='$data[phone_number]' WHERE userid='$data[userid]';";
    $query =  $this->query($sql);
    return $query;
  }


}
?>
<!--$sql = "UPDATE profilo SET userid ='{$_POST["userid"]}', 
    identificationid ='{$_POST["identificationid"]}', 
    id_num ='{$_POST["id_num"]}', 
    name ='{$_POST["name"]}', 
    last_name ='{$_POST["last_name"]}', 
    city ='{$_POST["city"]}', 
    region ='{$_POST["region"]}', 
    bio ='{$_POST["bio"]}', 
    phone_number ='{$_POST["phone_number"]}'
    WHERE userid ='{$_POST["userid"]}' ;";
    $sql = "UPDATE profilo SET userid ='$data[userid]', identificatioid ='$data[identificationid]', id_num ='$data[id_num]', image ='$data[image]', name = '$data[name]', last_name ='$data[last_name]', city ='$data[city]', region ='$data[region]', bio ='$data[bio]', phone_number ='$data[phone_number]';";
    $query =  $this->query($sql);-->