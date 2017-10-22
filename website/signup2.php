
<?php

include_once 'inc/dbh.inc.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="CSS/signup2.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div class="header">
		<h1>SignUp</h1>
	</div>
	<div class="helloUser">
		<?php 

			$sql = "SELECT * FROM user WHERE user_uid='$_SESSION['user_uid']'";
			$rest=mysqli_query( $sql);
					while($row=mysqli_fetch_array($res)) {

						echo $row ['user_uid'];

					}
		 ?>
	</div>
	<div class="container">
		
		<div class="form">
			<div class="dropdown-wrapper">
			
			<select class="dropdown_cat" name='passion_cat1' id="passion_cat1">
				<option>please select a passion
				</option>
				<?php
					$res=mysqli_query($conn, "select * from passion_maincat");
					while($row=mysqli_fetch_array($res))
					{
				?>
				
				<option value="<?php echo $row ['passionmain_name']; ?>"><?php echo $row ['passionmain_name']; ?>
				</option>
				<?php
					}
				?>
			</select>
			<br><br>
			
			<select class="dropdown_cat" name='passion_cat2' id="passion_cat2">
				<option>please select a passion
				</option>
				<?php
					$res=mysqli_query($conn, "select * from passion_maincat");
					while($row=mysqli_fetch_array($res))
					{
				?>
				<option>
				<?php echo $row["passionmain_name"];?>
				</option>
				<?php } ?>
			</select>
			<br><br>
			
			<select class="dropdown_cat" name='passion_cat3' id="passion_cat3">
				<option>please select a passion
				</option>
				<?php
					$res=mysqli_query($conn, "select * from passion_maincat");
					while($row=mysqli_fetch_array($res))
					{
				?>
				
				<option><?php echo $row["passionmain_name"]; ?>
				</option>
				<?php
					}
				?>
				
				
			</select>
				
			</div>
				
			</form>
		</div>
		<div class="passiondes">
			<h3>What is a Passion?</h3>
			<ul>
				<li>
					It took quit some time to decide for a word to describe ones interests, talents, and skills in a short fasion.<br>
					Passion does this job pretty good for some people, but as language interpretation highly variates between people, that won't be the case for everybody.
				</li>
				<li>
					
				</li>
			</ul>
		</div>
		<div class="locpic">
			
		</div>
	</div>





<?php
include 'outerfooter.php';
?>