<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Document</title>
</head>
<body>
    <section id="contact">
		<div class="container py-5">
			<!-- Section Title -->
			<div class="row justify-content-center text-center">
				<div class="col-md-6">
					<h2 class="display-4 font-weight-bold">Contact Me</h2>
					<hr />
				</div>
			</div>
			<!-- Contact Form Row -->
			<div class="row justify-content-center">
				<div class="col-6">
					<!-- Contact Form Start -->
					<!-- EXERCISE STEP 1: Set action to return to this page when submitted using PHP_SELF -->
					<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
						
						<!-- Name Field -->
						<div class="form-group">
							<label for="name">Full Name:</label>
							<input type="text" class="form-control" id="name" placeholder="Full Name" name="name" />
						</div>
						
						<!-- Email Field -->
						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" />
						</div>
						
						<!-- Radio Button Field -->
						<div class="form-group">
							<label class="control-label">Can we contact you back?</label>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes" checked />
								<label class="form-check-label" for="yes">Yes</label>
							</div>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="no" value="No" />
								<label class="form-check-label" for="no">No</label>
							</div>
						</div>
						
						<!-- Comments Field -->
						<div class="form-group">
							<label for="comments">Comments:</label>
							<textarea id="comments" class="form-control" rows="3" name="comments"></textarea>
						</div>
						
						<!-- Submit Button -->
						<button class="btn btn-primary mb-2" type="submit" role="button" name="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
</section>
	
</body>
</html>