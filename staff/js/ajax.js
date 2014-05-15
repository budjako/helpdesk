function studenttickets(){	
	var student_no=document.getElementById('selectstdno').selectedOptions[0].text;
	$.ajax({
		url: 'query.php',
		type: 'POST',
		async: false,
		data: {"student_no":student_no, "option": "studentticket"},
		success: function(result){
			$('.divticketstud').html(result);
		}
	});
}

// <?php
// 	echo "<h1>Tickets by Student x</h1>";

// 	$query = "SELECT student_no FROM tickets where student_no IS NOT NULL";
// 	$result = mysql_query($query);
// 	if (!$result) die(mysql_error());
	
// 	echo "<select id='selectstdno'>";
// 	while ($row = mysql_fetch_assoc($result)) {
// 		echo "<option value=".$row['student_no'].">".$row['student_no']."</option>";
// 	}
// 	echo "</select>";

// 	echo "<input type='button' value='View Tickets' onclick='studenttickets();'/>";
// 	echo "<div class='divticketstud'></div>";
// ?>

function guesttickets(){	
	var g_id=document.getElementById('selectgid').selectedOptions[0].text;
	$.ajax({
		url: 'query.php',
		type: 'POST',
		async: false,
		data: {"g_id":g_id, "option": "guestticket"},
		success: function(result){
			$('.divticketguest').html(result);
		}
	});
}

function sortedtickets(){
	var sortby=document.getElementById('selectsort').selectedOptions[0].value;
	console.log(sortby);
	$.ajax({
		url: 'query.php',
		type: 'POST',
		async: false,
		data: {"sortby":sortby, "option": "sortticket"},
		success: function(result){
			$('.divticketsort').html(result);
		}
	});
}

function redirectpagefaqs(){
	window.location.replace("editfaq.php");
}