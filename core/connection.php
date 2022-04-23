<?php

	try{
		$conn = new PDO("mysql:host=localhost;dbname=livestock","root","");
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
	}	

	function all($table){	
		global $conn;
		$stmt = $conn->query("SELECT * FROM $table");
		return $stmt;		
	}

	function get($table,$field,$value){
			global $conn;
			$stmt = $conn->query("SELECT * FROM $table WHERE $field = '$value' ");
			return $stmt;		
	}

	function get_data($table,$field,$value){
			global $conn;
			$stmt = $conn->query("SELECT * FROM $table WHERE $field = $value ");
			return $stmt;		
	}

	function get_alias($table,$field,$value,$field2,$value2){
			global $conn;
			$stmt = $conn->query("SELECT * FROM $table WHERE $field = '$value' AND $field2 = '$value2' ");
			return $stmt;		
	}

	function update($table,$in,$id_field,$id_val){
			global $conn;
		//Process the Array of data
		foreach ($in as $field => $value) {
			$fields[] = sprintf("`%s` = '%s' ",$field,$value);
			$field_list = join(',',$fields);
			}
			//Set the query string
			$query = sprintf("UPDATE `%s` SET %s WHERE `%s` = %s", $table, $field_list, $id_field, INTVAL($id_val));

			//Perform Update
			$stmt = $conn->prepare($query);
			$stmt->execute();

			return true;		
	}

	function create($table,$data){
		global $conn;
		foreach($data as $field => $value){
			$fields[] = sprintf("`%s`",$field);
			$values[] = sprintf("'%s'",$value);
			$field_list = join(',',$fields);
			$value_list = join(',',$values);
		}

		$query = sprintf("INSERT INTO `%s`(%s)VALUES(%s)",$table,$field_list,$value_list);
		$stmt = $conn->prepare($query);
		$stmt->execute();

		return true;
	}

	function delete($table,$field,$value){
		global $conn;
		$stmt = $conn->query("DELETE FROM $table WHERE $field = '$value' ");
		
		return true;
	}

	function login($table,$email,$password){
		global $conn;
		$stmt = $conn->query("SELECT * FROM $table WHERE email = '$email' AND password = '$password' ");
		return $stmt;
	}

	function logged_in(){
		return isset($_SESSION['is_admin']);
	}

	function sanitize($data){
		$data = filter_var($data, FILTER_SANITIZE_STRING);
		return $data;
	}

	function sanitize_int($data){
		$data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
		return $data;
	}

	
	function redirect($url){
		return header("Location:$url");
	}

	function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


?>