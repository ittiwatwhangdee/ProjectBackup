<?php
include "../KataHotYoga/includes/db.php";
include "../KataHotYoga/phpqrcode/qrlib.php";
$folderTemp = 'qrcode/';
$a = $_POST['member_id'];
$b = $_POST['name'];
$n = $_POST['nationality'];
$g = $_POST['gender'];
$class = $_POST['class'];
$memberemail = $_POST['memberemail'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$c = $b;
$d = $b . ".png";
$quality = 'H';
$size = 8;
$padding = 0;
// outputs image directly into browser, as PNG stream
$checkin_url = "http://192.168.1.14/project/KataHotYoga/checkin_db.php?idqrcode=" . $a;
QRCode::png($checkin_url, $folderTemp . $d, $quality, $size, $padding);
$sql = $conn->query("INSERT INTO tb_customer VALUES('$a','$b','$n','$g','$class','$memberemail','$telephone','$address','$d')");
if ($sql) {
    header('location:customer.php');
} else {
    echo "Database Error";
    die($con->error);
}
