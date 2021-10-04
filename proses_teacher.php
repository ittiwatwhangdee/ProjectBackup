<?php
include "../KataHotYoga/includes/db.php";

if(isset($_POST['submit'])){
    
	$id = $_POST['id'];
	$name = $_POST['name'];
	$teacher_gender = $_POST['teacher_gender'];
	$teacher_age = $_POST['teacher_age'];
	$teacher_time = $_POST['teacher_time'];
	$teacher_income = $_POST['teacher_income'];
	$teacher_telephone = $_POST['teacher_telephone'];
	$teacher_address = $_POST['teacher_address'];

	//image upload

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images_db/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	$insert_data = "INSERT INTO tb_teacher (id,name,teacher_gender,teacher_age,teacher_time,teacher_income,teacher_telephone,teacher_address,image) VALUES ('$id','$name','$teacher_gender','$teacher_age','$teacher_time','$teacher_income','$teacher_telephone','$teacher_address','$image')";
  	$run_data = mysqli_query($conn,$insert_data);

  	if($run_data){
  		header('location:teacher.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>


// Insert Data Teacher to Database

