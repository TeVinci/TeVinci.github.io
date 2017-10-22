<?php
require ('dbh.inc.php');
$date = date("Y-m-d");


	function get_msg() {

		require ('dbh.inc.php');

		$sql = "SELECT * FROM private_messages";

		$result = mysqli_query($conn, $sql);

		$resultCheck = mysqli_num_rows($result);
		
		echo $result;

		$messages = array();

		while($message = mysqli_fetch_assoc($result)) {
			$messages[] = array('sender'=>$message['from_id'], 'message'=>$message['message']);
		}

		return $messages;
	}

	function send_msg($sender, $message) {

		if(!emty($sender) && !empty($message)) {

			$sender = mysqli_real_escape_string($sender);
			$message = mysql_real_escape_string($message);

			$query = "INSERT INTO private_messages ('id', 'to_id', 'from_id', 'subject', 'message', 'sender_delete', 'time-sent') VALUES (NULL, '$to_id', '$sender', '$subject', '$message', '$sender_delete', '$date');";

			if($run = mysqli_query($query)) {
				return true;

			}
			else {
				return false;
			}

		}
		else {
			return false;
		}
	}
  ?>