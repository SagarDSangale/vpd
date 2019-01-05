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
<body class="at-home at-homeone">
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
                  <li class="menu-item current-menu-item"><a href="index">Home</a></li>
                  <li class="menu-item"><a href="about-us">About Us</a></li>
                  <li class="menu-item-has-children">
                    <a href="javascript:void(0);">Services</a>
                    <ul class="sub-menu">
                      <li><a href="company-and-llp-formation">Company and LLP Formation</a></li>
                      <li><a href="secretarial-services">Secretarial Services</a></li>
                      <li><a href="corporate-governance">Corporate Governance</a></li>
                      <li><a href="intellectual-property">Intellectual Property</a></li>
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
                  <li class="menu-item"><a href="contact-us">Contact us</a></li>
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
    </header>
    <!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div class="at-homesliderarea">
			<div id="at-homeslidervone" class="at-haslayout at-homeslidervone at-homeslider">
				<div class="pogoSlider-slide" data-transition="fade" data-duration="500">
					<figure data-transition="fade" data-duration="1500" style="background:url('images/slider/img-01.jpg') no-repeat scroll 0 0;"></figure>
					<div class="at-pogolidercontent pogoSlider-slide-element" data-in="slideRight" data-out="slideLeft" data-duration="1800">
						<div class="at-slidercontent">
							<div class="at-titleborder"><h2><span>Welcome to</span> <b>VPD & Associates</b></h2></div>
							<div class="at-description">
								<p>Providing Corporate & Legal business solutions to entrepreneur to Start, Manage, Grow, & Protect their businesses</p>
							</div>
							<div class="at-btns">
								<a class="at-btn at-btnactive" href="about-us">Read More</a>
								<a class="at-btn" href="contact-us">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
				<div class="pogoSlider-slide" data-transition="fade" data-duration="500">
					<figure data-transition="fade" data-duration="1500" style="background:url('images/slider/img-02.jpg') no-repeat scroll 0 0;"></figure>
					<div class="at-pogolidercontent pogoSlider-slide-element" data-in="slideRight" data-out="slideLeft" data-duration="1800">
						<div class="at-slidercontent">
							<div class="at-titleborder"><h2><span>Commited Response &</span> Result Oriented</h2></div>
							<div class="at-description">
								<p>With our professional experience we’ll ensure you always get the best guidance. we’re with you every step of the way</p>
							</div>
							<div class="at-btns">
								<a class="at-btn at-btnactive" href="about-us">Read More</a>
								<a class="at-btn" href="contact-us">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="at-counter"></div>
			<a class="at-infoemail" href="mailto:info@consultory.com">info@consultory.com</a>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="at-main" class="at-main at-haslayout">
			<!--************************************
					Features Start
			*************************************-->
			<section class="at-featuresarea">
				<div class="at-titleandbtn">
					<h2><span>Our Services</span></h2>
					<h3 class="mb-20px">Assuring Compliances <br> & Solutions</h3>
					<ul class="mb-40px fs-15px">
						<li>Corporate Secretarial Services</li>
						<li>Regulatory Approvals & Representation</li>
						<li>Corporate Governance</li>
						<li>Legal Due Diligence And Transaction Documents</li>
						<li>Mergers, Amalgamations, Acquisitions & JV</li>
						<li>Compliance Under Foreign Exchange Laws</li>
						<li>Intellectual Property Rights</li>
						<li>Advisory On Capital Raising</li>
						<li>Services To Non-Profit Organizations</li>	
					</ul>
					<a class="at-btn at-btnb" href="contact-us">contact us</a>
					<div class="at-counter"></div>
				</div>
				<div id="at-featuresslider" class="at-features at-featuresslider owl-carousel">
					<div class="item">
						<div class="at-feature">
							<span class="at-featureicon"><i class="icon-graph-1"></i></span>
							<div class="at-title">
								<h3>CORPORATE SECRETARIAL SERVICES</h3>
							</div>
							<div class="at-description">
								<p>VPD & Associates comprehensive range of services for setting up the operations of a corporate business entity includes Business Set-Up services and Regular Compliance services.</p>
							</div>
							<div class="at-btns">
								<a class="at-btnreadmore" href="corporate-secretarial-services">read more</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="at-feature">
							<span class="at-featureicon"><i class="icon-safebox"></i></span>
							<div class="at-title">
								<h3>REGULATORY APPROVALS & REPRESENTATION</h3>
							</div>
							<div class="at-description">
								<p>A corporate organization needs to obtain various approvals from time to time from various government and quasi-government bodies under various laws and regulations.</p>
							</div>
							<div class="at-btns">
								<a class="at-btnreadmore" href="regulatory-approvals-and-representation">read more</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="at-feature">
							<span class="at-featureicon"><i class="icon-cart-12"></i></span>
							<div class="at-title">
								<h3>CORPORATE GOVERNANCE</h3>
							</div>
							<div class="at-description">
								<p>A good corporate governance system aims at assisting the management of the Company in maintaining efficient conduct of business.</p>
							</div>
							<div class="at-btns">
								<a class="at-btnreadmore" href="corporate-governance">read more</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="at-feature">
							<span class="at-featureicon"><i class="icon-graph-1"></i></span>
							<div class="at-title">
								<h3>LEGAL DUE DILIGENCE AND TRANSACTION DOCUMENTS</h3>
							</div>
							<div class="at-description">
								<p>The corporate strategists and investors are required to do a deep-dive analysis of the corporate history & culture, legal compliance and management competence of the organisation so as to arrive at an informed decision before shaking hands.</p>
							</div>
							<div class="at-btns">
								<a class="at-btnreadmore" href="legal-due-diligence-and-transaction-documents">read more</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="at-feature">
							<span class="at-featureicon"><i class="icon-safebox"></i></span>
							<div class="at-title">
								<h3>JOINT VENTURES, MERGERS, AMALGAMATIONS AND ACQUISITIONS</h3>
							</div>
							<div class="at-description">
								<p>Consolidation of business and inorganic growth through Merger and Acquisitions (M&A) is now a regular activity in the corporate sector.</p>
							</div>
							<div class="at-btns">
								<a class="at-btnreadmore" href="join-ventures-mergers-amalgamations-and-acquisitions">read more</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="at-feature">
							<span class="at-featureicon"><i class="icon-cart-12"></i></span>
							<div class="at-title">
								<h3>COMPLIANCE UNDER FOREIGN EXCHANGE LAWS</h3>
							</div>
							<div class="at-description">
								<p>With the globe shrinking on account of the World Wide Web, cross border transactions have become the order of the present business era.</p>
							</div>
							<div class="at-btns">
								<a class="at-btnreadmore" href="compliance-under-foreign-exchange-laws">read more</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="at-feature">
							<span class="at-featureicon"><i class="icon-cart-12"></i></span>
							<div class="at-title">
								<h3>INTELLECTUAL PROPERTY RIGHTS</h3>
							</div>
							<div class="at-description">
								<p>Intellectual Property is a product of intellect that has commercial value. The privileges given to the owners of such property are called the Intellectual Property Rights (IPR).</p>
							</div>
							<div class="at-btns">
								<a class="at-btnreadmore" href="intellectual-property-rights">read more</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="at-feature">
							<span class="at-featureicon"><i class="icon-cart-12"></i></span>
							<div class="at-title">
								<h3>ADVISORY ON CAPITAL RAISING</h3>
							</div>
							<div class="at-description">
								<p>VPD & Associates provides clients with all necessary assistance, as required under the present legal framework, in advising and arranging domestic and international capital requirements.</p>
							</div>
							<div class="at-btns">
								<a class="at-btnreadmore" href="advisory-on-capital-raising">read more</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="at-feature">
							<span class="at-featureicon"><i class="icon-cart-12"></i></span>
							<div class="at-title">
								<h3>SERVICES TO NON-PROFIT ORGANIZATIONS</h3>
							</div>
							<div class="at-description">
								<p>VPD & Associates provides services concerning registration and on-going compliances to various non-profit entities – Trusts, Societies, Co-operative societies and Section 8 Companies.</p>
							</div>
							<div class="at-btns">
								<a class="at-btnreadmore" href="services-to-non-profit-organizations">read more</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Features End
			*************************************-->
			<div class="clearfix"></div>
			<!--************************************
					About Us Start
			*************************************-->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<section class="at-aboutus">
							<figure class="at-sectionimg">
								<div class="at-imgholder">
									<img src="images/img-01.jpg" alt="image description">
								</div>
							</figure>
							<div class="at-textcontent">
								<div class="at-sectiontitleborder"><h2>About Us</h2></div>
								<div class="at-description">
									<p class="text-justify">VPD & Associates (VPD) is a firm of Company Secretaries providing professional services from its office at Pune, Maharashtra, India. VPD has expanded in all spheres, not only through an improvement in its infrastructure and offices, but also by adding qualified Company Secretaries to its team, increasing its empanelment presence in Banks and adding growing numbers to its clientele, the outcome of its considerable professional capabilities in handling assignments.</p>
								</div>
								<div class="at-btns">
									<a class="at-btn at-btnb" href="about-us">Read More</a>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
			<!--************************************
					About Us End
			*************************************-->
			<!--************************************
					Special Services Start
			*************************************-->
			<section class="at-sectionspace at-overflowhidden at-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="at-services">
								<div class="at-sectiontitleborder">
									<h2>The Professionals Who Believe</h2>
								</div>
								<div class="at-servicesslidercounter"></div>
								<div id="at-servicesslider" class="at-servicesslider owl-carousel">
									<div class="item">
										<div class="at-service">
											<figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/img-02.jpg" height="325" width="397" alt="image description"></a></figure>
											<div class="at-title">
												<h3><a href="javascript:void(0);">Our Vision</a></h3>
											</div>
											<div class="at-description">
												<p>Our firm continuously strives to be the Premier Secretarial and Consultancy firm that provides excellent service to our clients and an excellent quality of life for our associates.</p>
											</div>
											<!--<a class="at-btnreadmore" href="javascript:void(0);">read more</a>-->
										</div>
									</div>
									<div class="item">
										<div class="at-service">
											<figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/img-03.jpg" alt="image description"></a></figure>
											<div class="at-title">
												<h3><a href="javascript:void(0);">Our Objective</a></h3>
											</div>
											<div class="at-description">
												<p>We are committed to creating and sustaining long-term relationships which draw on our experience and expertise to help our clients achieve real success.</p>
											</div>
											<!--<a class="at-btnreadmore" href="javascript:void(0);">read more</a>-->
										</div>
									</div>
									<div class="item">
										<div class="at-service">
											<figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/img-04.jpg" alt="image description"></a></figure>
											<div class="at-title">
												<h3><a href="javascript:void(0);">Excellence in Service</a></h3>
											</div>
											<div class="at-description">
												<p>To not just meet but exceed client expectation consistently by imbibing Teamwork, Professionalism, Personalised Service &Specialisation.</p>
											</div>
											<!--<a class="at-btnreadmore" href="javascript:void(0);">read more</a>-->
										</div>
									</div>
									<!--<div class="item">
										<div class="at-service">
											<figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/img-02.jpg" height="325" width="397" alt="image description"></a></figure>
											<div class="at-title">
												<h3><a href="javascript:void(0);">Why Our Consulting</a></h3>
											</div>
											<div class="at-description">
												<p>It is a long established fact that a reader will be by the readablze content layout.</p>
											</div>
											<a class="at-btnreadmore" href="javascript:void(0);">read more</a>
										</div>
									</div>
									<div class="item">
										<div class="at-service">
											<figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/img-03.jpg" alt="image description"></a></figure>
											<div class="at-title">
												<h3><a href="javascript:void(0);">Investment Planning</a></h3>
											</div>
											<div class="at-description">
												<p>It is a long established fact that a reader will be by the readablze content layout.</p>
											</div>
											<a class="at-btnreadmore" href="javascript:void(0);">read more</a>
										</div>
									</div>-->
								</div>
							</div>
							<div class="at-counterarea">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 pull-left">
										<div class="at-titleandbtn">
											<h2>Doing the <span>right thing,</span> at the right time.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 pull-left">
										<ul id="at-counters" class="at-counters">
											<li>
												<div class="at-scounter">
													<h3 data-from="0" data-to="716" data-speed="8000" data-refresh-interval="50">716</h3>
													<h4>Registrations</h4>
												</div>
											</li>
											<li>
												<div class="at-scounter">
													<h3 data-from="0" data-to="11" data-speed="8000" data-refresh-interval="50">11</h3>
													<h4>Employees</h4>
												</div>
											</li>
											<li>
												<div class="at-scounter">
													<h3 data-from="0" data-to="2" data-speed="8000" data-refresh-interval="50">2</h3>
													<h4>Offices</h4>
												</div>
											</li>
											<li>
												<div class="at-scounter">
													<h3 data-from="0" data-to="100" data-speed="8000" data-refresh-interval="50">100</h3>
													<h4>% Satisfaction</h4>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Special Services End
			*************************************-->
			<!--************************************
					Helping Start
			*************************************-->
			<section class="at-sectionspace at-parallex at-parallexhelping">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="at-helpingsmallbusinesses">
								<h2>Helping Small Businesses</h2>
								<h3>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</h3>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Helping End
			*************************************-->
			<!--************************************
					Request a Call Back Start
			*************************************-->
			<section class="at-haslayout">
				<div class="container">
					<div class="row">
						<div class="at-requestandcustomers">
							<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 pull-left">
								<div class="at-requestacallback">
									<div class="at-textcontent">
										<div class="at-sectiontitleborder"><h2>Contact Us</h2></div>
										<div class="at-description">
											<p>We are an established and one of the best firm of Practising Company Secretaries providing company secretarial services to both public and private companies.</p>
											<p><strong>Our firm has been peer reviewed and found complying all parameters of quality control systems and adhering to guidelines of the Institute of Company Secretaries of India.</strong></p>
										</div>
									</div>
									<form  method="POST" action="index" class="at-formtheme at-formrequestcallback">
										<fieldset>
											<div class="form-group">
												<input type="text" name="name" class="form-control" placeholder="Your Name">
											</div>
											<div class="form-group">
												<input type="number" name="mobile" class="form-control" placeholder="Mobile Number">
											</div>
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="Email Address">
											</div>
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Subject">
											</div>
											<div class="form-group">
												<textarea type="number" name="message" class="form-control h-0px" placeholder="Message"></textarea>
											</div>
											<div class="at-btns">
												<button class="at-btn at-btnb" name="submit" type="submit">Submit</button>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 pull-left">
								<div id="at-happycustomers" class="at-happycustomers at-counters">
									<div class="at-happycustomercounter">
										<h3 data-from="0" data-to="930" data-speed="8000" data-refresh-interval="50">930</h3>
										<h4>Happy Customers</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Request a Call Back End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="at-sectionspace at-haslayout">
				<div class="container">
					<div class="row">
						<div class="at-testimonials">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="at-sectiontitleborder">
									<h2>Client Testimonials</h2>
								</div>
								<a class="at-btn at-btnb at-btnviewall" href="testimonials.html">view all</a>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pull-left">
								<div class="at-testimonial">
									<figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/testimonials/img-01.jpg" alt="image description"></a></figure>
									<div class="clearfix"></div>
									<span class="at-stars"><span></span></span>
									<blockquote>
										<q>We are satisfied with your professional approach and perfection in working style.</q>
									</blockquote>
									<h3>Jackie Adams</h3>
									<h4>(Sales Agent)</h4>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pull-left">
								<div class="at-testimonial">
									<figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/testimonials/img-02.jpg" alt="image description"></a></figure>
									<div class="clearfix"></div>
									<span class="at-stars"><span></span></span>
									<blockquote>
										<q>I appreciate timely execution and advises, thereby ensuring compliances in right time.</q>
									</blockquote>
									<h3>Jackie Adams</h3>
									<h4>(Sales Agent)</h4>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pull-left">
								<div class="at-testimonial">
									<figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/testimonials/img-03.jpg" alt="image description"></a></figure>
									<div class="clearfix"></div>
									<span class="at-stars"><span></span></span>
									<blockquote>
										<q>We have been working with your firm past more than a year. We find your services to be far excellent. </q>
									</blockquote>
									<h3>Swapnil Khadke</h3>
									<h4>(DIRECTOR )</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
			<!--************************************
					Why Choose Us Start
			*************************************-->
			<section class="at-sectionspace at-whychooseusarea at-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="at-sectionhead">
								<div class="at-sectiontitleborder">
									<h2>Why Choose Us</h2>
								</div>
								<div class="at-description">
									<p>We are prominent Company Secretary in India. We offer services in Pune and other major cities in India, like company formation in India, corporate compliance, starting business in India, registration of foreign companies, due diligence, etc.</p>
								</div>
							</div>
							<div class="at-whychooseus">
								<span class="at-whychooseusicon"><i class="icon-hotairballoon"></i></span>
								<div class="at-whychooseuscontent">
									<h3>HOW WE ARE DIFFERENT!</h3>
									<div class="at-description">
										<p>VPD & Associates is a team of distinguished Company Secretary, corporate advisors and Legal Consultants in India. Our firm of Company Secretary represents a coalition of specialized skills that is geared to offer sound corporate solutions and advices. The organization is a congregation of professionally qualified and experienced persons who are committed to add value and optimize the benefits accruing to clients.</p>
									</div>
								</div>
							</div>
							<div class="at-whychooseus">
								<span class="at-whychooseusicon"><i class="icon-profile-male"></i></span>
								<div class="at-whychooseuscontent">
									<h3>What We Do</h3>
									<div class="at-description">
										<p>All companies incorporated in India are required to comply with various provisions of the Indian Companies Act, 2013 and the rules thereunder. Companies are required to obtain various licenses, certificates and approvals from several regulatory authorities. We advise a broad spectrum of companies, from closely held start-ups to public listed companies with a wide shareholder base, on several issues arising in corporate, securities and allied laws. VPD & Associates has immense knowledge and experience in dealing with matters relating to the various corporate and related laws.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Why Choose Us End
			*************************************-->
			<!--************************************
					Map And Address Start
			*************************************-->
			<section class="at-mapandaddress at-haslayout">
				<div id="at-locationmap" class="at-locationmap"></div>
				<div class="container">
					<div class="at-addressarea">
						<div id="at-addressslider" class="at-addressslider owl-carousel">
							<div class="item">
								<h2>New York</h2>
								<ul class="at-contactinfo">
									<li>
										<i class="icon-icons202"></i>
										<span>+1(123) 456 7890 - 1</span>
									</li>
									<li>
										<i class="icon-icons208"></i>
										<span><a href="mailto:hello@consultory.com">hello@consultory.com</a></span>
									</li>
									<li>
										<i class="icon-icons20"></i>
										<span>Mon to Fri - 08:00 to 16:30</span>
									</li>
									<li>
										<i class="icon-icons74"></i>
										<address>Manhattan Hall, Lacasa Ave Melbourne, New York, America</address>
									</li>
								</ul>
							</div>
							<div class="item">
								<h2>New York</h2>
								<ul class="at-contactinfo">
									<li>
										<i class="icon-icons202"></i>
										<span>+1(123) 456 7890 - 1</span>
									</li>
									<li>
										<i class="icon-icons208"></i>
										<span><a href="mailto:hello@consultory.com">hello@consultory.com</a></span>
									</li>
									<li>
										<i class="icon-icons20"></i>
										<span>Mon to Fri - 08:00 to 16:30</span>
									</li>
									<li>
										<i class="icon-icons74"></i>
										<address>Manhattan Hall, Lacasa Ave Melbourne, New York, America</address>
									</li>
								</ul>
							</div>
							<div class="item">
								<h2>New York</h2>
								<ul class="at-contactinfo">
									<li>
										<i class="icon-icons202"></i>
										<span>+1(123) 456 7890 - 1</span>
									</li>
									<li>
										<i class="icon-icons208"></i>
										<span><a href="mailto:hello@consultory.com">hello@consultory.com</a></span>
									</li>
									<li>
										<i class="icon-icons20"></i>
										<span>Mon to Fri - 08:00 to 16:30</span>
									</li>
									<li>
										<i class="icon-icons74"></i>
										<address>Manhattan Hall, Lacasa Ave Melbourne, New York, America</address>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Map And Address End
			*************************************-->
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