<?php
include("conn.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>雅曼苏纯羊奶粉</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="head">
    <img src="./img/chenggong.gif" alt="">
    <h2>您的订单提交成功！</h2>
    <h4>稍后我们将会通过电话的形式确认您的信息，敬请谅解！</h4>
</div>
<div class="table-responsive">
    <?php
        // $phone = $_COOKIE['shopId'];
        @$sql="select * from list where phone = '{$_COOKIE[shopId]}'";
        $query=mysql_query($sql);
        while($row=mysql_fetch_array($query)){ 
    ?>
    <table class="table table-striped">
        <th colspan="3" align="center">订单信息</th>
        <tr>
            <td>产品：</td>
            <td><?php echo $row['name'] ?>*<?php echo $row['num'] ?></td>
        </tr>
        <tr>
            <td>收货人：</td>
            <td><?php echo $row['account'] ?></td>
        </tr>
        <tr>
            <td>手机号：</td>
            <td><?php echo $row['phone'] ?></td>
        </tr>
        
        <tr>
            <td>收货地址</td>
            <td>
                <?php echo $row['address_1'] ?>
                <?php echo $row['address_2'] ?>
                <?php echo $row['address_3'] ?>
                <?php echo $row['address_detail'] ?>
            </td>
        </tr>
        <tr>
            <td>消费金额</td>
            <td><?php echo $row['money'] ?></td>
        </tr>
        <tr>
            <td>留言：</td>
            <td><?php echo $row['message'] ?></td>
        </tr>

    </table>
    <?php
    }
    ?>

</div>

</body>
</html>