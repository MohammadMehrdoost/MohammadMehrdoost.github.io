<div id="main" style="width: 1200px;margin:10px auto;padding: 5px;background: #fff;">
<div class="order-steps">
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li class="active"><span class="circle"></span><span class="line"></span><span
                    class="title">
ورود به کلیک سایت
                                    </span></li>
            <li class="active"><span class="circle"></span><span class="line"></span><span class="title">
اطلاعات ارسال سفارش
            </span></li>
            <li class="active"><span class="circle"></span><span class="line"></span><span class="title">
بازبینی سفارش
            </span></li>
            <li class="active"><span class="circle"></span><span class="line"></span><span class="title">
اطلاعات پرداخت
            </span></li>


        </ul>
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <?php
    $orderInfo = $data['orderInfo'];

    $basket = unserialize($orderInfo['basket']);
    $time_sabt=$orderInfo['time_sabt'];
    $gozashte=time()-$time_sabt;
    $mohlat=mohlatPay*3600;

    ?>

    <style>
        #products, #addressinfo {
            width: 100%;
        }

        table tr:first-child td {
            background: #b1e09c;
        }

        table td {
            padding: 4px;
            font-size: 10.5pt;
            border-bottom: 1px solid #eee;
            border-left: 1px solid #eee;
        }

        table tr td:first-child {
            border-right: 1px solid #eee;
        }

        table tr:nth-child(even) td {
            background: #f2f4f2;
        }
        .error {
            border: 1px solid red;
            text-align: center;
            font-size: 12pt;
            color: red;
            font-family: yekan;
            padding: 8px;
        }
    </style>


    <?php
    if($gozashte>$mohlat){

    ?>

    <p class="error">

        این سفارش منقضی شده است.حداکثر مهلت پرداخت،برابر
        <?= mohlatPay ?>
        ساعت می باشد

    </p>

    <?php } ?>

    <table id="products" cellpadding="0" cellspacing="0">

        <tr>
            <td>
                نام محصول
            </td>

            <td>
                رنگ
            </td>
            <td>
                گارانتی
            </td>

            <td>
                تعداد
            </td>

            <td>

                قیمت
            </td>
            <td>
                تخفیف
            </td>

        </tr>

        <?php
        foreach ($basket as $row) {

            ?>
            <tr>


                <td>
                    <?= $row['title'] ?>
                </td>
                <td>
                    <?= $row['colorTitle'] ?>
                </td>
                <td>
                    <?= $row['garanteeTitle'] ?>
                </td>
                <td>
                    <?= $row['tedad'] ?>
                </td>
                <td>
                    <?= $row['price']*$row['tedad'] ?>
                    تومان
                </td>
                <td>
                    <?= (($row['discount']*$row['price'])/100)*$row['tedad']   ?>
                    تومان
                </td>


            </tr>

        <?php } ?>


    </table>


    <style>
        .row2{
            background: #d9f4ec;
            padding: 15px;
            font-size: 11pt;
            margin-top: 15px;
            margin-bottom: 15px;
            width: 97%;
        }
    </style>


    <div class="row2">

        <p>
        وضعیت پرداخت:

        <?php

        if($orderInfo['pay']==1){
            echo 'پرداخت شده';
        }else{
            echo 'در انتظار پرداخت';
        }

        ?>
        </p>
        <p>
            نوع ارسال:

            <?php

            if($orderInfo['post_type']==1){
                echo 'پیشتاز';
            }else if($orderInfo['post_type']==2){
                echo 'سفارشی';
            }

            ?>

        </p>
    <p>
شماره خرید:

            <?php

            echo $orderInfo['beforepay'];
            ?>

        </p>

        <?php



        if($orderInfo['pay']==0 and ($gozashte<=$mohlat) ) {
            ?>
            <p>


                <a class="btn_green" href="checkout/payonline/<?= $orderInfo['id'] ?>">
                    پرداخت آنلاین

                </a>
                <a class="btn_green" href="checkout/creditcard/<?= $orderInfo['id'] ?>">
                    پردخت با کارت
                </a>

            </p>
            <?php
        }
        ?>


    </div>


    <table id="addressinfo" cellpadding="0" cellspacing="0">

        <tr>
            <td>
            گیرنده
            </td>
            <td>
                آدرس
            </td>
            <td>
                شهر
            </td>
            <td>
                کد پستی
            </td>
            <td>
                موبایل
            </td>
            <td>
                تلفن ثابت
            </td>

        </tr>

        <tr>
            <td>
                <?= $orderInfo['family']; ?>
            </td>
            <td>
                <?= $orderInfo['address']; ?>
            </td>
            <td>
                <?= $orderInfo['city']; ?>
            </td>
            <td>
                <?= $orderInfo['code_posti']; ?>
            </td>
            <td>
                <?= $orderInfo['mobile']; ?>
            </td>
            <td>
                <?= $orderInfo['tel']; ?>
            </td>
        </tr>

    </table>


</div>










