<?php
require 'core/connection.php';
/*require 'PHPMailerAutoload.php';
require 'credential.php';*/

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])== 'xmlhttprequest'){




	if(isset($_POST['action']) && $_POST['action'] == 'checkout'){
		$id = $_POST['id'];
		$allvar = $_POST['allvar'];
		$totals = $_POST['totals'];
		$date = date('l M d, Y H:i');

		$allvar = trim($allvar);
		$allvar = mysql_real_escape_string($allvar);
		$allvar = str_replace("fa fa-minus", " ", $allvar);
		$allvar = str_replace("fa fa-plus", " ", $allvar);

		$in = array('byid' => $id,
					'goods' => $allvar, 
					'amount' => $totals, 
					'status' => "pending", 
					'date' => $date, 
					);

		create('cart',$in);


	}

	if(isset($_POST['action']) && $_POST['action'] == 'deletemes'){
		$id = $_POST['id'];

		 	$conn->query("DELETE FROM reply_messages WHERE id = $id");
		echo "Message Deleted";		
	}


		if(isset($_POST['identity2'])){
		$messageid = $_POST['identity2'];
		$message = $_POST['reply'];
		$date = date('l M d, Y H:i');
		if (empty($message)) {
			echo "Please type a  message";
		}else{

		$fetch = $conn->query("SELECT * FROM contact WHERE id = $messageid");
		$result = $fetch->fetchAll(PDO::FETCH_OBJ);
		$count = $fetch->rowCount();
		if ($count > 0) {
		foreach ($result as $key) {
		$email = $key->email;
		}

			$in = array('message_id' => $messageid,
						'email' => $email,
						'message' => $message,
						'dates' => $date

			);

			create('reply_messages',$in);
			echo "Reply sent";
		}
		
		
		
	}
	}
}
?>