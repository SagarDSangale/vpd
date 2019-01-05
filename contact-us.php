<?php
if(isset($_POST['submit'])){
//	office@vpdassociate.com
$to = "kiranpatil86@gmail.com";
$subject= $_POST['subject'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message1 = $_POST['message'];
$message = "
<html>
<head>
<title>Contact Us</title>
</head>
<body>
<p>This is enquiry mail!</p>
<table>
<tr>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
</tr>
<tr>
<td>".$name."</td>
<td>".$mobile."</td>
<td>".$email."</td>
<td>".$subject."</td>
<td>".$message1."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
}
?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
  <!-- css files -->
  <?php include 'header.php'; ?>
  <!-- /css files -->
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="at-wrapper" class="at-wrapper at-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="at-header" class="at-header at-haslayout">
      <div class="container-fluid">
        <div class="row">
          <?php include 'logo.php'; ?>  
          <div class="at-navigationarea">
            <nav id="at-nav" class="at-nav">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#at-navigation" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div id="at-navigation" class="collapse navbar-collapse at-navigation">
                <ul>
                  <li class="menu-item"><a href="index">Home</a></li>
                  <li class="menu-item"><a href="about-us">About Us</a></li>
                  <li class="menu-item-has-children">
                    <a href="javascript:void(0);">Services</a>
                    <ul class="sub-menu">
                      <li><a href="company-and-llp-formation">Company and LLP Formation</a></li>
                      <li><a href="secretarial-services">Secretarial Services</a></li>
                      <li><a href="corporate-governance">Corporate Governance</a></li>
                      <li><a href="intellectual-property-rights">Intellectual Property</a></li>
                      <li><a href="fema-and-rbi-matters">FEMA and RBI Matters</a></li>
                      <li><a href="agreement-and-petitions">Agreements and Petitions</a></li>
                      <li><a href="digital-signature">Digital Signature</a></li>
                      <li><a href="registrations">Registrations</a></li>
                    </ul>
                  </li>
                 <li class="menu-item-has-children">
                    <a href="javascript:void(0);">Resources</a>
                    <ul class="sub-menu">
                      <li><a target="_blank" href="http://www.mca.gov.in/MinistryV2/companiesact2013.html">Acts & Rules</a></li>
                      <li><a href="links">Links</a></li>
                      <li><a href="http://www.mca.gov.in/mcafoportal/enquireFeePreLogin.do">ROC - Fee Structure</a></li>
                      <li><a href="https://www.incometaxindia.gov.in/Pages/charts-and-tables.aspx">Rates of Income Tax</a></li>
                      <li><a href="https://www.incometaxindia.gov.in/Pages/charts-and-tables.aspx">Rates of TDS</a></li>
                      <li><a href="faq">FAQ</a></li>
                    </ul>
                  </li>
                  <li class="menu-item"><a href="careers">Careers</a></li>
                  <li class="menu-item current-menu-item"><a href="contact-us">Contact us</a></li>
                </ul>
              </div>
            </nav>
            <div class="at-contactsocial">
              <span class="at-contactnumber">
                <i class="icon-telephone114"></i>
                <em>+1 900 234 567</em>
              </span>
              <ul class="at-socialicons">
                <li class="at-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                <li class="at-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                <li class="at-instagram"><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>	<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div class="at-innerbanner">
			<div class="at-innerbannerbox">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="at-innerbannercontent">
								<div class="at-pagetitle">
									<h1>Let's Talk</h1>
								</div>
								<ol class="at-breadcrumb">
									<li><a href="javascript:void(0);">Home</a></li>
									<li class="at-active"><span>Contact Us</span></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="at-main" class="at-main at-haslayout">
			<div class="at-contactusvtwo">
				<section class="at-sectionspace at-bglight at-haslayout">
					<div class="container">
						<div class="row">
							<div class="at-content">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-left">
									<div class="at-colcontact">
										<span class="at-contacticon"><i class="icon-telephone114"></i></span>
										<h2>Get In Touch</h2>
										<span>Telephone: +51 900 321 4564</span>
										<span>Mobile: +501 860 3210</span>
										<span><a href="mailto:office@vpdassocites.com">office@vpdassocites.com</a></span>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-left">
									<div class="at-colcontact">
										<span class="at-contacticon"><i class="icon-icons74"></i></span>
										<h2>Our Location</h2>
										<address>Flat No. 401, Dhanwantari Terrace, Opposite Kalmadi Pre-Primary School,
										Behind Karnataka College, Erandwane, Pune – 411038
										</span></address>
										<span><a href="javascript:void(0);">Get Directions</a></span>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-left">
									<div class="at-colcontact">
										<span class="at-contacticon"><i class="icon-icons98"></i></span>
										<h2>Looking For A Career?</h2>
										<div class="at-description">
											<p>perspiciatis unde omnis iste natus error sit<span>voluptatem accusantium.</span></p>
										</div>
										<span><a href="mailto:office@vpdassocites.com">office@vpdassocites.com</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="at-haslayout">
					<div class="at-content">
						<div id="at-locationmap" class="at-locationmap"></div>
						<form class="at-formtheme at-formcontacus" action="contact-us" method="POST">
							<div class="at-sectiontitleborder">
								<h2>Contact Us</h2>
							</div>
							<fieldset>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Email Address">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
										<div class="form-group">
											<input type="number" name="mobile" class="form-control" placeholder="Phone Number">
											
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
										<div class="form-group">
											<input type="text" name="subject" class="form-control" placeholder="Subject">
											
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left">
										<div class="form-group">
											<textarea name="message" class="form-control" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left">
										<button type="button" name="submit" class="at-btn">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</section>
			</div>
		</main>
			<!--************************************
				Main End
		*************************************-->
		<!-- footer -->
    <?php include 'footer.php'; ?>
    <!-- /footer -->
	</div>
  <!-- js files -->
  <?php include 'footer_js.php'; ?>
	<!-- /js files -->
</body>
</html>