<?php
class Samplemodel extends CI_Model {	
	public function bugsdata()
	{
				$this->load->database();
				
                
				$query=$this->db->get_where('bugs', array('id' => 1231));
				
				return $query->row_array();
				
			//return $query->result();
	}
	public function insert()
	{
	$this->load->database();
				
                $data=array('id'=>'11231','flag'=>'2','desc'=>'masperpass','project'=>'masterpass','category'=>'checkout','reportedby'=>"","reportedon"=>"" ,"priority"=>"",'assignedto'=>'',"status"=>"","lastupdatedby"=>"","lastupdatedon"=>"");
				$result= $this->db->insert('bugs', $data); 
		if($result==1)
		{
			 $results=array('id'=>'11231','data'=>'sucess');
			return $results;
		}
		else {
			 $results=array('id'=>'11231','data'=>'failure');
			return $results;
			}
	}
	
}
?>