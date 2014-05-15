<?php 
	require_once('header.html');
?>
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
							<p id="link-help"><a href="#">Need Help?</a><p>
						</div>						
					</div>
<?php include_once("close.php"); ?>					
<?php require_once('footer.html');?>