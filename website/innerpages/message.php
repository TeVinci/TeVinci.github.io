<?php
	require('../inc/core.inc.php')
	
?>

<div id="messages">
<?php
	$messages = get_msg();
	foreach($messages as $message) {
		echo '<strong>'.$message['sender'].' Sent</strong><br>';
		echo $message['message'].'<br><br>';
	}
?>

<div>
	
	<form action="index.php" method="post">
		<label>Enter Name:</label>
		<input type="text" name="sender">
</div>
