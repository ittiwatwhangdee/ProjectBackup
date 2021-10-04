<?php
$menu = "teacher";
?>

<?php include("header.php"); ?>
<?php include "../KataHotYoga/includes/db.php"; ?>

<section class="content-header">
  <div class="container-fluid">
    <h1><i class="nav-icon fas fa-address-card"></i> จัดการข้อมูลผู้สอน - Teachers</h1>
  </div>
</section>

<section class="content">
  <div class="card">
    <div class="card-header card-navy card-outline">
      <div align="right">
        <a href="#addTeacherModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-user-plus"></i> <span>เพิ่มข้อมูลผู้สอน</span></a>
      </div>
    </div>

    <br>

    <div class="col-md-12">
      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row" class="info">
            <!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">Profile</th> -->
            <th>Profile</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Time</th>
            <th>Income/Time</th>
            <th>Telephone</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>

        <?php

          $get_data = "SELECT * FROM tb_teacher";
          $run_data = mysqli_query($conn,$get_data);

          while($row = mysqli_fetch_array($run_data))
          {
            $id = $row['id'];
            $image = $row['image'];
            $name = $row['name'];
            $teacher_gender = $row['teacher_gender'];
            $teacher_age = $row['teacher_age'];
            $teacher_time = $row['teacher_time'];
            $teacher_income = $row['teacher_income'];
            $teacher_telephone = $row['teacher_telephone'];
            $teacher_address = $row['teacher_address'];
            

            echo "

            <tr>
              <td class='text-center'><img src='images_db/$image' style='width:70px;'></td>
              <td>$name</td>
              <td>$teacher_gender</td>
              <td>$teacher_age</td>
              <td>$teacher_time</td>
              <td>$teacher_income</td>
              <td>$teacher_telephone</td>
              <td>$teacher_address</td>

              <td>
                <a class='btn btn-warning btn-xs' href='#'>
                  <i class='fas fa-pencil-alt' data-toggle='modal' data-target='#edit$id' style='' aria-hidden='true'>
                  </i>
                </a>

              </td>
            </tr>

            ";
          }

        ?>

      </table>
    </div>
  </div>

  <!-- insert information Teacher -->
  <div id="addTeacherModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="proses_teacher.php" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <h4 class="modal-title">เพิ่มข้อมูลผู้สอน</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Profile</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="image">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Enter name" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Gender</label>
              <div class="col-sm-10">
                <select class="form-control" name="teacher_gender">
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Age</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="teacher_age" placeholder="Enter Age" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Time</label>
              <div class="col-sm-10">
                <select class="form-control" name="teacher_time">
                  <option value="">Select Time</option>
                  <option value="10:00-12:00">10:00 - 12:00</option>
                  <option value="12:00-15:00">12:00 - 15:00</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Income</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="teacher_income" placeholder="Enter Income/Time" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="teacher_address" placeholder="Enter Address" required></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Telephone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="teacher_telephone" placeholder="Enter phone" required>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
            <button type="submit" name="submit" value="Submit" class="btn btn-success">เพิ่มข้อมูล</button>
          </div>

        </form>
      </div>
    </div>
  </div>


<!-- Edit information Teacher -->

<?php

$get_data = "SELECT * FROM tb_teacher";
$run_data = mysqli_query($conn,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$image = $row['image'];
	$name = $row['name'];
	$teacher_gender = $row['teacher_gender'];
	$teacher_age = $row['teacher_age'];
	$teacher_time = $row['teacher_time'];
	$teacher_income = $row['teacher_income'];
	$teacher_telephone = $row['teacher_telephone'];
	$teacher_address = $row['teacher_address'];
	
	echo "
  
  <div id='edit$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>
    <div class='modal-content'>
    <div class='modal-header'>
    <h4 class='modal-title'>อัพเดทข้อมูลผู้สอน</h4>
    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
  </div>

        <div class='modal-body'>
        <form action='proses_teacher_edit.php?id=$id' method='POST' enctype='multipart/form-data'>

        <div class='form-group row'>
          <label class='col-sm-2 col-form-label'>Profile</label>
          <div class='col-sm-10'>
            <input type='file' class='form-control' name='image'>
            <img src = 'images_db/$image' style='width:70px;'>
          </div>
        </div>

        <div class='form-group row'>
          <label class='col-sm-2 col-form-label'>Name</label>
          <div class='col-sm-10'>
            <input type='text' class='form-control' name='name' value='$name'>
          </div>
        </div>

        <div class='form-group row'>
          <label class='col-sm-2 col-form-label'>Gender</label>
          <div class='col-sm-10'>
            <select class='form-control' name='teacher_gender' id='teacher_gender'>
              <option value=''>Select Gender</option>
              <option value='Male'>Male</option>
              <option value='Female'>Female</option>
            </select>
          </div>
        </div>

        <div class='form-group row'>
          <label class='col-sm-2 col-form-label'>Age</label>
          <div class='col-sm-10'>
            <input type='text' class='form-control' name='teacher_age' value='$teacher_age'>
          </div>
        </div>

        <div class='form-group row'>
          <label class='col-sm-2 col-form-label'>Time</label>
          <div class='col-sm-10'>
            <select class='form-control' name='teacher_time' id='teacher_time'>
              <option value=''>Select Time</option>
              <option value='10:00-12:00'>10:00 - 12:00</option>
              <option value='12:00-15:00'>12:00 - 15:00</option>
            </select>
          </div>
        </div>

        <div class='form-group row'>
          <label class='col-sm-2 col-form-label'>Income</label>
          <div class='col-sm-10'>
            <input type='text' class='form-control' name='teacher_income' value='$teacher_income'>
          </div>
        </div>

        <div class='form-group row'>
          <label class='col-sm-2 col-form-label'>Phone</label>
          <div class='col-sm-10'>
            <input type='text' class='form-control' name='teacher_telephone' value='$teacher_telephone'>
          </div>
        </div>

        <div class='form-group row'>
          <label class='col-sm-2 col-form-label'>Phone</label>
          <div class='col-sm-10'>
            <input type='text' class='form-control' name='teacher_address' value='$teacher_address'>
          </div>
        </div>

        <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
        	
        </form>
      </div>
    </div>
  </div>
</div>


	";
}

?>

  </div>
  </div>
</section>

<?php include('footer.php'); ?>
<script>
  $(function() {
    $(".datatable").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>

</html>
