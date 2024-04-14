<?php

$option=Model::getoption();


?>
<footer>

    <div style="background:#<?= menu_color ?> none repeat scroll 0 0;" id="footer_top">
        <div class="main">
            <span>
                 ۷ روز هفته، ۲۴ ساعته پاسخگوی شما هستیم.
            </span>
            <ul>
                <li>
                    <a class="">

                        <?= $option['tel']; ?>
                        <i style="background-position: -397px -420px; "></i>

                    </a>
                </li>
                <li>
                    <a class="">
                        سوالات متداول
                        <i style="background-position: -358px -420px; "></i>

                    </a>
                </li>
                <li>
                    <a class="">
                        <?= $option['email']; ?>
                        <i style="background-position: -321px -420px; "></i>

                    </a>
                </li>
            </ul>

        </div>
    </div>

    <div id="footer_bottom">

        <div class="main">

            <div class="right">

                <ul>
                    <li><a class="title2">راهنمای خرید از مهرشاپ</a></li>
                    <li><a> ثبت سفارش</a></li>
                    <li><a>رویه های ارسال سفارش</a></li>
                    <li><a>شیوه های پرداخت</a></li>


                </ul>

            </div>
            <div class="center">
                <ul>
                    <li><a class="title2">راهنمای خرید مشتریان</a></li>
                    <li><a> ثبت سفارش</a></li>
                    <li><a>رویه های ارسال سفارش</a></li>
                    <li><a>شیوه های پرداخت</a></li>


                </ul>
            </div>
            <div class="left">
                <p class="title2">
                    اولین نفری که مطلع می شود، باشید!
                </p>

                <div class="email">
                    <input type="text">
                    <a href="#" class="btn">
                        تایید ایمیل
                    </a>
                </div>

                <div class="social">

                    <a>
                        <img src="public/images/ios_app_bg.png">
                    </a>
                    <a>
                        <img src="public/images/android_app_bg.png">
                    </a>

                    <span class="social_button" style="background-position:-577px -621px; "></span>
                    <span class="social_button" style="background-position:-453px -621px; "></span>
                    <span class="social_button" style="background-position:-494px -621px; "></span>

                </div>

            </div>

        </div>

    </div>

</footer>


<script>


    var timer = {};

    $('#menu_top li').hover(function () {

        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {

            $(' > ul', tag).fadeIn(0);
            tag.addClass('active-menu');
            $(' > .submenu3', tag).fadeIn(0);

        }, 500);

    }, function () {

        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {

            $(' > ul', tag).fadeOut(0);
            tag.removeClass('active-menu');
            $(' > .submenu3', tag).fadeOut(0);
        }, 600);

    })

</script>


</body>
</html>