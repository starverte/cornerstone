<?php
/*
Template Name: Request a Quote Form
*/
?>


<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

	//Check to see if the honeypot captcha field was filled in
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Check to make sure that the name field is not empty
		if(trim($_POST['Name']) === '') {
			$nameError = 'You forgot to enter your name.';
			$hasError = true;
		} else {
			$name = trim($_POST['Name']);
		}
		
		//Check to make sure that the address field is not empty
		if(trim($_POST['address']) === '') {
			$nameError = 'You forgot to enter your address.';
			$hasError = true;
		} else {
			$address = trim($_POST['address']);
		}
		
		//Check to make sure that the phone number field is not empty
		if(trim($_POST['phone']) === '') {
			$phoneError = 'You forgot to enter your phone number.';
			$hasError = true;
		} else {
			$phone = trim($_POST['phone']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = 'You forgot to enter your email address.';
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = 'You entered an invalid email address.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
		
		//Check to make sure that the project type was selected
		if(trim($_POST['project']) === '') {
			$projectError = 'You forgot to select the project type.';
			$hasError = true;
		} else {
			$project = trim($_POST['project']);
		}
			
		//If there is no error, send the email
		if(!isset($hasError)) {
			
			$mtgtime = trim($_POST['mtgtime']);
			
			$startdate = trim($_POST['startdate']);
			
			$budget = trim($_POST['budget']);
			
			if(function_exists('stripslashes')) {
				$notes = stripslashes(trim($_POST['notes']));
			} else {
				$notes = trim($_POST['notes']);
			}

			$emailTo = 'ccforms@starverte.com';
			$subject = 'Request a Quote Form from '.$name.' ';
			$sendCopy = trim($_POST['sendCopy']);
			$body = "Name: $name \n\nAddress: $address \n\nPhone: $phone \n\nEmail: $email \n\nProject Type: $project \n\nPreferred Meeting Time: $mtgtime \n\nApproximate Start Date: $startdate \n\nBudget (if desired): $budget \n\nNotes: $notes";
			$headers = 'From: Cornerstone Construction <noreply@fccornerstone.com>' . "\r\n" . 'Reply-To: ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			if($sendCopy == true) {
				$subject = 'You emailed Cornerstone Construction';
				$headers = 'From: Cornerstone Construction <noreply@fccornerstone.com>';
				mail($email, $subject, $body, $headers);
			}

			$emailSent = true;

		}
	}
} ?>


<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/contact-form.js"></script>



<?php if(isset($emailSent) && $emailSent == true) { ?>

	<div class="thanks">
		<h1>Thanks, <?=$name;?></h1>
		<p>Your email was successfully sent. We will be in touch soon. If you don't hear from us within a few days, please call us at 970.663.1536</p>
	</div>

<?php } else { ?>

	<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php the_content(); ?>
		
		<?php if(isset($hasError) || isset($captchaError)) { ?>
			<p class="error">There was an error submitting the form.<p>
		<?php } ?>
	
		<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
	
			<ol class="forms">
				<li><label for="Name">Name</label>
					<input type="text" name="Name" id="Name" value="<?php if(isset($_POST['Name'])) echo $_POST['Name'];?>" class="requiredField" />
					<?php if($nameError != '') { ?>
						<span class="error"><?=$nameError;?></span> 
					<?php } ?>
				</li>
                
                <li><label for="address">Address</label>
					<input type="text" name="address" id="address" value="<?php if(isset($_POST['address'])) echo $_POST['address'];?>" class="requiredField" />
					<?php if($addressError != '') { ?>
						<span class="error"><?=$addressError;?></span> 
					<?php } ?>
				</li>
                
                <li><label for="phone">Phone</label>
					<input type="tel" name="phone" id="phone" value="<?php if(isset($_POST['phone']))  echo $_POST['phone'];?>" class="requiredField phone" />
					<?php if($phoneError != '') { ?>
						<span class="error"><?=$phoneError;?></span>
					<?php } ?>
				</li>
                
                <li><label for="email">Email</label>
					<input type="email" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />
					<?php if($emailError != '') { ?>
						<span class="error"><?=$emailError;?></span>
					<?php } ?>
				</li>
                
                <li><label for="project">Project Type</label>
                	<select name='project' id='project' value='<?php if(isset($_POST['project']))  echo $_POST['project'];?>' class='requiredField project'/>
                        <option selected='selected'></option>
                        <option>Addition</option>
                        <option>Outdoor Features</option>
                        <option>Bathroom Remodel</option>
                        <option>Basement Finish</option>
                        <option>Deck/Patio</option>
                        <option>Flooring</option>
                        <option>Kitchen Remodeling</option>
                        <option>New Construction</option>
                        <option>Tenant Finish</option>
                        <option>Other (please specify in notes)</option>
					</select>
                    <?php if($projectError != '') { ?>
						<span class="error"><?=$projectError;?></span>
					<?php } ?>
                </li>
                
                <li><label for="mtgtime">Preferred Meeting Time</label>
					<input type="time" name="mtgtime" id="mtgtime" value="<?php if(isset($_POST['mtgtime']))  echo $_POST['mtgtime'];?>" class="mtgtime" />
				</li>
                
                <li><label for="startdate">Approximate Start Date</label>
					<input type="date" name="startdate" id="startdate" value="<?php if(isset($_POST['startdate']))  echo $_POST['startdate'];?>" class="startdate" />
				</li>
                
                <li><label for="budget">Budget (if desired)</label>
                	<select name='budget' id='budget' value='<?php if(isset($_POST['budget']))  echo $_POST['budget'];?>' class='budget'/>
                        <option selected='selected'></option>
                        <option>$0-4999</option>
                        <option>$5000-14999</option>
                        <option>$15000-24999</option>
                        <option>$25000-49999</option>
                        <option>$50000+</option>
					</select>
                </li>
				
				<li class="textarea"><label for="notes">Notes</label>
					<textarea name="notes" id="notes" rows="20" cols="30" class="requiredField"><?php if(isset($_POST['notes'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['notes']); } else { echo $_POST['notes']; } } ?></textarea>
				</li>
				<li class="inline"><input type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> /><label for="sendCopy">Send a copy of this email to yourself</label></li>
				<li class="screenReader"><label for="checking" class="screenReader">If you want to submit this form, do not enter anything in this field</label><input type="text" name="checking" id="checking" class="screenReader" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" /></li>
				<li class="buttons"><input type="hidden" name="submitted" id="submitted" value="true" /><button type="submit">Send</button></li>
			</ol>
		</form>
	
		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>

<?php get_footer(); ?>