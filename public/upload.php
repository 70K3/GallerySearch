<?php
	$connet = mysqli_connect("s5535512074_267","bYo51tF2","s5535512074_267";
	
	if(!empty($_FILES)){
		$path = 'upload/'.$_FILES['file']['name'];
		if(move_uploaded_file($_FILES['file'], ['tmp_name'], $path)){
			$insertQuery = "INSERT INTO photo VALUES ('".$_FILES['file']['name']"')";
			if(mysqli_query($connet ,$insertQuery)){
				echo "Flie upload";
			}
			else{
				echo "Flie upload But not Saved";
			}
		}
	}
	else{
		echo "Some Error !!!";
	}
?>