<?php
	session_start();
	include '../inc/dbh.inc.php';
	
	if (isset($_SESSION['user_id'])) {

?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<title>MySpace</title>

	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' type='text/css' href='../CSS/innergeneral.css'>

</head>
<body>
	<div class="header">
		<div class="nav">
			<ul>
				<li>
					<a href="myhome.php">Home</a>
				</li>
				<li>
					<a href="projects.php">Projects</a>
				</li>
				<li>
					<a href="knowledgebase.php">Knowledge base</a>
				</li>
				<li>
					<a href="discussionboard.php">Discussion board</a>
				</li>
				<li>
					<a href="learningspace.php">Learning space</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="2ndheader">
		<div class="mywrapper">
			<div class="mymenu">
				<ul>
					<li>
						<a href="#">My Messages</a>
					</li>
					<li>
						<a href="#">My Projects</a>
					</li>
					<li>
						<a href="#">My Posts</a>
					</li>
					<li>
						<a href="#">My files</a>
					</li>
					<li>
						<a href="#">My Evaluations</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="logout">
			<form action='../inc/logout.inc.php' method='POST' id='logout'>
				<button type='submit' name ='submit'>Logout</button>
			</form>
		</div>
	</div>
	

<?php
} else {
	header("Location: ../index.php?error=plsLogin");
}
?>