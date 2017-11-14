<?php 
	require ('../inc/HF/innerheader.php');
 ?>

 <div class="uploadimg">
 	<h5>Change profile-image</h5>

 	<div class="profileimg1">
			<?php
			$id = $_SESSION['user_id'];
			$sql = "SELECT profileimg FROM user WHERE user_id='$id'";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {

				while ($row = mysqli_fetch_assoc($result)) {
					$profileimg = $row['profileimg'];
					$destination = $id.".".$profileimg;
		 			
		 			if ($profileimg == 'new') {

		 				echo "<div id='profileimg'>";
						echo "<img height='100px' src='../innerpages/userimg/default.png'>";
						echo "</div>";
					}
					else {
						
						echo "<div id='profileimg'>";
						echo "<img height='100px' src='../innerpages/userimg/".$destination."'>";
						echo "</div>";
					}
				}
				
			}
		?>
	</div>

	<form action="../inc/uploadimg.inc.php" method="POST" enctype="multipart/form-data">
		<label for="UploadFileField"></label>
		<input type="file" name="file" id="UploadFileField"/>
		<button type="submit" name="submit" id="UploadButton">Upload
		</button>
	</form>
	<div class="uploadimgerror">
		<?php
		require ('../inc/uploadimg.error.inc.php');
		?>
	</div>
	
</div>

<div class="passions">
	<h5>Change Passions</h5>
	<form class="updatepassion" method="POST" action="../inc/updatepassions.inc.php">
	<select id="passion1" name="passion1">
		<option>
			<?php
				$ID = $_SESSION['user_id'];
				$result=mysqli_query($conn, "select user_passion1 from user where user_id='$ID'");
				$row = mysqli_fetch_array($result);

				if ($row['user_passion1'] == "") {
					echo "please select";
				}
				else {

				echo $row ['user_passion1'];

				}
			?>
		</option>
				<?php
					$res=mysqli_query($conn, "select * from passion_maincat");
					while($row=mysqli_fetch_array($res))
					{
				?>
				
		<option value="<?php echo $row ['Name']; ?>">
					<?php echo $row ['Name']; ?>
		</option>
		
				<?php
					}
				?>
	</select>
	<select id="passion2" name="passion2">
		<option>
			<?php
				$ID = $_SESSION['user_id'];
				$result=mysqli_query($conn, "select user_passion2 from user where user_id='$ID'");
				$row = mysqli_fetch_array($result);

				if ($row['user_passion2'] == "") {
					echo "please select";
				}
				else {

				echo $row ['user_passion2'];

				}
			?>
				</option>
				<?php
					$res=mysqli_query($conn, "select * from passion_maincat");
					while($row=mysqli_fetch_array($res))
					{
				?>
				
				<option value="<?php echo $row ['Name']; ?>">
					<?php echo $row ['Name']; ?>
				</option>
		
				<?php
					}
				?>
	</select>
	<select id="passion3" name="passion3">
		<option>
			<?php
				$ID = $_SESSION['user_id'];
				$result=mysqli_query($conn, "select user_passion3 from user where user_id='$ID'");
				$row = mysqli_fetch_array($result);

				if ($row['user_passion3'] == "") {
					echo "please select";
				}
				else {

				echo $row ['user_passion3'];

				}
			?>
				</option>
				<?php
					$res=mysqli_query($conn, "select * from passion_maincat");
					while($row=mysqli_fetch_array($res))
					{
				?>
				
				<option value="<?php echo $row ['Name']; ?>">
					<?php echo $row ['Name']; ?>
				</option>
		
				<?php
					}
				?>
	</select>
	<select id="passion4" name="passion4">
		<option>
			<?php
				$ID = $_SESSION['user_id'];
				$result=mysqli_query($conn, "select user_passion4 from user where user_id='$ID'");
				$row = mysqli_fetch_array($result);

				if ($row['user_passion4'] == "") {
					echo "please select";
				}
				else {

				echo $row ['user_passion4'];

				}
			?>
				</option>
				<?php
					$res=mysqli_query($conn, "select * from passion_maincat");
					while($row=mysqli_fetch_array($res))
					{
				?>
				
				<option value="<?php echo $row ['Name']; ?>">
					<?php echo $row ['Name']; ?>
				</option>
		
				<?php
					}
				?>
	</select>
	<select id="passion5" name="passion5">
		<option>
			<?php
				$ID = $_SESSION['user_id'];
				$result=mysqli_query($conn, "select user_passion5 from user where user_id='$ID'");
				$row = mysqli_fetch_array($result);

				if ($row['user_passion5'] == "") {
					echo "please select";
				}
				else {

				echo $row ['user_passion5'];

				}
			?>
				</option>
				<?php
					$res=mysqli_query($conn, "select * from passion_maincat");
					while($row=mysqli_fetch_array($res))
					{
				?>
				
				<option value="<?php echo $row ['Name']; ?>">
					<?php echo $row ['Name']; ?>
				</option>
		
				<?php
					}
				?>
	</select>
	<button type="submit" name="submit">Update passions</button>
	</form>
</div>

 <?php 

 	require ('../inc/HF/innerfooter.php');
  ?>
