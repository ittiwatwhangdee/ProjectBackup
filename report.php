<?php

$menu = "report";

?>

<?php include("header.php"); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <h1><i class="nav-icon fas fa-list-alt"></i> สรุปรายรับ-รายจ่าย</h1>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header p-2">
        <ul class="nav nav-tabs">
          <li class="nav-item"><a class="nav-link active" href="#revenue" data-toggle="tab">+ บันทึกรายรับ</a></li>
          <li class="nav-item"><a class="nav-link" href="#expenses" data-toggle="tab">- บันทึกรายจ่าย</a></li>
          <li class="nav-item"><a class="nav-link" href="#report" data-toggle="tab">สรุปรายรับ-รายจ่าย</a></li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">
          <div class="active tab-pane" id="revenue">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">บันทึกรายรับ</h5>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- /.col -->
                    <div class="col-md-12">
                      <div class="modal-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">วันที่</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" name="reportdate" placeholder="Date" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">รายการ</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="menu" id="">
                              <option value="">--กรุณาเลือกรายการ--</option>
                              <option value="coconut">น้ำมะพร้าว</option>
                              <option value="watersmall">น้ำเปล่า(เล็ก)</option>
                              <option value="waterbig">น้ำเปล่า(ใหญ่)</option>
                              <option value="gatorade">Gatorade</option>
                              <option value="coffee">Coffee</option>
                              <option value="combucha">Combucha</option>
                              <option value="tanktop">Tank Top</option>
                              <option value="tshirt">T-Shirt</option>
                              <option value="sportbar">Sport Bar</option>
                              <option value="clause">10CLASSES</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">รายละเอียด</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" name="detail" placeholder="" required></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">วิธีชำระ</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="menu" id="">
                              <option value="">--กรุณาเลือกรายการ--</option>
                              <option value="money">เงินสด</option>
                              <option value="pay">โอนเงิน</option>
                              <option value="credit">บัตรเครดิต</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">รับเงินจาก</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="moneyby" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">จำนวนเงิน</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="money" required>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="ยกเลิก">
                        <input type="submit" class="btn btn-success" name="add" value="บันทึก">
                      </div>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card-footer -->
              <div class="col-md-6">
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- /.col -->
                    <div class="col-md-12">
                      <table id="" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                          <tr role="row" class="info">
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 2%;">ลำดับ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 8%;">วันที่</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายการ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วิธีชำระ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รับเงินจาก</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวนเงิน</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>
                              1
                            </td>
                            <td>
                              30-03-2021
                            </td>
                            <td>
                              น้ำมะพร้าว
                            </td>
                            <td>
                              เงินสด
                            </td>
                            <td>
                              Diogo Jota
                            </td>
                            <td>
                              80.-
                            </td>
                          </tr>

                          <tr>
                            <td>
                              2
                            </td>
                            <td>
                              30-03-2021
                            </td>
                            <td>
                              น้ำมะพร้าว
                            </td>
                            <td>
                              เงินสด
                            </td>
                            <td>
                              Mohamed Salah
                            </td>
                            <td>
                              80.-
                            </td>
                          </tr>

                          <tr>
                            <td>
                              3
                            </td>
                            <td>
                              30-03-2021
                            </td>
                            <td>
                              น้ำเปล่า(ใหญ่)
                            </td>
                            <td>
                              โอนเงิน
                            </td>
                            <td>
                              Sadio Mane
                            </td>
                            <td>
                              40.-
                            </td>
                          </tr>

                          <tr>
                            <td>
                              4
                            </td>
                            <td>
                              30-03-2021
                            </td>
                            <td>
                              น้ำเปล่า(เล็ก)
                            </td>
                            <td>
                              เงินสด
                            </td>
                            <td>
                              Trent Arnold
                            </td>
                            <td>
                              20.-
                            </td>
                          </tr>

                          <tr>
                            <td>
                              5
                            </td>
                            <td>
                              30-03-2021
                            </td>
                            <td>
                              Gatorade
                            </td>
                            <td>
                              เงินสด
                            </td>
                            <td>
                              Alisson
                            </td>
                            <td>
                              60.-
                            </td>
                          </tr>

                          <tr>
                            <td>
                              6
                            </td>
                            <td>
                              30-03-2021
                            </td>
                            <td>
                              10CLASSES
                            </td>
                            <td>
                              เครดิต
                            </td>
                            <td>
                              Mr.Salah
                            </td>
                            <td>
                              750.-
                            </td>
                          </tr>

                        </tbody>
                      </table>
                      <div class="modal-footer">
                        <input type="" class="btn btn-success" name="add" value="รวมยอดรายรับ 1,030 THB">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="tab-pane" id="expenses">
            <!-- The timeline -->
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">บันทึกรายจ่าย</h5>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- /.col -->
                    <div class="col-md-12">

                      <div class="modal-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">วันที่</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" name="reportdate" placeholder="Date" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">รายการ</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="menu" id="">
                              <option value="">--กรุณาเลือกรายการ--</option>
                              <option value="coconut">ค่าพนักงาน</option>
                              <option value="water">มะพร้าวสด</option>
                              <option value="clause">เครื่องดื่ม</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">รายละเอียด</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" name="detail" placeholder="" required></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">วิธีชำระ</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="menu" id="">
                              <option value="">--กรุณาเลือกรายการ--</option>
                              <option value="money">เงินสด</option>
                              <option value="pay">โอนเงิน</option>
                              <option value="credit">บัตรเครดิต</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">จ่ายให้</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="bymoney" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">จำนวนเงิน</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="money" required>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="ยกเลิก">
                        <input type="submit" class="btn btn-success" name="add" value="บันทึก">
                      </div>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card-footer -->
              <div class="col-md-6">
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- /.col -->
                    <div class="col-md-12">
                      <table id="" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                          <tr role="row" class="info">
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 2%;">ลำดับ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">วันที่</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายการ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">วิธีชำระ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จ่ายให้</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวนเงิน</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>
                              1
                            </td>
                            <td>
                              30-03-2021
                            </td>
                            <td>
                              T-Shirt
                            </td>
                            <td>
                              เงินสด
                            </td>
                            <td>
                              ร้านทำเสื้อ
                            </td>
                            <td>
                              400.-
                            </td>
                          </tr>

                          <tr>
                            <td>
                              2
                            </td>
                            <td>
                              30-03-2021
                            </td>
                            <td>
                              น้ำเปล่าแพ็ค
                            </td>
                            <td>
                              โอนเงิน
                            </td>
                            <td>
                              Mackro
                            </td>
                            <td>
                              400.-
                            </td>
                          </tr>

                          <tr>
                            <td>
                              3
                            </td>
                            <td>
                              30-03-2021
                            </td>
                            <td>
                              มะพร้าวสด
                            </td>
                            <td>
                              เงินสด
                            </td>
                            <td>
                              สวนมะพร้าว
                            </td>
                            <td>
                              150.-
                            </td>
                          </tr>

                          <tr>
                            <td>
                              4
                            </td>
                            <td>
                              30-03-2021
                            </td>
                            <td>
                              มะพร้าวสด
                            </td>
                            <td>
                              เงินสด
                            </td>
                            <td>
                              สวนมะพร้าว
                            </td>
                            <td>
                              150.-
                            </td>
                          </tr>

                          <tr>
                            <td>
                              5
                            </td>
                            <td>
                              30-03-2021
                            </td>
                            <td>
                              มะพร้าวสด
                            </td>
                            <td>
                              เงินสด
                            </td>
                            <td>
                              สวนมะพร้าว
                            </td>
                            <td>
                              150.-
                            </td>
                          </tr>

                        </tbody>
                      </table>
                      <div class="modal-footer">
                        <input type="" class="btn btn-danger" name="add" value="รวมยอดรายจ่าย 950 THB">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- /.tab-pane -->

          <div class="tab-pane" id="report">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Chart</h5>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">

                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Bar Chart</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Donut Chart</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">รายรับ 565,000 THB</button>
                      <button type="button" class="btn btn-danger">รายจ่าย 145,00 THB</button>
                      <button type="button" class="btn btn-primary">รายได้ 375,000 THB</button>
                    </div>

                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card-footer -->
              <div class="col-md-6">
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- /.col -->
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label class="col-sm-1.5 col-form-label">เริ่ม</label>
                        <div class="col-sm-4">
                          <input type="date" class="form-control" name="startdate" placeholder="Date" required>
                        </div>
                        <label class="col-sm-1.5 col-form-label">สิ้นสุด</label>
                        <div class="col-sm-4">
                          <input type="date" class="form-control" name="enddate" placeholder="Date" required>
                        </div>
                        <div class="col-sm-2">
                          <input type="submit" class="btn btn-info" name="sendemail" value="Email">
                        </div>
                      </div>

                      <table id="" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                          <tr role="row" class="info">
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">เดือน</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายรับ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ค่าใช้จ่าย</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายได้</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>
                              1
                            </td>
                            <td>
                              มกราคม
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>

                          <tr>
                            <td>
                              2
                            </td>
                            <td>
                              กุมภาพันธ์
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>

                          <tr>
                            <td>
                              3
                            </td>
                            <td>
                              มีนาคม
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>

                          <tr>
                            <td>
                              4
                            </td>
                            <td>
                              เมษายน
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>

                          <tr>
                            <td>
                              5
                            </td>
                            <td>
                              พฤษภาคม
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>

                          <tr>
                            <td>
                              6
                            </td>
                            <td>
                              มิถุนายน
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>

                          <tr>
                            <td>
                              7
                            </td>
                            <td>
                              กรกฎาคม
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>

                          <tr>
                            <td>
                              8
                            </td>
                            <td>
                              สิงหาคม
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>

                          <tr>
                            <td>
                              9
                            </td>
                            <td>
                              กันยายน
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>

                          <tr>
                            <td>
                              10
                            </td>
                            <td>
                              ตุลาคม
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>

                          <tr>
                            <td>
                              11
                            </td>
                            <td>
                              พฤศจิกายน
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>

                          <tr>
                            <td>
                              12
                            </td>
                            <td>
                              ธันวาคม
                            </td>
                            <td>
                              30,000
                            </td>
                            <td>
                              15,000
                            </td>
                            <td>
                              15,000
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
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