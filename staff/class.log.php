<?php
	include_once("connect.php");

	class Log{
		private $logid, $datecommit, $description, $type, $faq_no, $t_id;

		function __construct($array){
			if(is_resource($array)){
				echo "RESOURCE</br>";	// if function load was used

				while ($row = mysql_fetch_assoc($array)) {
					$this->logid=$row['logid'];
					$this->datecommit=$row['datecommit'];
					$this->description=$row['description'];
					$this->type=$row['type'];
					$this->faq_no=$row['faq_no'];
					$this->t_id=$row['t_id'];
					break;
				}
			}
			else{
				echo "ARRAY</br>";			// if a new entry is to inserted to the database

				$this->question=$array['question'];
				$this->type=$array['type'];
				$this->faq_no=$array['faq_no'];
				$this->t_id=$array['t_id'];
				$this->log_save_new();
			}
		}

		function get_logid(){
			return $this->logid;
		}

		function get_datecommit(){
			return $this->datecommit;
		}

		function get_description(){
			return $this->description;
		}

		function get_type(){
			return $this->type;
		}

		function get_faq_no(){
			return $this->faq_no;
		}

		function get_t_id(){
			return $this->t_id;
		}

		function faq_save_new(){
			if(!isset($this->num)){
				$query="INSERT INTO `faqs` (`question`, `answer`, `tag`, `datelastupdate`, `visit_count`) VALUES ('".$this->question."', '".$this->answer."', '".$this->tag."', CURRENT_DATE(), 0)";
				$result = mysql_query($query);
				if (!$result) die(mysql_error());
				echo "Data inserted successfully<br />";
			}
			Faq::load(mysql_insert_id());
		}

		// STATIC FUNCTIONS
		static function delete_all(){
			$query="DELETE FROM faqs";
			$result = mysql_query($query);
			if (!$result) die(mysql_error());
			echo "Data deleted successfully<br />";
		}
		
		static function get_all(){
			$query = "SELECT * FROM logs";
			$result = mysql_query($query);
			if (!$result) die(mysql_error());

			return $result;
		}

		static function load($num){
			$query = "SELECT * FROM logs WHERE logid=".$num;
			$result = mysql_query($query);
			if (!$result) die(mysql_error());

			return new Log($result);
		}

		static function add($description, $type, $faq_no, $t_id){
			$result['description']=$description;
			$result['type']=$type;
			$result['tag']=$tag;
			$result['faq_no']=$faq_no;
			$result['t_id']=$t_id;
			
			return new Log($result);
		}

	}
?>