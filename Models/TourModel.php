<?php
namespace App\Models;
use CodeIgniter\Model;
class TourModel extends Model
{ 
	protected $table= 'tour';
	protected $primaryKey = 'tourid';
	protected $allowedFields = ['tourid', 'userid', 'url', 'date_tour', 'time_tour', 'description', 'city', 'tour_name','region'];

  
  public function __construct(ConnectionInterface &$db = null, ValidationInterface $validation = null)
  {
    parent::__construct($db, $validation);
    $this->db->schema = '"Virgilio"';
  }
  


  public function getTour($tourid = FALSE)
  {
        if ($tourid === FALSE)
          { $sql = "SELECT * FROM tour ORDER BY tourid;";
            $query =  $this->query($sql);
            return $query->getResultArray();
          }
          $sql = "SELECT * FROM tour WHERE tourid='$tourid';"; 
          $query = $this->query($sql);
          return $query->getRowArray();
          
  } 
  


  public function setTour($data)
  {
          $sql = "INSERT INTO tour (tourid, userid, url, date_tour, time_tour, description, city, tour_name, region)  values( '$data[tourid]','$data[userid]','$data[url]', '$data[date_tour]', '$data[time_tour]', '$data[description]', '$data[city]', '$data[tour_name]', '$data[region]');"; 
          $query =  $this->query($sql);
          return $query;
  } 




}
?>