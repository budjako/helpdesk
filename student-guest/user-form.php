<?php require_once('header.html');?>
			<?php require_once('connect.php');?>
					<section id="content-menu" class="content-menu">
						<nav id="menu-wrapper" class="menu-component menu-wrapper">
							<button class="menu-trigger">Menu</button>
							<ul class="menu menu-toggle clearfix">
								<li><a href=""><div class="menu-item">Home</div></a></li>
								<li>
									<a href=""><div class="menu-item">Student Orgs</div><div class="icon-next"></div></a>
									<ul class="submenu">
										<li><a href=""><div class="menu-subitem">Recognized Orgs</div></a></li>
										<li><a href=""><div class="menu-subitem">Reminders</div></a></li>
										<li><a href=""><div class="menu-subitem">Recognition Guidelines</div></a></li>
										<li><a href=""><div class="menu-subitem">Application for Recognition</div></a></li>
										<li><a href=""><div class="menu-subitem">Mailing List</div></a></li>
									</ul>
								</li>
								<li><a href=""><div class="menu-item">Scholarship</div></a></li>
								<li><a href=""><div class="menu-item">OSA Staff</div></a></li>
								<li><a href=""><div class="menu-item">Help</div></a></li>
							</ul>
						</nav>
					</section>

					<div id="content-box" class="content-box clearfix">
						<section id="header-help">
							<img src="img/help/help-logo.png" id="help-logo">
							<h1>OSAM Help Desk</h1>
						</section>
						<div class="help-container">
							<section id="help-notif">
								<p>Success! Reply will be sent to your email</p>
							</section>
							<p class="other-info"> Please fill in the form below.	</p>
							<?php session_start();
								include_once('connect.php');
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
							<form action="addTicket.php" method="post">
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
										<input type="email" name="email" id="user-email" value="<?php if(isset($username)) echo $row['email']?>" required /></td>
									</tr>
									<tr>
										<td>* Type:
												<select name="type">
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
								<input type="submit" value="Submit" id="submit-help" onclick="submit_func"/>
							</form>
						</div>						
					</div>
<?php include_once("close.php"); ?>
<?php require_once('footer.html');?>