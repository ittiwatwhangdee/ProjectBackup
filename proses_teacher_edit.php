<?php
include "../KataHotYoga/includes/db.php";

$id = $_GET['id'];

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$teacher_gender = $_POST['teacher_gender'];
	$teacher_age = $_POST['teacher_age'];
	$teacher_time = $_POST['teacher_time'];
	$teacher_income = $_POST['teacher_income'];
	$teacher_telephone = $_POST['teacher_telephone'];
	$teacher_address  = $_POST['teacher_address'];
	
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images_db/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

	$update = "UPDATE tb_teacher SET name='$name', teacher_gender = '$teacher_gender', teacher_age = '$teacher_age', teacher_time = '$teacher_time', 
				teacher_income = '$teacher_income',teacher_telephone = '$teacher_telephone', teacher_address = '$teacher_address', image = '$image' WHERE id=$id ";
	$run_update = mysqli_query($conn,$update);

	if($run_update){
		header('location:teacher.php');
	}else{
		echo "Data not update";
	}
}

?>