<?php
header("Content-type: text/html; charset=utf-8");
include("conn.php");


$product_name =$_POST['product_name'];

$combo_num= $_POST['combo_num'];

$post_receiver= $_POST['post_receiver'];

$post_tel = $_POST['post_tel'];

$province = $_POST['province'];

$city = $_POST['city'];

$town = $_POST['town'];

$detail = $_POST['detail'];

$total = $_POST['total'];

$buyer_words = $_POST['buyer_words'];


mysql_select_db("message", $con);

$sql = "insert into list(
                  id,name,num,account,phone,address_1,address_2,address_3,address_detail,money,message,time
                  ) values (
                    null,'$product_name','$combo_num','$post_receiver','$post_tel','$province','$city','$town','$detail','$total','$buyer_words',now()
                  )";

mysql_query($sql);

$success = 'ok';
$json = array('message' => $success);
echo json_encode($json);
setcookie('shopId',$post_tel);




?>