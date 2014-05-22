<?php
	require_once('connect.php');
?>						

							<section id="help-notif">
								
							</section>
							<br />
							<a href='help.php'>&laquo Back to Categories</a>
							<p class="other-info"> Please fill in the form below.	</p>
							<?php session_start();
							?>
							<?php
								if(!empty($_SESSION['username'])){
									$_SESSION['user'] = 'student';
									$username = $_SESSION['username'];
									$sql = "SELECT firstname, lastname, email FROM students WHERE studentno='$username'";
									$result = mysql_query($sql);
									$count = mysql_num_rows($result);
									if($count == 1){
										$row = mysql_fetch_array($result);
									}
								}	
								else{
									$_SESSION['user'] = 'guest';
								}							
							?>
							<form id="formhelp" >
								<table>
									<tr>
										<td> * Firstname :
											<input type="text" name="firstname" id="firstname" value="<?php if(isset($username)) echo $row['firstname']?>"required />
										</td>
										<td> * Lastname :
											<input type="text" name="lastname" id="lastname" value="<?php if(isset($username)) echo $row['lastname']?>" required />
										</td>
									</tr>
									<tr>
										<td>* Email : 
										<input type="email" name="email" id="email" value="<?php if(isset($username)) echo $row['email']?>" required /></td>
									</tr>
									<tr>
										<td>* Type:
												<select name="type" id="type">
													<option value="inquiry">Inquiry</option>
													<option value="feedback">Feedback</option>
												</select>
										</td>
									</tr>
									<tr>	
										<td>* Subject:
											<input type="text" name="subject" id="subject" required />
										</td>
									</tr>
									<tr>
										<td>
											Division:
												<select id="division" name="division">
													<option value="COMMIT">Communications and Information and Technology (COMMIT)</option>
													<option value="CTD">Counseling and Testing Division (CTD)</option>
													<option value="DO">Director's Office (DO)</option>
													<option value="ISS">International Students Section (ISS)</option>
													<option value="SFAD">Scholarships and Financial Assistance Division (SFAD)</option>
													<option value="SDT">Student Disciplinary Tribunal (SDT)</option>
													<option value="SOAD">Student Organizations and Activities Division (SOAD)</option>
												</select>
										</td>
										<td>
											Tags:
												<select multiple id="tags" name="tags[]">
													<option value="assistanship">Assistanship</option>
													<option value="osam account">OSAM Account</option>
													<option value="sts">STS</option>
													<option value="slb">SLB</option>
													<option value="clearance">Clearance</option>
												</select>
										</td>
									</tr>
									<tr>
										<td>
											* Description:
												<textarea name="description" id="concern-description" placeholder="Type the details of your concern here..." required></textarea>
										</td>
									</tr>	
								</table>
								<p class="other-info"> * Required fields</p>
								<input type="reset" value="Reset" id="reset-help" />
								<input type="submit" value="Submit" id="submit-help" />
							</form>
