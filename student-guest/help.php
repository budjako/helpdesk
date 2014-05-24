<?php require_once('header.html');
	  require_once('connect.php');
	  session_start();
	  if(!isset($_SESSION['username'])){
	  	echo "<form id='login-form' action='login.php' method='post'>";
		echo "<input type='text' name='uname' id='login-uname' class='login-uname' placeholder='Username' focus/>";
		echo "<input type='password' name='pword' id='login-pword' class='login-pword' placeholder='Password'/>";
		echo "<input type='submit' name='submit' value='Submit' id='login-submit' class='login-submit' />";
		echo "</form>";
		echo "</div>";
		echo "<div class='component component-part2'>";
		echo "<div class='alt-button'><a href=''>Alternate Login</a></div>";
		echo "<div class='crt-button'><a href=''>Create Account</a></div>";
		echo "</div>";
	  }
	  else{
	  	echo "<div class='login-picture'>";
		echo "<img src='img/content/sample.jpg'/>";
		echo "</div>";
		echo "<div class='login-info'>";
		echo "<h3>".$_SESSION['fname']."</h3>";
		echo "<h5>BS Computer Science</h5>";
		echo "</div>";
		echo "</div>";
		echo "<div class='component component-part2'>";
		echo "<div class='lgo-button'><a href='logout.php'>Log Out</a></div>";
		echo "</div>";
	  }
?>
								
							</div>
							<div class="login-icon">
								<svg width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 300 100">
									<defs>
										<filter id="svg-shadow" x="0" y="0" width="200%" height="200%" >
											<feOffset result="offset" in="SourceAlpha" dx="0" dy="5" />
											<feGaussianBlur result="shadow" in="offset" stdDeviation="10" />
											<feComponentTransfer>
												<feFuncA type="linear" slope="0.5" />
											</feComponentTransfer>
											<feMerge>
												<feMergeNode />
												<feMergeNode in="SourceGraphic"/>
											</feMerge>
										</filter>
									</defs>
									<path fill="#222" d="M 0 0 L 0 29 C 120 30 200 70 300 35 L 300 0 Z" filter="url(#svg-shadow)"/>
									<!-- <path fill="#222" d="M 0 0 L 0 35 C 100 70 180 5 300 5 L 300 0 Z" filter="url(#svg-shadow)"/> -->
									<!-- <path class="" fill="#222" d="M 0 0 L 0 5 L 5 5 C 200 10 350 80 600 70 Q 750 65 850 40 L 850 0 Z" filter="url(#svg-shadow)"/> -->
								</svg>
								<?php
									if(!isset($_SESSION['username'])){
										echo 	"<div id='login-button'>Login</div>";
									}
									else{
										echo "<div id='login-button'>Hi ".$_SESSION['fname']."</div>";
									}
								?>
							
							</div>
						</div>
						<div id="content-des" class="content-des">
							<div class="des-filler">

							</div>
							<div class="des">
								<svg id="des-svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 850 100">
									<def>
										<filter id="svg-shadow" x="0" y="0" width="200%" height="200%" >
											<feOffset result="offset" in="SourceAlpha" dx="0" dy="5" />
											<feGaussianBlur result="shadow" in="offset" stdDeviation="10" />
											<feComponentTransfer>
												<feFuncA type="linear" slope="0.5" />
											</feComponentTransfer>
											<feMerge>
												<feMergeNode />
												<feMergeNode in="SourceGraphic"/>
											</feMerge>
										</filter>
									</def>
									<path class="" fill="#222" d="M 850 0 L 850 35 L 845 35 C 650 30 500 80 250 70 Q 100 65 0 40 L 0 0 Z" filter="url(#svg-shadow)"/>									
									<!-- <path class="" fill="#222" d="M 0 0 L 0 5 L 5 5 C 200 10 350 80 600 70 Q 750 65 850 40 L 850 0 Z" filter="url(#svg-shadow)"/>									 -->
									<!-- <path fill="#222" d="M 0 0 L 0 35 C 100 70 180 5 300 5 L 300 0 Z" filter="url(#svg-shadow)"/> -->
								</svg>
							</div>
						</div>
					</section>
				<section id="content-menu" class="content-menu">
						<nav id="menu-wrapper" class="menu-component menu-wrapper">
							<button class="menu-trigger">Menu</button>
							<ul class="menu menu-toggle clearfix">
								<li><a href=""><div class="menu-item">Home</div></a></li>
								<li>
									<a href=""><div class="menu-item">About OSA</div><div class="icon-next"></div></a>
									<ul class="submenu">
										<li><a href=""><div class="menu-subitem">What is OSAM?</div></a></li>
										<li><a href=""><div class="menu-subitem">Mission and Vision</div></a></li>
										<li><a href=""><div class="menu-subitem">Message from the Director</div></a></li>
										<li><a href=""><div class="menu-subitem">OSA Staff</div></a></li>
										<li><a href=""><div class="menu-subitem">Career Opportunities</div></a></li>
									</ul>
								</li>
								<li><a href=""><div class="menu-item">Bulletin Board</div></a></li>
								<li>
									<a href=""><div class="menu-item">Student Orgs</div><div class="icon-next"></div></a>
									<ul class="submenu">
										<li><a href=""><div class="menu-subitem">Recognized Orgs</div></a></li>
										<li><a href=""><div class="menu-subitem">Apply for Recognition</div></a></li>
										<li><a href=""><div class="menu-subitem">Recognition Guidelines</div></a></li>
									</ul>
								</li>
								<li>
									<a href=""><div class="menu-item">Financial Assistance</div><div class="icon-next"></div></a>
									<ul class="submenu">
										<li><a href=""><div class="menu-subitem">Scholarships</div></a></li>
										<li><a href=""><div class="menu-subitem">Student Assistantship</div></a></li>
										<li><a href=""><div class="menu-subitem">Socialized Tuition System (STS)</div></a></li>
										<li><a href=""><div class="menu-subitem">Student Loan Board (SLB)</div></a></li>
									</ul>
								</li>
								<li>
									<a href=""><div class="menu-item">Housing Facilities</div><div class="icon-next"></div></a>
									<ul class="submenu">
										<li><a href=""><div class="menu-subitem">UPLB Dormitories</div></a></li>
										<li><a href=""><div class="menu-subitem">Off-Campus Housing</div></a></li>
									</ul>
								</li>
								<li><a href=""><div class="menu-item">Counseling</div></a></li>
								<li>
									<a href=""><div class="menu-item">Downloads</div><div class="icon-next"></div></a>
									<ul class="submenu">
										<li><a href=""><div class="menu-subitem">OSA Student Handbook</div></a></li>
										<li><a href=""><div class="menu-subitem">Recognition Guidelines</div></a></li>
										<li><a href=""><div class="menu-subitem">Public Service Announcement Guidelines</div></a></li>
										<li><a href=""><div class="menu-subitem">Memorandums</div></a></li>
									</ul>
								</li>
								<li><a href="help.php"><div class="menu-item" id="help-menu">Contact OSA</div></a></li>
							</ul>
						</nav>
					</section>
			<div id="content-box" class="content-box clearfix">
				<section id="header-help">
							<img src="img/help/help-logo.png" id="help-logo">
							<h1>OSAM Help Desk</h1>
						</section>	
						<div class="help-container">
							<div class="help-container-left">
								<div id="search-div">									
										<input type="text" id="search_input" name="search_input" results=3 size="70" placeholder="Type any keyword	 related to your search..." autofocus /> <button id="search_button" onclick="display_question('','search');">Search</button>
								</div>
								<div id="browse-category">
									<h3>Browse Category</h3>
									<ul class="faq-category">
										<?php
											$query = "SELECT DISTINCT tag FROM faqs ORDER BY tag";
											$result = mysql_query($query);
											if (!$result) die(mysql_error());
											while($row = mysql_fetch_assoc($result)){
											echo "<li onclick='display_question(\"".$row['tag']."\", \"category\")'>".$row['tag']."</li>";
										}		
										?>										
									</ul>
								</div>
								<div id="conversation">	
									<?php
										if(isset($_SESSION['username'])){
											echo "<table>";
											echo "<thead><tr><td>Ticket ID</td><td>Subject</td><td>Last Update</td><td>Status</td></tr></thead>";
											echo "<tbody>";
											$query = "SELECT * FROM tickets WHERE student_no = '".$_SESSION['username']."'";
											$result = mysql_query($query);
											if(!$result) die(mysql_error());
											while($row = mysql_fetch_assoc($result)){
												echo"<tr onclick='view_threads(".$row['tid'].")'>";
												echo "<td> Q-".$row['tid']."</td>";
												echo "<td>".$row['subject']."</td>";
												echo "<td>".$row['datelastupdate']."</td>";
												echo "<td>";
												if($row['status'] == 0) echo "New Email";
												else if($row['status'] == 1) echo "Staff Replied";
												else if($row['status'] == 2) echo "User Replied";
												else if($row['status'] == 3) echo "Forwarded";
												else echo "Closed";
												echo "</td>";
												echo "</tr>";
											} 
											echo "</tbody>";
											echo "</table>";
										}
									?>
								</div>
							</div>
							<div id="help-container-right">
								<div id="ask-div">
									<h3>OSAM Support</h3>
									<p>Submit your help request.
									<button id="ask-button">Ask Us</button>
									</p>
								</div>
								<div id="top-quest">
									<h3>Top Questions</h3>
									<ul>
									<?php
										$query = "SELECT question, faqno FROM faqs ORDER BY visit_count DESC LIMIT 10";
										$result = mysql_query($query);
										if (!$result) die(mysql_error());
										while($row = mysql_fetch_assoc($result)){
											echo "<li onclick='display_question(".$row['faqno'].", \"top\")'>".$row['question']."</li>";
										}									
									?>
										
									</ul>
								</div>
							</div>	
						</div>	
			</div>
<?php	
	require_once('close.php');
	require_once('footer.html'); 
?>