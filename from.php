<?php
$menu = "from";
include("header.php"); ?>

<script type="text/javascript">
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <h1>Waiver & Registration Form</h1>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Waiver & Registration Form</h3>
        </div>
        <br>
        <div class="card-body p-1">

          <div class="row">
            <div class="col-md-1">

            </div>


            <div class="col-md-10">
              <form role="form">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="regis_name" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Lastname/Surname</label>
                      <input type="text" class="form-control" name="regis_lastname" placeholder="Enter Lastame">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nickname</label>
                      <input type="text" class="form-control" name="regis_nickname" placeholder="Enter Nickname">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Gender</label>
                      <select class="form-control" name="class" id="">
                        <option value="regis_female">Female</option>
                        <option value="regis_male">Male</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Mobile Phone</label>
                      <input type="text" class="form-control" name="regis_mobile" placeholder="Enter Phone Number">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nationality</label>
                      <select class="form-control" name="class" id="">
                        <option value="regis_thai">Thai</option>
                        <option value="regis_foreigner">Foreigner</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="regis_email" placeholder="Enter Email">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Facebook</label>
                      <input type="text" class="form-control" name="regis_facebook" placeholder="Enter Facebook">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Instagram</label>
                      <input type="text" class="form-control" name="regis_instagram" placeholder="Enter Instagram">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Date of Birth</label>
                      <input type="date" class="form-control" name="regis_dob" placeholder="Date" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" name="regis_address" placeholder="Enter Address" required></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>How did you find us?</label>
                      <textarea class="form-control" name="regis_find" placeholder="" required></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Class</label>
                      <select class="form-control" name="class" id="">
                        <option value="regis_female">Single Class</option>
                        <option value="regis_male">10 CLASSES</option>
                        <option value="regis_male">30 Days Challenge</option>
                      </select>
                    </div>
                  </div>
                </div>

                <!-- input states -->
                <div class="row">
                  <div class="col-sm-12">
                    <!-- checkbox -->
                    <div class="form-group">
                      <label>Declaration of Medical conditions/history</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">I herbey declare that I have no pre-existing medical conditions or problems and that
                          I have consulted a doctor prior to commencing any exercise/yoga sessions with Kata Hot Yoga</label>
                      </div>
                      <br>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">I hereby declare that I have the following medicals conditions/history/problems or
                          previously had the following medical conditions/history/problems:</label>
                        <input type="text" class="form-control" name="regis_medical" placeholder="">
                      </div>
                      <br>
                      <div class="">
                        <label class="form-check-label">I hereby agree that Kata Hot Yoga has the sole discretion of accepting my application and may refuse my
                          application without any explanation whatsoever if there are any prevailing or previous medical conditions </label>
                      </div>
                      <br>
                      <div class="">
                        <label class="form-check-label">I agree to waive any and call claims or rights I might otherwise have against the school
                          including the right to sue the school. its intructors, its employee. or agents. for any injuries resulting from physical
                          practice </label>
                      </div>
                      <br>
                      <div class="">
                        <label class="form-check-label">I have careful read this waiver and fully understand that I release Kata Hot Yoga Phuket
                          from any claim injuries resulting from activities while attending the school's facilities and/ or yoga classes, no refund.
                        </label>
                      </div>
                      <br>
                      <div class="">
                        <label class="form-check-label">Note: Prior to participating in any exercise program or activity . you should seek the advice
                          of your physician or other qualified health professional. You agree that no health information provided by us will be used to
                          diagnose,treat,cure or prevent any medical conditions.
                        </label>
                      </div>
                      <div class="">
                        <label class="form-check-label">I hereby declare that I shall be bound by all terms and conditions of Kata Hot Yoga that are in force
                          (a copy of which may be obtained upon request) and by any changes to the terms and conditions therein upon notice being given to me.
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="custom-file">
                    <label for="">Signature of Applicant</label><label style="color: red;">*</label>
                    <input type="file" class="form-control" name="mc_img" id="mc_img" onchange="readURL(this);" /><br>
                    <img id="blah" src="#" alt="your signature" width="50%" />
                  </div>
                </div>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Emergency Contact</label>
                      <input type="text" class="form-control" name="regis_name" placeholder="Enter Name">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Telephone</label>
                      <input type="text" class="form-control" name="regis_name" placeholder="Enter Telephone">
                    </div>
                  </div>
                </div>




                <button type="submit" class="btn btn-success form-control">Register</button>
                <br>
                <br>


              </form>
            </div>

          </div>

        </div>

      </div>

    </div>
    <!-- /.col -->
  </div>

</section>
<!-- /.content -->


<?php include('footer.php'); ?>

<script>
  $(function() {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // });
  });
</script>

</body>

</html>