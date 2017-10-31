<?php 
	include '../HF/innerheader.php';


 ?>

 
 <div class="uploadimg">
	<form action="../inc/uploadimg.inc.php" method="POST" enctype="multipart/form-data">
		<label for="UploadFileField"></label>
		<input type="file" name="file" id="UploadFileField"/>
		<button type="submit" name="submit" id="UploadButton">Upload
		</button>
	</form>
</div>

 <?php
 include '../HF/innerfooter.php';
  ?>