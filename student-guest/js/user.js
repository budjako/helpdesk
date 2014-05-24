function display_question(input, type, event){
		if(type=='search'){
			var input = $('#search_input').val();
		}
		$.ajax({
			type: "POST",
			url: "/helpdesk/display_question.php",
			data: "input="+input+"&type="+type,
			success: function(result){
				$('.help-container-left').html(result);
			}
		});
	}

function view_threads(id){
	$.ajax({
			type: "POST",
			url: "/helpdesk/view_threads.php",
			data: "id="+id,
			success: function(result){
				$('.help-container-left').html(result);
			}
		});
}

function submit_reply(id){
	var input = $('#reply-area').val();
	$.ajax({
		type: "POST",
		url: "/helpdesk/submit-reply.php",
		data: "id="+id+"&input="+input,
		success: function(result){
			$('.help-container-left').html(result);
		}
	});
}
	
	$('#ask-button').on('click', function(){
		$.ajax({
			type: "POST",
			url: "/helpdesk/help-form.php",
			success: function(result){
				$('.help-container').html(result);
			}
		});
	});

	$('#browse-category').on('click', 'input[name=accordion1]', function(){
		if(!$(this).attr('checked')){
			var input = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "/helpdesk/update-visit.php",
				data: "input="+input,
			});
		}

	});

	$('#formhelp').submit(function(event){
		// var firstname = $('#firstname').val();
		// var lastname = $('#lastname').val();
		// var email =  $('#email').val();
		// var type = $('#type').va l();
		// var subject = $('#subject').val();
		// var division = $('#division').val();
		// var tags = $('#tags').val();
		// var description = $('#concern-description').val();

		// $.ajax({
		// 	type: "POST",
		// 	url: "/helpdesk/help-form.php",
		// 	data: "firstname="+firstname+"&lastname="+lastname+"&email="+email+"&type="+type+"&subject="+subject+"&division="+division+"&tags="+tags+"&description="+description,
		// 	success: function(result){
		// 		$('.help-notif').css('display', 'block');
		// 		$('.help-notif').html(result);
		// 		return false;
		// 	}
		// });
		alert("OKKKKKKK");
		event.preventDefault();
		return false;

	});

function trial(event){
	alert("OK!");
	event.preventDefault();
}