<?php

$menu = "checkin";

?>

<?php include("header.php"); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <h1><i class="nav-icon fas fa-check-square"></i> ข้อมูลการเช็คอินเข้าคลาส - Customer</h1>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="card">

    <br>
    <div class="card-body p-1">
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row" class="info">
                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">MemberID</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">Name</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">Nationality</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">Time</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">Class</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  4100
                </td>
                <td>
                  Ittiwat Whangdee
                </td>
                <td>
                  Thai
                </td>
                <td>
                  30-03-2021 09:00:03
                </td>
                <td>
                  SINGLE
                </td>
              </tr>

              <tr>
                <td>
                  4101
                </td>
                <td>
                  Natthinee Suwanpanich
                </td>
                <td>
                  Thai
                </td>
                <td>
                  30-03-2021 09:00:03
                </td>
                <td>
                  SINGLE
                </td>
              </tr>

              <tr>
                <td>
                  4102
                </td>
                <td>
                  Chalisa Phetsitong
                </td>
                <td>
                  Thai
                </td>
                <td>
                  30-03-2021 09:00:03
                </td>
                <td>
                  30 DAYS
                </td>
              </tr>

              <tr>
                <td>
                  4103
                </td>
                <td>
                  Mohamed Salah
                </td>
                <td>
                  Foreigner
                </td>
                <td>
                  30-03-2021 09:00:03
                </td>
                <td>
                  30 DAYS
                </td>
              </tr>

              <tr>
                <td>
                  4104
                </td>
                <td>
                  Roberto Firmino
                </td>
                <td>
                  Foreigner
                </td>
                <td>
                  30-03-2021 09:00:03
                </td>
                <td>
                  30 DAYS
                </td>
              </tr>

              <tr>
                <td>
                  4105
                </td>
                <td>
                  Jordan Henderson
                </td>
                <td>
                  Foreigner
                </td>
                <td>
                  30-03-2021 09:00:03
                </td>
                <td>
                  SINGLE
                </td>
              </tr>

              <tr>
                <td>
                  4106
                </td>
                <td>
                  Robert Lewandowski
                </td>
                <td>
                  Foreigner
                </td>
                <td>
                  30-03-2021 09:00:03
                </td>
                <td>
                  SINGLE
                </td>
              </tr>

            </tbody>
          </table>

        </div>

        <div class="col-md-1">

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