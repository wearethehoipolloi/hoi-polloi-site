<?php
$searchTerm = $_GET['_st'] ?? null;
switch ($searchTerm) {
	case 'couples':
		$headline = $searchTerm;
		break;
	case 'familes':
		$headline = $searchTerm;
		break;
	case 'business':
		$headline = $searchTerm;
		break;
	case 'churches':
		$headline = $searchTerm;
		break;		
	default:
		$headline = 'humans';
		break;
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Hoi Polloi">
<meta name="author" content="Hoi Polloi Financial">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Hoi Polloi | Best Joint Checking Account</title>

<!-- STYLES -->
<link rel="stylesheet" type="text/css" href="css/plugins.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- /STYLES -->

<script type="text/javascript">   
	window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=document.createElement("script");r.type="text/javascript",r.async=!0,r.src="https://cdn.heapanalytics.com/js/heap-"+e+".js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(r,a);for(var n=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","resetIdentity","removeEventProperty","setEventProperties","track","unsetEventProperty"],o=0;o<p.length;o++)heap[p[o]]=n(p[o])};   
	heap.load("3192106741"); 
</script>

</head>

<body> 
	<!-- PRELOADER -->
	<!-- /PRELOADER -->
	<!-- WRAPPER ALL -->
	<div class="tonni_tm_all_wrap" data-magic-cursor="hide">
	
		<!-- MOBILE MENU -->
		<div class="tonni_tm_mobile_menu">
			<div class="mobile_menu_inner">
				<div class="mobile_in">
					<div class="logo">
						<a href="#"><img src="img/hoi-polloi-logo.svg" alt="" /></a>
					</div>
					<div class="trigger">
						<div class="hamburger hamburger--slider">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropdown_inner">
					<ul class="anchor_nav">
						<li class="current"><a href="#home">Home</a></li>
						<li><a href="#about">Setup</a></li>
						<li><a href="#controls">Controls</a></li>
						<li><a href="#service"">Account</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /MOBILE MENU -->
	
		<!-- HEADER -->
		<div class="tonni_tm_header">
			<div class="container bigger">
				<div class="header_in">
					<div class="logo">
						<a href="#"><img src="img/hoi-polloi-logo.svg" alt="" /></a>
					</div>
					<div class="menu">
						<ul class="anchor_nav">
							<li class="current"><a href="#home">Home</a></li>
							<li><a href="#about">Setup</a></li>
							<li><a href="#controls">Controls</a></li>
							<li><a href="#service"">Account</a></li>
						</ul>
						<span class="ccc"></span>
					</div>
					<div class="follow">

					</div>
				</div>
			</div>
		</div>
		<!-- /HEADER -->
	
		<!-- HERO -->
		<div class="tonni_tm_section" id="home">
			<div class="tonni_tm_hero">
				<div class="background-sm">
					<div class="image" data-img-url="img/hero/hero-sm.png"></div>
				</div>
				<div class="background">
					<div class="image" data-img-url="img/hero/hero.png"></div>
					<div class="overlay"></div>
				</div>
				<div class="container">
					<div class="content">
						<div class="content_in">
							<h3 class="name"><span>Joint checking</span> <br>for <?php echo $headline; ?>.</h3>
							<span class="welcome">2 minute sign up, no fees and unlimited transactions.</span>
							<form action="/" method="post" class="contact_form" id="contact_form" autocomplete="off">
								<div class="form_body">
									<div class="left">
										<input id="email" type="text" placeholder="Email">
									</div>
									<div class="tonni_tm_button right">
										<a id="send_message" class="signup button" href="#">Get started</a>
									</div>
								</div>
								<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
								<div class="empty_notice" style="display: none;"><span>Please Fill Required Fields</span></div>
							</form>
						</div>
					</div>
				</div>				
				<span class="shape1"><img class="anim_circle" src="img/svg/icon5.svg" alt="" /></span>
				<span class="shape2"><img src="img/svg/icon7.svg" alt="" /></span>
				<span class="shape3"><img src="img/svg/icon3.svg" alt="" /></span>
				<span class="shape4"><img class="anim_circle" src="img/svg/icon6.svg" alt="" /></span>
				<span class="shape5"><img src="img/svg/icon1.svg" alt="" /></span>
				<span class="shape6"><img class="anim_circle" src="img/svg/icon5.svg" alt="" /></span>
				<span class="shape7"><img src="img/svg/icon2.svg" alt="" /></span>
				
			</div>
		</div>
		<!-- /HERO -->
		
		<!-- ABOUT -->
		<div class="tonni_tm_section" id="about">
			<div class="tonni_tm_about">
				<div class="container">
					<div class="about_inner">
						<div>
							<div class="title">
								<span>Skip the line at the bank</span>
								<h3>Simple to Setup</h3>
							</div>
							<div class="text">
								<p>Set up a new joint checking account in less than 2 minutes.</p>
							</div>
							<div class="dodo_progress">
								<ul>
									<li>
										<div class="list_inner">
											<div class="progress_inner">
												<div class="background">
													<span class="big_number">1</span>
												</div>
												<div class="percent">
													<span class="number">Open your account</span>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="list_inner">
											<div class="progress_inner">
												<div class="background">
													<span class="big_number">2</span>
												</div>
												<div class="percent">
													<span class="number">Invite authorized users by email or phone</span>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="list_inner">
											<div class="progress_inner">
												<div class="background">
													<span class="big_number">3</span>
												</div>
												<div class="percent">
													<span class="number">Use the account immediately</span>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /ABOUT -->
	
		<!-- ABOUT 2 -->
		<div class="tonni_tm_section" id="controls">
			<div class="tonni_tm_about">
				<div class="container">
					<div class="about_inner">
						<div class="left">
							<div class="title">
								<span>No unhappy suprises</span>
								<h3>Controls</h3>
							</div>
							<div class="text">
								<p>Don't worrying about who is spending what, setup spend limits and spend categorizes by user or by groups of users.</p>
							</div>
						</div>
						<div class="right">
							<div class="right_inner">
									<span class="rounded"><img src="img/card-controls.png" alt="" /></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /ABOUT 2 -->


		<!-- SERVICE -->
		<div class="tonni_tm_section" id="service">
			<div class="tonni_tm_service">
				<div class="container bigger">
					<div class="service_in">
						<div class="container">
							<div class="tonni_tm_main_title" data-type="flex">
								<div class="title">
									<span>All the fixins'</span>
									<h3>Everything you want from a modern bank account</h3>
								</div>
								<div class="subtitle">
									<p></p>
								</div>
							</div>
							<div class="service_list">
								<ul>
									<li class="wow fadeInUp" data-wow-duration="1s">
										<div class="list_inner">
											<img class="svg" src="img/fees.svg" alt="No fees" />
											<div class="title">
												<h3>No fees</h3>
												<span>or account minimums</span>
											</div>
											<div class="text">
												<p></p>
											</div>
										</div>
									</li>
									<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
										<div class="list_inner">
											<img class="svg" src="img/visa.svg" alt="Visa Debit Card" />
											<div class="title">
												<h3>Visa debit card</h3>
												<span>With free ATM withdrawals</span>
											</div>
											<div class="text">
												<p></p>
											</div>
										</div>
									</li>
									<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
										<div class="list_inner">
											<img class="svg" src="img/check.svg" alt="Check Processing" />
											<div class="title">
												<h3>Check processing</h3>
												<span>and free transfers</span>
											</div>
											<div class="text">
												<p></p>
											</div>
										</div>
									</li>
									<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
										<div class="list_inner">
											<img class="svg" src="img/insured.svg" alt="FDIC Insured" />
											<div class="title">
												<h3>FDIC Insured</h3>
												<span>Keeping your money secure</span>
											</div>
											<div class="text">
												<p></p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<span class="shape"><img class="svg" src="img/svg/vector4.svg" alt="" /></span>
					</div>
				</div>
			</div>
		</div>
		<!-- /SERVICE -->
		
		<!-- TESTIMONIALS -->
		<div class="tonni_tm_section" id="testimonials">
			<div class="tonni_tm_testimonials">
				<div class="container">
					<div class="testimonials_inner wow fadeInUp" data-wow-duration="1s">
						<ul class="hidden_details" data-title="Why customers love our account">
							
							<li 
								data-img="img/testimonials/james-dee.jpg" 
								data-name="James Dee" 
								data-job="Vashon Island Nature Society" 
								data-quote="I searched and searched to find a simple joint checking account that met my needs and I found that at Hoi Polloi. Their simple setup and advanced controls were what made me choose them." 
							></li>


						</ul>
						
						<span class="shape"><img class="svg anim_circle" src="img/svg/icon9.svg" alt="" /></span>
						<span class="shape2"><img class="svg" src="img/svg/icon12.svg" alt="" /></span>
						
					</div>
				</div>
			</div>
		</div>
		<!-- /TESTIMONIALS -->

		
		<!-- CONTACT -->
		<div class="tonni_tm_section" id="contact">
			<div class="tonni_tm_contact">
				<div class="container">
					<div class="contact_box">
						<div class="title wow fadeInUp" data-wow-duration="1s">
							<h3>Ready to apply?<br />Please <a href="#home">Sign up</a></h3>
						</div>
						
						<!-- Modalbox Contact Field -->
						<div class="modalbox_contact">
							<div class="tonni_tm_modalbox_contact">
								<div class="contact_title">
									<span>Open your new joint checking account</span>
									<h3>Sign up</h3>
								</div>
								<div class="fields">
									<form action="/" method="post" class="contact_form" id="contact_form" autocomplete="off">
										<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
										<div class="empty_notice"><span>Please Fill Required Fields</span></div>
										<div class="first">
											<ul>
												<li>
													<input id="email" type="text" placeholder="Email">
												</li>
											</ul>
										</div>
										<div class="tonni_tm_button">
											<a id="send_message" href="#">Sign up <img class="svg" src="img/svg/arrow-right.svg" alt="" /></a>
										</div>
									</form>
								</div>
								
							</div>
						</div>
						<!-- /Modalbox Contact Field -->
						
					</div>
					<div class="short wow fadeInUp" data-wow-duration="1s">
						<div class="left">
						Hoi Polloi Financial is a financial technology company, not a bank <br/>
						Deposits are FDIC insured up to $250,000 per depositor through Coastal Community Bank, Member FDIC
						</div>
						<div class="right">
							<div class="copyright">
								<p>&copy; 2022 by Hoi Polloi Financial Inc.</a> All rights reserved.</p>
							</div>
						</div>
					</div>
				</div>
				<span class="shape"><img class="svg" src="img/svg/vector.svg" alt="" /></span>
			</div>
		</div>
		<!-- /CONTACT -->
		
		<!-- CURSOR -->
		<div class="mouse-cursor cursor-outer"></div>
		<div class="mouse-cursor cursor-inner"></div>
		<!-- /CURSOR -->
		
		<!-- TOTOP -->
		<div class="progressbar">
			<a href="#"><span class="text">To Top</span></a>
			<span class="line"></span>
		</div>
		<!-- /TOTOP -->
		
	</div>
	<!-- / WRAPPER ALL -->
	
<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->	
<script src="js/plugins.js"></script>
<script src="js/init.js"></script>
<!-- /SCRIPTS -->
</body>
</html>