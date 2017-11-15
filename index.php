<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    
    <title>雅曼苏纯羊奶粉</title>
    <link rel="stylesheet" type="text/css" href="https://tms3.bytecdn.cn/s/n/slick-carousel/slick/slick_bf97555.css" />
    <link rel="stylesheet" type="text/css" href="https://tms3.bytecdn.cn/s/n/slick-carousel/slick/slick-theme_f5552e7.css" />
    <link rel="stylesheet" type="text/css" href="https://tms3.bytecdn.cn/s/views/product/index/index_bc2471a.css" />
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="./geo.js"></script>
    <script src="./gt.js"></script>
    <style>
    /* 以下遮罩层为demo.用户可自行设计实现 */
    body{
        background: #D0EBFF;
    }
    #mask {
        display: none;
        position: fixed;
        text-align: center;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        overflow: auto;
    }
    /* 可自行设计实现captcha的位置大小 */
    .popup-mobile {
        position: relative;
    }
    #popup-captcha-mobile {
        position: fixed;
        display: none;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        z-index: 9999;
    }
    #form-container .radio-container span{
    	color: #2eb7ff;
    }
    #form-container .getCodeBtn{
    	background: #2eb7ff;
    }
    #form-container .radio-label2 :checked + span::after{
    	background: #2eb7ff;
    }
    #form-container .btn-submit{
    	background: #2eb7ff;
    }
    #form-container select.form-control{
    	margin-right:10px;
    }
    .order-title::after{
        width: 0;
    }
    .head .btn-submit{
        display: block;
        width: 100%;
        height: 38px;
        line-height: 38px;
        background: #2eb7ff;
        color: #fff;
        font-size: 18px;
        border: 0;
        margin: 26px auto;
        padding: 0;
        outline: 0;
    }
    </style>
</head>
<body onload="setup();preselect('北京市');promptinfo();">
    <div id="main">
       <div class="head">
            <button type="button" class="btn-submit">订单信息</button>
        </div>
        
        
        <!-- 订单信息 -->
        <div id="form-container">
            
            
                <div class="field-group mb">
                    <label class="field-label"><span class="red">*</span>产&nbsp;&nbsp;&nbsp;&nbsp;品</label>
                    <div class="field-container radio-container radio-container-combo">
                            <span data-price="59900" data-id="750445" id="product_name" >雅曼苏纯羊奶粉</span>
                    </div>
                </div>
                <div class="normal-spec-info-container">
                                    </div>
                <div class="gift-spec-info-container">
                                    </div>
                <div class="field-group">
                    <label class="field-label"><span class="red">*</span>数&nbsp;&nbsp;&nbsp;&nbsp;量</label>
                    <div class="field-container">
                        <div class="combo-num-container">
                            <span class="combo-num-min">-</span>
                            <input type="text" name="combo_num" value="1" id="num" autocomplete="off">
                            <span class="combo-num-max">+</span>
                        </div>
                    </div>
                </div>
                <div class="field-group">
                    <label class="field-label"><span class="red">*</span>姓&nbsp;&nbsp;&nbsp;&nbsp;名</label>
                    <div class="field-container">
                        <input type="text" class="form-control" name="post_receiver" id="username" autocomplete="off">
                    </div>
                </div>
                <div class="field-group">
                    <label class="field-label"><span class="red">*</span>手&nbsp;&nbsp;&nbsp;&nbsp;机</label>
                    <div class="field-container">
                        <input type="tel" class="form-control" name="post_tel" id="phone" autocomplete="off">
                    </div>
                </div>
                <div class="field-group field-group-code">
                    <label class="field-label"><span class="red">*</span>验证码</label>
                    <div class="field-container">
                        <input type="text" class="form-control" name="code" id="code" autocomplete="off">
                        <a href="javascript:;" class="getCodeBtn" id="getCodeBtn">获取手机验证码</a>
                    </div>
                </div>
                <div class="field-group mb">
                    <label class="field-label"><span class="red">*</span>地&nbsp;&nbsp;&nbsp;&nbsp;区</label>
                    <div class="field-container">
                        <form name="shareip" action="" method="post">
                            <select class="select form-control" name="province" style="width:27%;float:left;" id="s1">
                            <option></option>
                            </select>
                            <select class="select form-control" name="city" style="width:27%;float:left;" id="s2">
                            <option></option>
                            </select>
                            <select class="select form-control" name="town" style="width:27%;float:left;" id="s3">
                            <option></option>
                            </select>
                            <input id="address" name="address" type="hidden" value="" />
                            
                        </form>
                    </div>
                </div>
                <div class="field-group" style="margin-top: 15px;">
                    <label class="field-label"><span class="red">*</span>地&nbsp;&nbsp;&nbsp;&nbsp;址</label>
                    <div class="field-container">
                        <input type="text" class="form-control" name="detail" id="adress" autocomplete="off">
                    </div>
                </div>
                <div class="field-group">
                    <label class="field-label"><span class="red">*</span>金&nbsp;&nbsp;&nbsp;&nbsp;额</label>
                    <div class="field-container">
                        <input type="text" class="form-control" name="total" id="total" value="298" style="width:80px;float:left;text-align:center;" readonly>
                        <div class="money-unit">元</div>
                    </div>
                </div>
                <div class="field-group">
                    <label class="field-label"><span class="red">*</span>付&nbsp;&nbsp;&nbsp;&nbsp;款</label>
                    <div class="field-container">
                        <label class="radio-label2"><input type="radio" checked><span>货到付款</span></label>
                    </div>
                </div>
                <div class="field-group">
                    <label class="field-label">留&nbsp;&nbsp;&nbsp;&nbsp;言</label>
                    <div class="field-container">
                        <textarea name="buyer_words" rows="4" style="height:auto;" id="message" class="form-control"></textarea>
                    </div>
                </div>
                <div class="field-group">
                    <label class="field-label"></label>
                    <div class="field-container">
                        <button type="button" class="btn-submit" id="popup-submit-mobile">立即提交订单</button>
                    </div>
                </div>
                
           
        </div>

    </div>


    <div class="toast_tip"></div>


    
    <script src="./js/layer/layer.js"></script>
    <script src="./js/info.js"></script>

    <script>
        function promptinfo(){
            var address = document.getElementById('address').value;
            var s1 = document.getElementById('s1').value;
            var s2 = document.getElementById('s2').value;
            var s3 = document.getElementById('s3').value;
            address=""+s1+ s2 + s3;
            return address;
        }
        $("#mask").click(function () {
            $("#mask, #popup-captcha-mobile").hide();
        });

        // 验证码特效
        var timer="";
        var nums=60;
        var validCode=true;//定义该变量是为了处理后面的重复点击事件
        $("#getCodeBtn").on('click',function(){
            //手机验证
            var re = /^1[3|7|5|8]\d{9}$/;
            if(re.test($('#phone').val())){     //验证成功
                var code=$(this);
                if(validCode){
                    validCode=false;
                    timer=setInterval(function(){
                        if(nums>0){
                            nums--;
                            code.text(nums+"秒后重新发送");
                            code.addClass("gray-bg");
                        }
                        else{
                            clearInterval(timer);
                            nums=60;//重置回去
                            validCode=true;
                            code.removeClass("gray-bg");
                            code.text("发送验证码");
                        }
                    },1000)

                    $.ajax({  
                        type: "post",  
                        url: "post.php",  
                        data: {
                            mobile:$('#phone').val()
                        },  
                        // dataType: "json",  
                        success:function(data){  
                            console.log(data);
                            layer.msg('验证码发送成功，请注意查收！');
                            localStorage.setItem('code', JSON.stringify(data))
                        },  
                        error:function(err){  
                            console.log(err);  
                        }  
                    });  
                }

            }else{      //验证失败
                layer.msg('请输入正确的手机号');
                return false;
            }
            
            

        })
        //验证码特效结束

        $("#popup-submit-mobile").click(function () {
            if($('#username').val().length==0){
                layer.msg('请输入姓名');
                return false;
            }
            
            if($('#phone').val().length==0){
                layer.msg('请输入手机号');
                return false;
            }
            
          
            var code = JSON.parse(localStorage.getItem('code'))
            if($('#code').val() != code ){
                layer.msg('验证码输入错误');
                return false;
            }
            
            if($('#adress').val().length==0){
                layer.msg('请输入地址');
                return false;
            }
            var province = $("#s1 option:selected").val();
            var city = $("#s2 option:selected").val();
            var town = $("#s3 option:selected").val();
        
        
            $.ajax({
                url:"add.php",
                data:{
                    'product_name':$('#product_name').text(),
                    'combo_num':$('#num').val(),
                    'post_receiver':$('#username').val(),
                    'post_tel':$('#phone').val(),
                    'province':province,
                    'city':city,
                    'town':town,
                    'detail':$('#adress').val(),
                    'total':$('#total').val(),
                    'buyer_words':$('#message').val()
                },
                type:"post",
                dataType:'text',
                success:function(data){
                    
                    location.href="list.php";
                    
                },
                error:function(status){
                    
                    layer.alert('网络错误', {icon: 2});
                }
            });
        });
        
    
    </script>

</body>
</html>
