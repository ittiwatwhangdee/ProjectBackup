<?php
session_start();

$menu = "from";
include("header.php");

$pin = '1234'; // ดึกจาก database ได่

if (isset($_POST["pin"])) {
    $_SESSION["pin"] = $_POST["pin"];
}
if (isset($_SESSION["pin"]) && $_SESSION["pin"] ==  $pin) {

    // ต่อ database 
    // เอา idqrcode ไปหาuser idqrcode

    // ทำการ update ว่า user คนนี้ เข้าชั้นเรียน

    $idqrcode  = $_GET["idqrcode"];
?>

    <!-- login okey <?= $idqrcode ?>

    <br />
    Check in Success! -->
    <br>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>เช็คอินเรียบร้อยแล้ว!</h3>
            </div>
            <div class="modal-body">
                <h6>MemberID <?= $idqrcode ?></h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">OK</button>
            </div>
        </div>
    </div>
    </div>

<?php
} else {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

    <!-- <?= $actual_link ?>
    <form action="<?= $actual_link ?>" method="post">
        pin: <input type="text" name="pin"><br>
        <input type="submit">
    </form> -->

    <div class="container" style="padding-top:100px">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="background-color:#D6EAF8">
                <h3 align="center">
                    <span class="glyphicon glyphicon-lock"> </span>
                    PIN
                </h3>
                <?= $actual_link ?>
                <form name="formlogin" action="<?= $actual_link ?>" method="post" id="login" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="pin" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-log-in"> </span>
                                Submit </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




<?php

}

?>

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