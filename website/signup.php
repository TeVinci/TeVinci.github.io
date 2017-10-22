
<?php
include 'outerheader.php';

include_once 'inc/dbh.inc.php';

?>

<section class='main-container'>
	
	<div class='form-wrapper'>
			<div class="signuptext">
				<a href="signup.php"><h2>SignUp</h2></a>
			</div>
		<div class="error">
			
		</div>
<br>
		<form class='signup-form' action='inc/signup.inc.php' method='POST'>
			<input type='text' name='uid' placeholder='your new Identity'>
			<input type='text' name='name' placeholder='your Name'>
			<input type='text' name='Location' placeholder='Location'>
			<input type='password' name='pwd' placeholder='Password (min. 6 characters)'>
			<input type='password' name='conpwd' placeholder='Confirm Password'>
			<button type='submit' name='submit'>SignUp</button><br />
		</form><br>
		<div class="signuperror">

		<?php
				require 'inc/signuperror.inc.php'
			?>

		</div>
	</div>
	<div class="signup_desc_wrapper">
		<div class="signup_desc">
			<strong><h1>What to do?</h1></strong>
<br><br>
			<h4>Your new Identity</h4>
<br>
			<p><span>Be creative!</span><br>
			This will be your unique identity, other users can find you by this identity.
			</p>
<br>
			<h4>Your name</h4><br>
			<p>The difference here is that your name <span id="namenotuniquie">does not have to be unique.</span></p> <p>It will also help other users to find your profile, but there may be more users with the same name.
			</p>
<br>
			<h4>Your passion</h4><br>
			<p>Please select at least one Passion you would like to see projects on. <br>
			Here you will just need to indicate a general category, but as soon as you are logged in, you will be able to further specify this.<br>
			We are sorry for the small ammount of options, but this list will continiously grow as users can add new passions.<br>
			<span>just select at least one for now.</span>

			</p>
<br>
			<h4>Your location</h4><br>
			<p>This is for projects where physical presence is nessecary.<br>
			Just indicate a region you would like to take part in projects or leave it out.
			</p>
<br>
			<h4>Password</h4><br>
			<p>You know this stuff ;)</p>
			<p>
			Sorry, but we cannot protect your password from being guessed, so please do not make it too easy. <br>
			</p>
			<span>Just use at least 6 characters</span>
		</div>
	</div>
	
</section>

<?php
include 'outerfooter.php';
?>