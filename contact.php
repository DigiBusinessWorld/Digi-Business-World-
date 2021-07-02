<!DOCTYPE html>
<html>
<head>
    
     <meta name="google-site-verification" content="5rHooKUc9DJvnWXr-4hVp7ZJDAZNwQObim4jH3OF1ao">
     
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Digital Marketing Company in Delhi - Digital Marketing Company in Delhi | Digital Marketing Company in Dwarka | Digital Marketing Agency in Delhi | Digital Marketing Agency in Dwarka</title>
    <meta name="description" content="In the course of recent years, Digital marketing agency in dwarka burned through 100s of hours contemplating web journals, aides, and Google Patents.">
    <meta name="keyword" content="Digital Marketing Company in Delhi, Digital Marketing Company in Dwarka, Digital Marketing Agency in Delhi, Digital Marketing Agency in Dwarka">
    <meta name="robots" content="index,follow,all" />
    <meta name="googlebot" content="index,follow">
    <meta name="YahooSeeker" content="index, follow" />
    <meta name="Yahoobot" content="Index, Follow"/>
    <meta name="MSNbot" content="index, follow"/>
    <meta name="country" content="India">
    <meta name="state" content="Delhi">
    <meta name="city" content="Delhi">
    <meta name="language" content="English"/>
<?php include('header.php'); 
    
if (isset($_POST['submit'])) {
   
    $username = $_POST['username'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
$admin_msg = "Kindly Contact to the Client using following details \n Client Name : Mr ".$username."\n  Contact No. : ".$mobile_no."\n  Email : ".$email."\n  Subject :".$subject."\n  Message :".$message;

$to="ranjana.digibusinessworld@gmail.com";
$from=$email;

$subject="Enquiry From Website (Digi Business World) By ".$username;
$header  = "From:".$from." \r\n";
mail($to,$subject,$admin_msg,$header);

 echo '<script>alert("Enquiry Submited Successfully,We will get in touch with you shortly.")</script>';		
		            echo '<script>window.location.href="contact.php";</script>';
}
?>
	
	
	<!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/4.jpg)">
    	<div class="auto-container">
			<h2>Contact Us</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.php">home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
    <section class="contact-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Form Form -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">GET IN TOUCH</div>
							<h2>Ready to Get Started?</h2>
						</div>
						
						<!-- Default Form -->
						<div class="default-form contact-form">
							<form method="post" action="" id="contact-form">
                                <div class="form-group">
                                    <input type="text" name="username"  placeholder="Name" required>
                                </div>
                                    
                                    <div class="form-group">
									<input type="text" name="mobile_no"  placeholder="Contact No." required>
								</div>
								<div class="form-group">
									<input type="email" name="email"  placeholder="Email" required>
								</div>
								
								<div class="form-group">
									<input type="text" name="subject"  placeholder="Subject" required>
								</div>
								
								<div class="form-group">
									<textarea name="message" placeholder="Message"></textarea>
								</div>
								
								<div class="form-group">
									<button type="submit" name="submit" class="theme-btn btn-style-four"><span class="txt">Send Now</span></button>
								</div>
                                
                            </form>
                        </div>
						
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">GET IN TOUCH</div>
							<h2>Ready to Get Started?</h2>
							<div class="text"></div>
						</div>
						
						<!-- Info List -->
						<ul class="info-list">
							<li>
								<span class="icon flaticon-placeholder-4"></span>
								<strong>B-8, 3rd Floor, Ram Nagar, Near Metro Pillar No 711, Nawada, Uttam Nagar, New Delhi-110059</strong>
								Office Address
							</li>
							<li>
								<a href="tel:+91-9625424415"><span class="icon flaticon-phone-call"></span>
								<strong>+91-9625424415</strong></a>
								Give us a call
							</li>
							<li>
							<a href="mailto:info@digibusinessworld.com"><span class="icon flaticon-stopwatch"></span>
								<strong>info@digibusinessworld.com</strong></a>	
								Get in Touch
							</li>
						</ul>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->
	
<?php include('footer.php'); ?>