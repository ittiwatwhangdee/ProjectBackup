<?php
$menu = "customer";
?>
<?php include("header.php"); ?>
<?php include "../KataHotYoga/includes/db.php"; ?>

<section class="content-header">
  <div class="container-fluid">
    <h1><i class="nav-icon fas fa-address-card"></i> จัดการข้อมูลลูกค้า - Customers</h1>
  </div>
</section>

<section class="content">
  <div class="card">
    <div class="card-header card-navy card-outline">
      <div align="right">
        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-user-plus"></i> <span>เพิ่มข้อมูลลูกค้า</span></a>
      </div>
    </div>

    <br>

    <div class="col-md-12">
      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
          <tr>
            <th>MemberID</th>
            <th>Name</th>
            <th>Nationality</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Address</th>
            <th>QRCode</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = $conn->query("SELECT*FROM tb_customer");
          while ($resl = $sql->fetch_array()) {
          ?>
            <tr>
              <td><?= $resl['member_id'] ?></td>
              <td><?= $resl['name'] ?></td>
              <td><?= $resl['nationality'] ?></td>
              <td><?= $resl['gender'] ?></td>
              <td><?= $resl['class'] ?></td>
              <td><?= $resl['memberemail'] ?></td>
              <td><?= $resl['telephone'] ?></td>
              <td><?= $resl['address'] ?></td>
              <td><img src="qrcode/<?= $resl['qrcode'] ?>" alt="" width="100"></td>
              <td>

                <a class="btn btn-info btn-xs" href="" target="">
                  <i class="fas fa-eye">
                  </i>

                </a>

                <a class="btn btn-warning btn-xs" href="" target="">
                  <i class="fas fa-pencil-alt">
                  </i>
                </a>
              </td>
            </tr>
          <?php

          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- insert information customer -->
  <div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="proses.php" method="POST">
          <div class="modal-header">
            <h4 class="modal-title">เพิ่มข้อมูลลูกค้า</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">MemberID</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="member_id" placeholder="Enter MemberID" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Enter name" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nationality</label>
              <div class="col-sm-10">
                <select class="form-control" name="nationality" id="nationality">
                  <option value="">Select Nationality</option>
                  <option value="Thai">Thai</option>
                  <option value="Foreigner">Foreigner</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Gender</label>
              <div class="col-sm-10">
                <select class="form-control" name="gender" id="gender">
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <!-- <div class="form-group row">
              <label class="col-sm-2 col-form-label">Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="userdate" placeholder="Date" required>
              </div>
            </div> -->
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Class</label>
              <div class="col-sm-10">
                <select class="form-control" name="class" id="class">
                  <option value="">Select Class</option>
                  <option value="Single">SINGLE CLASS</option>
                  <option value="30DaysChallenge">30 DAYS CHALLENGE</option>
                  <option value="10CLASSES">10 CLASSES</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="memberemail" placeholder="Enter email" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="telephone" placeholder="Enter phone" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="address" placeholder="Enter Address" required></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
            <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
          </div>
        </form>
      </div>
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