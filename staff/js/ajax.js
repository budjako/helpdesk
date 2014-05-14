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

function editfaq(){
	var question=$("#editquestion").val();
	var answer=$("#editanswer").val();
	var tags=$("#edittags").val();
	console.log(question);
	console.log(answer);
	console.log(tags);
}