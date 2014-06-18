<?php
	include_once("connect.php");

	class Faq{
		private $num, $question, $answer, $tag, $datelastupdate, $visitcount;

		function __construct($array){
			if(is_resource($array)){
				echo "RESOURCE</br>";	// if function load was used

				while ($row = mysql_fetch_assoc($array)) {
					$this->num=$row['faqno'];
					$this->question=$row['question'];
					$this->answer=$row['answer'];
					$this->tag=$row['tag'];
					$this->datelastupdate=$row['datelastupdate'];
					$this->visitcount=$row['visit_count'];
					break;
				}
			}
			else{
				echo "ARRAY</br>";			// if a new entry is to inserted to the database

				$this->question=$array['question'];
				$this->answer=$array['answer'];
				$this->tag=$array['tag'];
				$this->faq_save_new();
			}
		}

		function get_num(){
			return $num;
		}
		
		function get_question(){
			return $question;
		}

		function get_answer(){
			return $answer;
		}

		function get_tag(){
			return $tag;
		}

		function get_datelastupdate(){
			return $datelastupdate;
		}

		function get_visitcount(){
			return $visitcount;
		}

		function update_question($question){
			$query="UPDATE faqs SET question='".$question."', datelastupdate=CURRENT_DATE() WHERE faqno=".$this->num;
			$result = mysql_query($query);
			if (!$result) die(mysql_error());
		}

		function update_answer($answer){
			$query="UPDATE faqs SET answer='".$answer."', datelastupdate=CURRENT_DATE() WHERE faqno=".$this->num;
			$result = mysql_query($query);
			if (!$result) die(mysql_error());
		}

		function update_tag($tag){
			$query="UPDATE faqs SET tag='".$tag."', datelastupdate=CURRENT_DATE() WHERE faqno=".$this->num;
			$result = mysql_query($query);
			if (!$result) die(mysql_error());
		}

		function update_visitcount($visitcount){
			$query="UPDATE faqs SET visit_count='".$visitcount."', datelastupdate=CURRENT_DATE() WHERE faqno=".$this->num;
			$result = mysql_query($query);
			if (!$result) die(mysql_error());
		}

		function delete(){
			$query="DELETE FROM faqs WHERE faqno=".$this->num;
			$result = mysql_query($query);
			if (!$result) die(mysql_error());
			echo "Data deleted successfully<br />";
		}

		// function faq_save(){
		// 	// check contents first.
		// 	if(isset($this->num)){
		// 		$query="UPDATE faqs SET question='".$this->question."'', answer='".$this->answer."', tag='".$this->tag."', datelastupdate=CURRENT_DATE() WHERE faqno=".$this->num;
		// 		$result = mysql_query($query);
		// 		if (!$result) die(mysql_error());
		// 		$this->update_datelastupdate();
		// 		echo "Data updated successfully<br />";
		// 	}
		// }

		function faq_save_new(){
			if(!isset($this->num)){
				$query="INSERT INTO `faqs` (`question`, `answer`, `tag`, `datelastupdate`, `visit_count`) VALUES ('".$this->question."', '".$this->answer."', '".$this->tag."', CURRENT_DATE(), 0)";
				$result = mysql_query($query);
				if (!$result) die(mysql_error());
				echo "Data inserted successfully<br />";
			}
			// Faq::load(mysql_insert_id());
		}

		// STATIC FUNCTIONS
		static function get_all(){
			$query = "SELECT * FROM faqs";
			$result = mysql_query($query);
			if (!$result) die(mysql_error());

			return $result;
		}
		
		static function delete_all(){
			$query="DELETE FROM faqs";
			$result = mysql_query($query);
			if (!$result) die(mysql_error());
			echo "Data deleted successfully<br />";
		}

		static function load($num){
			$query = "SELECT * FROM faqs WHERE faqno=".$num;
			$result = mysql_query($query);
			if (!$result) die(mysql_error());

			return new Faq($result);
		}

		static function add($question, $answer, $tag){
			$result['question']=$question;
			$result['answer']=$answer;
			$result['tag']=$tag;
			
			return new Faq($result);
		}

		static function show($item){
			// while ($row = mysql_fetch_assoc($rows)) {
			// 	// echo "<form action='load.php' method='POST'>";
			// 	// echo "<input type='hidden' name='editfaqno' value='".$row['faqno']."'></input>";
			// 	// echo "<label>Question: </label><input type='text' name='editquestion' value='".$row['question']."'></input></td></br>";
			// 	// echo "<label>Answer: </label><input type='text' name='editanswer' value='".$row['answer']."'></input></td></br>";
			// 	// echo "<label>Tags: </label><input type='text' name='edittags' value='".$row['tag']."'></input></td></br>";
			// 	// echo "<input type='submit' name='faqedit' value='Save'></input>";
			// 	// echo "<input type='button' value='Cancel' onclick='redirectpagefaqs()'>";
			// 	// echo "</form>";

			// 	echo $row['faqno']."<br/>";
			// 	echo $row['question']."<br/>";
			// 	echo $row['answer']."<br/>";
			// 	echo $row['tag']."<br/>";
			// 	echo $row['datelastupdate']."<br/>";
			// 	echo $row['visit_count']."<br/><br/>";
			// }
			// echo "function show";
			// var_dump($item);

			
		}

	}

	// $results=Faq::load(1);
	// $new=Faq::add("Question", "Answer", "");
?>