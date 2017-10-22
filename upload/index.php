<!DOCTYPE html>
<html>
<head>
	<title>Upload files</title>
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<label for="UploadFileField"></label>
		<input type="file" name="file" id="UploadFileField"/>
		<button type="submit" name="submit" id="UploadButton">Upload
		</button>
	</form>
</body>
</html>