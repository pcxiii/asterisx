<?php 
	$g = $_GET;
	$p = $_POST;
	$r = $_REQUEST;


	if( isset($r["cmd"]) && function_exists($r['cmd'])){
		call_user_func($r['cmd'], $p);
	}else{

	/*	echo "<script>alert('a')</script>";*/
	}


	// ADD TEACHER
	function add_teacher($p){
		
		$con = mysql_connect("localhost", "root", "");
		$database = mysql_select_db("enrollment");
		
		$data = $p["data"];
		$content = "(";
		$values = "VALUES(";
		foreach ($data as $key => $value) {
			$content .= "$key, ";
			$values .= "'$value', ";
		}	

			$content .= "status)";
			$values .= "1)";
		mysql_query("INSERT INTO users $content $values") or die(mysql_error());
	}	

	// ADD COURSE
	function add_course($p){
		
		$con = mysql_connect("localhost", "root", "");
		$database = mysql_select_db("enrollment");
		
		$data = $p["data"];
		$content = "(";
		$values = "VALUES(";
		foreach ($data as $key => $value) {
			$content .= "$key, ";
			$values .= "'$value', ";
		}	

			$content .= "status)";
			$values .= "1)";
		mysql_query("INSERT INTO courses $content $values") or die(mysql_error());
	}	

	// ADD ROOM
	function add_room($p){
		
		$con = mysql_connect("localhost", "root", "");
		$database = mysql_select_db("enrollment");
		
		$data = $p["data"];
		$content = "(";
		$values = "VALUES(";
		foreach ($data as $key => $value) {
			$content .= "$key, ";
			$values .= "'$value', ";
		}	

			$content .= "status)";
			$values .= "1)";
		mysql_query("INSERT INTO rooms $content $values") or die(mysql_error());
	}	

	// ADD SUBJECT
	function add_subject($p){
		
		$con = mysql_connect("localhost", "root", "");
		$database = mysql_select_db("enrollment");
		
		$data = $p["data"];
		$content = "(";
		$values = "VALUES(";
		foreach ($data as $key => $value) {
			$content .= "$key, ";
			$values .= "'$value', ";
		}	

			$content .= "status)";
			$values .= "1)";
		mysql_query("INSERT INTO subjects $content $values") or die(mysql_error());
	}
?>