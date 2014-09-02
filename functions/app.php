<?php 

class app{
	
	public $con;
	
	public function db_connect(){
		$this->con = new mysqli('localhost','root','','video_lib');
	}

	public function show_all_video() {
		$start = 0;
		$limit = 10;
		
		
		$this->db_connect();
		
		$result = $this->con->query("SELECT * FROM tb_vid order by title limit " . $start . ",". $limit);
		
		
		return $result->fetch_all(MYSQLI_ASSOC);
		
	}
	
	public function search_videos($values) {
		
		$this->db_connect();
		
		$title		= $values['title'];
		$genre		= $values['genre'];
		$artist		= $values['artist'];
		$year		= $values['year'];
		$ratings	= $values['ratings'];
			
		
		$result = $this->con->query("SELECT * FROM tb_vid where title like '%" . $title . "%' and genre like '%" . $genre ."%' and artist like '%" . $artist . "%' and year like '%" . $year . "%' and ratings like '%" . $ratings . "%' order by title");
		
		return $result->fetch_all(MYSQLI_ASSOC);
	}
	
	public function select_video($options){
		$this->db_connect();
		
		$arr_key = array_keys($options);
		$field = $arr_key[0];
		
		$result = $this->con->query("SELECT * FROM tb_vid where " . $field . " = '" . $options[$field]. "'");
				
		return $result->fetch_assoc();
	}
	
	 public function add_video($values) {
		
		$this->db_connect();
			
		$this->con->query('insert into tb_vid (title,genre,artist,year,ratings,details) 
		values("' . $values['title'] . '","' . $values['genre'] . '","' . $values['artist'] . '","' . $values['year'] . '","' . $values['ratings'] . '","' . $values['details'] . '")');
		
	}
	
	public function delete_video($id) {
		
		$this->db_connect();
		
		$this->con->query('delete from tb_vid where id = "' . $id . '"');
		
	}
	
	
}
?>