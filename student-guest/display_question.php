<?php
	require_once('connect.php');

	$input = $_POST['input'];
	$type = $_POST['type'];

	echo "<a href='help.php'>&laquo Back to Categories</a><br />";

	if($type=='search'){
		$query = "SELECT *, MATCH(question, answer, tag) AGAINST ('$input') AS score FROM faqs WHERE MATCH (question, answer, tag) AGAINST ('$input') ORDER BY score DESC";
	}else if($type=='top'){
		echo "<h3>Most Asked Questions:</h3>";
		require_once('update-visit.php');
		$query = "SELECT question, faqno, answer FROM faqs ORDER BY visit_count DESC LIMIT 10";
	}
	else{
		echo $input;
		$query = "SELECT question, faqno, answer FROM faqs WHERE tag = '$input'";
	}		
		$result = mysql_query($query);

			if (!$result) die(mysql_error());
			echo "<section class='accordion'>";
			$count=1;
			
			if(mysql_num_rows($result)<1){
				echo "No results found!";
			}
			
			while ($row = mysql_fetch_assoc($result)) {
				$row['faqno']==$input ? $check = 'checked': $check = '';
				echo "<div>";
				echo "<input id='".$row['faqno']."' name='accordion1' type='checkbox' ".$check."/>";
				echo "<label for='".$row['faqno']."'><p class='q'>".$count.".) ".$row['question']."</p></label>";
				echo "<article class='large'>";
				echo "<p>".$row['answer']."</p>";
				echo "</article>";
				echo "</div>";
				$count++;
			}
			echo "</section>";
			mysql_free_result($result);

?>