<?php
require '../core/connection.php';
/*require 'PHPMailerAutoload.php';
require 'credential.php';*/

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])== 'xmlhttprequest'){

if (isset($_FILES [ "file" ][ "type" ]))
{
$file = $_FILES['file']['tmp_name'];
if (empty($file)) {
	echo "Insert an image";
}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $_FILES [ "file" ][ "name" ]);
$file_extension = end ($temporary );
$pic = $_FILES['file']['name'];
$picp = $_FILES['file']['tmp_name'];
$pics = $_FILES['file']['size'];
list($width, $height, $types, $attr) = getimagesize($picp);


$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/suite/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
$datee = date('l M d, Y H:i');

$in = array('picture' => "$uploadpic",
);
		move_uploaded_file($picp, $upload_folder1);
		update('rooms',$in,'id','1');
		echo "Picture Changed";

}
}

if (isset($_FILES [ "file2" ][ "type" ]))
{
$file = $_FILES['file2']['tmp_name'];
if (empty($file)) {
	echo "Insert an image";
}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $_FILES [ "file2" ][ "name" ]);
$file_extension = end ($temporary );
$pic = $_FILES['file2']['name'];
$picp = $_FILES['file2']['tmp_name'];
$pics = $_FILES['file2']['size'];
list($width, $height, $types, $attr) = getimagesize($picp);


$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/executive/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
$datee = date('l M d, Y H:i');

$in = array('picture' => "$uploadpic",
);
		move_uploaded_file($picp, $upload_folder1);
		update('rooms',$in,'id','2');
		echo "Picture Changed";

}
}

if (isset($_FILES [ "file3" ][ "type" ]))
{
$file = $_FILES['file3']['tmp_name'];
if (empty($file)) {
	echo "Insert an image";
}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $_FILES [ "file3" ][ "name" ]);
$file_extension = end ($temporary );
$pic = $_FILES['file3']['name'];
$picp = $_FILES['file3']['tmp_name'];
$pics = $_FILES['file3']['size'];
list($width, $height, $types, $attr) = getimagesize($picp);


$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/deluxe room/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
$datee = date('l M d, Y H:i');

$in = array('picture' => "$uploadpic",
);
		move_uploaded_file($picp, $upload_folder1);
		update('rooms',$in,'id','3');
		echo "Picture Changed";

}
}

if (isset($_FILES [ "file4" ][ "type" ]))
{
$file = $_FILES['file4']['tmp_name'];
if (empty($file)) {
	echo "Insert an image";
}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $_FILES [ "file4" ][ "name" ]);
$file_extension = end ($temporary );
$pic = $_FILES['file4']['name'];
$picp = $_FILES['file4']['tmp_name'];
$pics = $_FILES['file4']['size'];
list($width, $height, $types, $attr) = getimagesize($picp);


$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/standard double bed/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
$datee = date('l M d, Y H:i');

$in = array('picture' => "$uploadpic",
);
		move_uploaded_file($picp, $upload_folder1);
		update('rooms',$in,'id','4');
		echo "Picture Changed";

}
}

if (isset($_FILES [ "file5" ][ "type" ]))
{
$file = $_FILES['file5']['tmp_name'];
if (empty($file)) {
	echo "Insert an image";
}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $_FILES [ "file5" ][ "name" ]);
$file_extension = end ($temporary );
$pic = $_FILES['file5']['name'];
$picp = $_FILES['file5']['tmp_name'];
$pics = $_FILES['file5']['size'];
list($width, $height, $types, $attr) = getimagesize($picp);


$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/standard single room/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
$datee = date('l M d, Y H:i');

$in = array('picture' => "$uploadpic",
);
		move_uploaded_file($picp, $upload_folder1);
		update('rooms',$in,'id','5');
		echo "Picture Changed";

}
}

if (isset($_FILES [ "file6" ][ "type" ]))
{
$file = $_FILES['file6']['tmp_name'];
if (empty($file)) {
	echo "Insert an image";
}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $_FILES [ "file6" ][ "name" ]);
$file_extension = end ($temporary );
$pic = $_FILES['file6']['name'];
$picp = $_FILES['file6']['tmp_name'];
$pics = $_FILES['file6']['size'];
list($width, $height, $types, $attr) = getimagesize($picp);


$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/superior double room/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
$datee = date('l M d, Y H:i');

$in = array('picture' => "$uploadpic",
);
		move_uploaded_file($picp, $upload_folder1);
		update('rooms',$in,'id','6');
		echo "Picture Changed";

}
}


if (isset($_FILES [ "file7" ][ "type" ]))
{
$file = $_FILES['file7']['tmp_name'];
if (empty($file)) {
	echo "Insert an image";
}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $_FILES [ "file7" ][ "name" ]);
$file_extension = end ($temporary );
$pic = $_FILES['file7']['name'];
$picp = $_FILES['file7']['tmp_name'];
$pics = $_FILES['file7']['size'];
list($width, $height, $types, $attr) = getimagesize($picp);


$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/presidential suite/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
$datee = date('l M d, Y H:i');

$in = array('picture' => "$uploadpic",
);
		move_uploaded_file($picp, $upload_folder1);
		update('rooms',$in,'id','7');
		echo "Picture Changed";

}
}


if (isset($_FILES['this']['type']))
{
    $loop = 0;
$file = $_FILES['this']['name'];
foreach ($file as $ke) {
	if (empty($ke)) {
		echo "Please insert image";
	}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $ke);
$file_extension = end ($temporary );
$pic = $ke;
$picp =  $_FILES['this']['tmp_name'][$loop];
echo "$picp";

/*$pics = $_FILES['this']['size'];
*//*list($width, $height, $types, $attr) = getimagesize($picp);
*/

$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/display/suite/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
echo "$uploadpic";
$datee = date('l M d, Y H:i');

$in = array('for_id' => 1,
			'for_name' => "suite",
			'picture' => "$uploadpic",
);

        move_uploaded_file($picp, $upload_folder1);
        create('display',$in);
        echo "yes";
        $loop++;
    }
}
}


if (isset($_FILES['this2']['type']))
{
    $loop = 0;
$file = $_FILES['this2']['name'];
foreach ($file as $ke) {
	if (empty($ke)) {
		echo "Please insert image";
	}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $ke);
$file_extension = end ($temporary );
$pic = $ke;
$picp =  $_FILES['this2']['tmp_name'][$loop];
echo "$picp";

/*$pics = $_FILES['this2']['size'];
*//*list($width, $height, $types, $attr) = getimagesize($picp);
*/

$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/display/executive/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
echo "$uploadpic";
$datee = date('l M d, Y H:i');

$in = array('for_id' => 2,
			'for_name' => "executive",
			'picture' => "$uploadpic",
);

        move_uploaded_file($picp, $upload_folder1);
        create('display',$in);
        echo "yes";
        $loop++;
    }
}
}



if (isset($_FILES['this3']['type']))
{
    $loop = 0;
$file = $_FILES['this3']['name'];
foreach ($file as $ke) {
	if (empty($ke)) {
		echo "Please insert image";
	}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $ke);
$file_extension = end ($temporary );
$pic = $ke;
$picp =  $_FILES['this3']['tmp_name'][$loop];
echo "$picp";

/*$pics = $_FILES['this3']['size'];
*//*list($width, $height, $types, $attr) = getimagesize($picp);
*/

$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/display/deluxe room/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
echo "$uploadpic";
$datee = date('l M d, Y H:i');

$in = array('for_id' => 3,
			'for_name' => "deluxe room",
			'picture' => "$uploadpic",
);

        move_uploaded_file($picp, $upload_folder1);
        create('display',$in);
        echo "yes";
        $loop++;
    }
}
}


if (isset($_FILES['this4']['type']))
{
    $loop = 0;
$file = $_FILES['this4']['name'];
foreach ($file as $ke) {
	if (empty($ke)) {
		echo "Please insert image";
	}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $ke);
$file_extension = end ($temporary );
$pic = $ke;
$picp =  $_FILES['this4']['tmp_name'][$loop];
echo "$picp";

/*$pics = $_FILES['this4']['size'];
*//*list($width, $height, $types, $attr) = getimagesize($picp);
*/

$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/display/standard double bed/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
echo "$uploadpic";
$datee = date('l M d, Y H:i');

$in = array('for_id' => 4,
			'for_name' => "standard double bed",
			'picture' => "$uploadpic",
);

        move_uploaded_file($picp, $upload_folder1);
        create('display',$in);
        echo "yes";
        $loop++;
    }
}
}


if (isset($_FILES['this5']['type']))
{
    $loop = 0;
$file = $_FILES['this5']['name'];
foreach ($file as $ke) {
	if (empty($ke)) {
		echo "Please insert image";
	}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $ke);
$file_extension = end ($temporary );
$pic = $ke;
$picp =  $_FILES['this5']['tmp_name'][$loop];
echo "$picp";

/*$pics = $_FILES['this5']['size'];
*//*list($width, $height, $types, $attr) = getimagesize($picp);
*/

$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/display/standard single room/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
echo "$uploadpic";
$datee = date('l M d, Y H:i');

$in = array('for_id' => 5,
			'for_name' => "standard single room",
			'picture' => "$uploadpic",
);

        move_uploaded_file($picp, $upload_folder1);
        create('display',$in);
        echo "yes";
        $loop++;
    }
}
}


if (isset($_FILES['this6']['type']))
{
    $loop = 0;
$file = $_FILES['this6']['name'];
foreach ($file as $ke) {
	if (empty($ke)) {
		echo "Please insert image";
	}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $ke);
$file_extension = end ($temporary );
$pic = $ke;
$picp =  $_FILES['this6']['tmp_name'][$loop];
echo "$picp";

/*$pics = $_FILES['this6']['size'];
*//*list($width, $height, $types, $attr) = getimagesize($picp);
*/

$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/display/superior double room/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
echo "$uploadpic";
$datee = date('l M d, Y H:i');

$in = array('for_id' => 6,
			'for_name' => "superior double room",
			'picture' => "$uploadpic",
);

        move_uploaded_file($picp, $upload_folder1);
        create('display',$in);
        echo "yes";
        $loop++;
    }
}
}


if (isset($_FILES['this7']['type']))
{
    $loop = 0;
$file = $_FILES['this7']['name'];
foreach ($file as $ke) {
	if (empty($ke)) {
		echo "Please insert image";
	}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $ke);
$file_extension = end ($temporary );
$pic = $ke;
$picp =  $_FILES['this7']['tmp_name'][$loop];
echo "$picp";

/*$pics = $_FILES['this7']['size'];
*//*list($width, $height, $types, $attr) = getimagesize($picp);
*/

$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../room/display/presidential suite/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
echo "$uploadpic";
$datee = date('l M d, Y H:i');

$in = array('for_id' => 7,
			'for_name' => "presidential suite",
			'picture' => "$uploadpic",
);

        move_uploaded_file($picp, $upload_folder1);
        create('display',$in);
        echo "yes";
        $loop++;
    }
}
}

if(isset($_POST['action']) && $_POST['action'] == 'removelivestock'){
		$path = $_POST['path'];
		$iden = $_POST['id'];
		$conn->query("DELETE FROM product WHERE id = $iden");
		unlink("../products/$path");
		echo "Deleted";
	}


if(isset($_POST['action']) && $_POST['action'] == 'deletepicture2'){
		$path = $_POST['path'];
		$iden = $_POST['id'];
		$conn->query("DELETE FROM display WHERE id = $iden");
		unlink("../room/display/executive/$path");
		echo "Deleted";
	}

if(isset($_POST['action']) && $_POST['action'] == 'deletepicture3'){
		$path = $_POST['path'];
		$iden = $_POST['id'];
		$conn->query("DELETE FROM display WHERE id = $iden");
		unlink("../room/display/deluxe room/$path");
		echo "Deleted";
	}


if(isset($_POST['action']) && $_POST['action'] == 'deletepicture4'){
		$path = $_POST['path'];
		$iden = $_POST['id'];
		$conn->query("DELETE FROM display WHERE id = $iden");
		unlink("../room/display/standard double bed/$path");
		echo "Deleted";
	}


if(isset($_POST['action']) && $_POST['action'] == 'deletepicture5'){
		$path = $_POST['path'];
		$iden = $_POST['id'];
		$conn->query("DELETE FROM display WHERE id = $iden");
		unlink("../room/display/standard single room/$path");
		echo "Deleted";
	}


if(isset($_POST['action']) && $_POST['action'] == 'deletepicture6'){
		$path = $_POST['path'];
		$iden = $_POST['id'];
		$conn->query("DELETE FROM display WHERE id = $iden");
		unlink("../room/display/superior double room/$path");
		echo "Deleted";
	}

if(isset($_POST['action']) && $_POST['action'] == 'deletepicture7'){
		$path = $_POST['path'];
		$iden = $_POST['id'];
		$conn->query("DELETE FROM display WHERE id = $iden");
		unlink("../room/display/presidential suite/$path");
		echo "Deleted";
	}





	if(isset($_POST['action']) && $_POST['action'] == 'deleteprop'){
		$id = $_POST['id'];

		$fetch = $conn->query("SELECT * FROM properties WHERE id = $id");
		$result = $fetch->fetchAll(PDO::FETCH_OBJ);
		$count = $fetch->rowCount();
		if ($count > 0) {
		foreach ($result as $key) {
		$pic = $key->pic;
		}
			unlink("../img/pro-img/$pic");
		 	$conn->query("DELETE FROM properties WHERE id = $id");
		 }
		echo "Property Deleted";		
	}

	if(isset($_POST['identity'])){
		$messageid = $_POST['identity'];
		$message = $_POST['reply'];
		$date = date('l M d, Y H:i');
		if (empty($message)) {
			echo "Please type a  message";
		}else{

		$fetch = $conn->query("SELECT * FROM property_message WHERE id = $messageid");
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
			
			
			  /*$mail = new PHPMailer;
        
                $mail->SMTPDebug = 4;                               // Enable verbose debug output
                
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = EMAIL;                 // SMTP username
                $mail->Password = PASS;                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                
                $mail->setFrom(EMAIL, 'Vibadia Properties');
                $mail->addAddress($email);     // Add a recipient
                
                $mail->addReplyTo(EMAIL);
                
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML
                
                $mail->Subject = 'Admin Message';
                $mail->Body    = '<h1 style="color:#C40207"> Vibadia Properties Admin </h1><br> <p> The admin of hortechnet just sent you a no reply message, please login <a href="http://www.hortechnet.com/clientmain.php?mod=messages&link=view">here</a> with your username and password and click on messages to view the message </p> ';
                $mail->AltBody = "$message";
                
                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }
                
            mail('oladejioreoluwa94@gmail.com','test', $message);*/
        
        $in = array(    'idfor' => $idfor, 
                        'message' => $message, 
                        'date' => $date 
        
                );

			create('reply_pmessages',$in);
			echo "Reply sent";
		}
		
		
		
	}
	}


	if(isset($_POST['action']) && $_POST['action'] == 'deletermes'){
		$id = $_POST['id'];

		 	$conn->query("DELETE FROM reply_pmessages WHERE id = $id");
		echo "Message Deleted";		
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