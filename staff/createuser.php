<!DOCTYPE html>
<html>
	<head>
		<title>View All Concerns</title>
		<link rel="stylesheet">
		<script type="text/javascript">
			/* window.onload=function(){
				myform.inservices.onblur=validateServices;
				myform.inname.onblur=validateName;//
				myform.incell.onblur=validateCell;//
				myform.inusername.onblur=validateUsername;//
				myform.inpassword.onblur=validatePassword;//
				myform.inretypepassword.onblur=validateRetypePassword;//
				myform.inbdate.onblur=validateBdate;//
				myform.inemail.onblur=validateEmail;//
				myform.insex.onblur=validateSex;
				myform.onsubmit=displayValues;
			}
			function validateName(){
				msg="Invalid input: ";
				str=myform.inname.value;
				if(str=="") msg+="Name is required!";
				else if(str.match(/^[a-zA-Z\ \.\-\,]+$/)) msg="";
				else msg+="Check proper format"
				document.getElementsByName("helpname")[0].innerHTML=msg;
				if(msg=="") return true;
			}
			function validateSex(){
				msg="Invalid input: ";
				str=myform.insex.value;
				if(str=="") msg+="Sex is required!";
				else msg="";
				document.getElementsByName("helpsex")[0].innerHTML=msg;
				if(msg=="") return true;
			}
			function validateCell(){
				msg="Invalid input: ";
				str=myform.incell.value;
				if(str=="") msg+="Cell number is required!";
				else if(str.match(/^\+[0-9]{11}$/)) msg="";//nos. accepted
				else msg+="Check proper format.";
				document.getElementsByName("helpcell")[0].innerHTML=msg;
				if(msg=="") return true;
			}
			function validateUsername(){
				msg="Invalid input: ";
				str=myform.inusername.value;
				if(str=="") msg+="Username is required!";
				else if(str.match(/^[a-zA-Z][a-zA-Z0-9_]{3,11}$/)) msg="";//nos. accepted
				else msg+="Check proper format";
				document.getElementsByName("helpusername")[0].innerHTML=msg;
				if(msg=="") return true;
			}
			function validatePassword(){
				msg="Invalid input: ";
				str=myform.inpassword.value;
				if(str=="") msg+="Password is required!";
				if(str.match(/^[a-z]+$/)) msg="Strength: Weak";
				else if(str.match(/^[0-9]+$/)) msg="Strength: Weak";
				else if(str.match(/^[a-z0-9]+$/)) msg="Strength: Medium";
				else if(str.match(/^[a-zA-Z0-9]+$/)) msg="Strength: Strong";
				document.getElementsByName("helppassword")[0].innerHTML=msg;
				if(msg!="Invalid input: Password is required!") return true;
			}
			function validateRetypePassword(){
				msg="Invalid input: ";
				str=myform.inretypepassword.value;
				str2=myform.inpassword.value;
				if(str=="") msg+="Revalidation required!";
				else if(str===str2) msg="";
				else msg+="Password does not match";
				document.getElementsByName("helpretypepassword")[0].innerHTML=msg;
				if(msg=="") return true;
			}
			function validateBdate(){
				msg="Invalid input: "
				str=myform.inbdate.value;
				if(str=="") msg+="Birthdate is required!";
				else if(str.match(/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/)) msg="";
				else msg+="Format should follow: mm/dd/yyyy";
				document.getElementsByName("helpbday")[0].innerHTML=msg;
				if(msg=="") return true;
			}
			function validateEmail(){
				msg="Invalid input: "
				str=myform.inemail.value;
				if(str=="") msg+="Email is required!";
				else if(str.match(/^[a-zA-Z][a-zA-Z\d_\.]+@[a-zA-Z]{3,}((\.[a-zA-Z]{1,3})+)$/)) msg="";
				else msg+="Not a valid email address";
				document.getElementsByName("helpemail")[0].innerHTML=msg;
				if(msg=="") return true;
			}
			function checkAll(){
				if(validateName()&&validateSex()&&validateCell()&&validateUsername()&&validatePassword()&&validateRetypePassword()&&validateBdate()&&validateEmail()&&validateServices()){
				    
					msg="Name: "+myform.inname.value+"</br>";
					msg+="Sex: ";
					for(i=0; i<document.myform.insex.length;i++){
						if(document.myform.insex[i].checked==true)
							msg+=document.myform.insex[i].value;
					}
					msg+="</br>Email: "+myform.inemail.value+"</br>";
					msg+="Username: "+myform.inusername.value+"</br>";
					msg+="Birthdate: "+myform.inbdate.value+"</br>";
					msg+="Cell no: "+myform.incell.value+"</br>";
					msg+="Services: ";
					for(i=0; i<document.myform.inservices.length;i++){
						if(document.myform.inservices[i].checked==true)
							msg+=document.myform.inservices[i].value;
					}
					document.getElementsByName("print")[0].innerHTML=msg;
					return true;
				}
				else return false;
			} */
		</script>
	</head>
	<body>
		<form name="createuser" method="post">
			<label for="e_no">Employee Number</label>
			<input id="e_no" type="text"></input><br/>
			<label for="fname">First Name</label>
			<input id="fname" type="text"></input><br/>
			<label for="lname">Last Name</label>
			<input id="lname" type="text"></input><br/>
			<label for="email">Email Address</label>
			<input id="email" type="email"></input><br/>
			<label for="password">Password</label>
			<input id="password" type="password"></input><br/>
			<label for="position">Position</label>
			<input id="position" type="text"></input><br/>
			<label for="division">Division</label><br/>
			<select id="division" name="division[]" style="height: 70px" multiple="multiple">
				<option value="1">COMMIT</option>
				<option value="2">CTD</option>
				<option value="3">DO</option>
				<option value="4">EXECOM</option>
				<option value="5">ISS</option>
				<option value="6">SDT</option>
				<option value="7">SFAD</option>
				<option value="8">SOAD</option>
			</select>
			<input type="submit">
		</form>
	</body>
</html>