<?php
// database connection code
if (isset($_POST['txtName'])) {
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect('localhost', 'root', '', 'db_cart');

    // get the post records

    $txtid = $_POST['txtid'];
    $txtpname = $_POST['txtpname'];
    $txtprate = $_POST['txtprate'];
    $txtpdes = $_POST['txtpdes'];
    $txtmessage = $_POST['txtmessage'];

    // database insert SQL code
    $sql = "INSERT INTO `tbl_cart` (`id`, `fldpname`, `fldprate`, `fldpdes`, `fldmessage`) VALUES ('0', '$txtid', '$txtpname', '$txtprate', $txtpdes',$txtMessage')";

    // insert in database 
    $rs = mysqli_query($con, $sql);
    if ($rs) {
        echo "item Added to the cart successfully";
    }
} else {
    echo "error occured";
}
