<?php

include 'config.php';
	$sql = "INSERT INTO `humans` (`id`, `me_id`, `avatar`) VALUES (NULL, '1211212213213', '<div id='div'></div>');";
	$mysqli->query($sql);
if(isset($_POST['me_id']) && isset($_POST['avatar'])) {
	$me_id = $_POST['me_id'];
	$avatar = $_POST['avatar'];
	//get data
	if($result = $mysqli->query("SELECT * FROM humans WHERE me_id='" . $me_id . "' LIMIT 1")){
		$row_count = $result->num_rows;
		if ($row_count == 0){
			$sql = "INSERT INTO humans (me_id, avatar) VALUES ('" . $me_id . "', '" . $avatar . "')";
			$mysqli->query($sql);
		}
		else {
			$sql = "UPDATE humans SET me_id='".$me_id."', avatar='".$avatar."'";
			$mysqli->query($sql);
		}
	}
}

?>