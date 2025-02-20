<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <link rel="stylesheet" href="css/mystyle.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Website Title -->
	<title>Contact Robert Maxwell</title>
	
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.robertmaxwell.slccwebdev.com">Robert Maxwell</a>
    </div>
    <ul class="nav navbar-nav">
              <!-- Add font awesome icons -->
      <a href="https://www.linkedin.com/in/robmaxwell2" class="fa fa-linkedin"></a>
    </ul>
  </div>
 </nav>
<header class="contactHeader">
        <div class="container-fluid h-100">
          <div class="row h-200 align-items-center justify-content-center text-center text-white";>
            
            <div class="col-lg-8">
    
              <h3 class="display-1 font-weight-bold">Are you ready for that interview?</h3>
              <hr class="bg-white my-5" />
    
              <h1>For many, honing down your personal message and brand can be tough. Learn how to be prepared. I can help you.</h1>
    
              <a href="http://www.linkedin.com/in/robmaxwell2" class="btn btn-primary btn-lg mt-3">Learn More! Connect with me!</a>
            </div>
          </div>
        </div>  
    </header>
    
	<div>
	   <div>
	<section id="middleSection">
	    <div class="container-fluid h-100">
		<h2>Accomplishments & Strengths</h2>
		   <div class="book-content"> 
			 <img class="book-image" src="https://collegeinfogeek.com/wp-content/themes/cig-2018/images/book-cover-small.png">
			 <div>
			   <p>Over <strong>220,000</strong>Land the jobs they want — and you should.</p><p>Join in, and I'll also send you a <strong>free</strong> copy of my book on earning better grades!</p>
			</div>
		   </div> <a href="#" class="book-button button subscribe" data-location="book-section-button"> <button>Get the book free</button> </a>
			</div>	
			
       </section>
      </div>
   </div>
   
	
    
	<?php
		$nameErr = $emailErr = $contBackErr = "";
		$name = $email = $contBack = $comment = "";
		$formErr = false;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			if (empty($_POST["name"])) {
				$nameErr = "Name is required.";
				$formErr = true;
			} else {
				$name = cleanInput($_POST["name"]);
				//Use REGEX to accept only letters and white spaces
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and standard spaces allowed.";
					$formErr = true;
				}
			}
			
			if (empty($_POST["email"])) {
				$emailErr = "Email is required.";
				$formErr = true;
			} else {
				$email = cleanInput($_POST["email"]);
				// Check if e-mail address is formatted correctly
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Please enter a valid email address.";
					$formErr = true;
				}
			}
			
			if (empty($_POST["contact-back"])) {
				$contBackErr = "Please let us know if we can contact you back.";
				$formErr = true;
			} else {
				$contBack = cleanInput($_POST["contact-back"]);
			}
			
			$comment = cleanInput($_POST["comments"]);
		}

		function cleanInput($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

	<!-- Contact Form Section -->
	<section id="contact">
		<div class="container py-5">
			<!-- Section Title -->
			<div class="row justify-content-center text-center">
				<div class="col-md-6">
					<h2 class="display-4 font-weight-bold">I would be happy to contact you</h2>
					<hr />
				</div>
			</div>
			<!-- Contact Form Row -->
			<div class="row justify-content-center">
				<div class="col-6">
				
					<!-- Contact Form Start -->
					<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" novalidate>
						
						<!-- Name Field -->
						<div class="form-group">
							<label for="name">Your Name:</label>
							<span class="text-danger">*<?php echo $nameErr; ?></span>
							<input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="<?php if(isset($name)) {echo $name;}?>"" />
							
						</div>
						
						<!-- Email Field -->
						<div class="form-group">
							<label for="email">Email address:</label>
							<span class="text-danger">*<?php echo $emailErr; ?></span>
							<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?php if(isset($email)) {echo $email;} ?>" />
						</div>
						
						<!-- Radio Button Field -->
						<div class="form-group">
							<label class="control-label">Can I contact you back?</label>
							<span class="text-danger">*<?php echo $contBackErr; ?></span>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes"  <?php if ((isset($contBack)) && ($contBack == "Yes")) {echo "checked";}?>/>
								<label class="form-check-label" for="yes" >Yes</label>
							</div>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="no" value="No" <?php if ((isset($contBack)) && ($contBack == "No")) {echo "checked";}?>/>
								<label class="form-check-label" for="no" >No</label>
							</div>
						</div>
						
						<!-- Comments Field -->
						<div class="form-group">
							<label for="comments">Comments:</label>
							<textarea id="comments" class="form-control" rows="3" name="comments"><?php if (isset($comment)) {echo $comment;} ?></textarea>
						</div>

						<!-- Required Fields Note-->
						<div class="text-danger text-right">* Indicates required fields</div>
						
						<!-- Submit Button -->
						<button class="btn btn-primary mb-2" type="submit" role="button" name="submit">Submit</button>
					</form>
					
				</div>
			</div>
		</div>
	</section>
	
	<?php if (($_SERVER["REQUEST_METHOD"] == "POST") && (!($formErr))) { ?>
	
	<section id="results" style="background-color: lightsteelblue;">
		<div class="container py-2" >
			<div class="row ">
				<h1>Form Entries:</h1>
			</div>
			<div class="row">				
				<ul>
					<?php
					if ($name !== "") { echo "<li>NAME: $name </li>"; } 
					if ($email !== "") { echo "<li>EMAIL: $email </li>"; }
					if ($contBack !== "") { echo "<li>CONTACT BACK: $contBack </li>"; }
					if ($comment !== "") { echo "<li>COMMENT: $comment </li>"; }
					?>
				</ul>		
			</div>
		</div>
	</section>
	
	<?php } ?>
</body>
</html>