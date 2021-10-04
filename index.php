<?php
$menu = "index";
?>
<?php include("header.php"); ?>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Membership Overview</h1>
      </div>
    </div>
  </div>
</div>

<section class="content">

  <div class="row">
    
    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>4120</h3>
          <p>Total Members</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>
      </div>
    </div>
    
    <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>12</h3>

          <p>New Members (January)</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- Top 30 days challenge chart -->
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Top 30 Days Challenge</h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="progress-group">
              Sunisa
              <span class="float-right"><b>28</b>/30</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: 90%"></div>
              </div>
            </div>
            <!-- /.progress-group -->

            <div class="progress-group">
              CIRO
              <span class="float-right"><b>27</b>/30</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-danger" style="width: 85%"></div>
              </div>
            </div>

            <!-- /.progress-group -->
            <div class="progress-group">
              <span class="progress-text">Phatcharee</span>
              <span class="float-right"><b>16</b>/30</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-success" style="width: 60%"></div>
              </div>
            </div>

            <!-- /.progress-group -->
            <div class="progress-group">
              Rosa
              <span class="float-right"><b>14</b>/30</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-warning" style="width: 45%"></div>
              </div>
            </div>
            <!-- /.progress-group -->

            <div class="progress-group">
              Christine
              <span class="float-right"><b>9</b>/30</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-purple" style="width: 30%"></div>
              </div>
            </div>
            <!-- /.progress-group -->

            <div class="progress-group">
              Paolo
              <span class="float-right"><b>7</b>/30</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-pink" style="width: 15%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 10CLASSES - Student Attendance -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">10CLASSES - Attendance</h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="progress-group">
              Natthinee
              <span class="float-right"><b>5</b>/10</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-secondary" style="width: 50%"></div>
              </div>
            </div>
            <!-- /.progress-group -->

            <div class="progress-group">
              Ittiwat
              <span class="float-right"><b>5</b>/10</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-secondary" style="width: 50%"></div>
              </div>
            </div>

            <!-- /.progress-group -->
            <div class="progress-group">
              Chalisa
              <span class="float-right"><b>4</b>/10</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-secondary" style="width: 40%"></div>
              </div>
            </div>

            <!-- /.progress-group -->
            <div class="progress-group">
              Christiano
              <span class="float-right"><b>2</b>/10</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-secondary" style="width: 20%"></div>
              </div>
            </div>
            <!-- /.progress-group -->

            <div class="progress-group">
              Salah
              <span class="float-right"><b>6</b>/10</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-secondary" style="width: 60%"></div>
              </div>
            </div>
            <!-- /.progress-group -->

            <div class="progress-group">
              Diogo
              <span class="float-right"><b>6</b>/10</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-secondary" style="width: 60%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </div>
  </div>
  </div> -->
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