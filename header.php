<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= URL ?>">
    <meta charset="UTF-8">
    <title>
        فروشگاه اینترنتی دیجی کالا
    </title>
    <link rel="stylesheet" href="content/style.css">
    <script src="public/js/jquery-3.0.0.min.js"></script>
    <script src="public/js/jquery.flipTimer.js"></script>
    <link href="public/css/flipTimer.css" rel="stylesheet">

</head>
<body style="margin: 0;background: #<?= body_color ?>;">
<header style="background-color: #E9E4ED;">

    <div id="header" style="width: 1200px;height: 100px;margin: 0 auto;padding-top: 15px;">
    <div id="header_right" style="float: right;width: 720px;">
            <a href="index/index">
                <img class="logo" src="public/images/mehrshop.png">
            </a>
            <div id="search_top"style="width: 480px;height:40px;float: left;position:relative; margin-top:40px;">
                    <input class="" type="text"
                           style="width: 480px;height:40px;border:1px solid #eee;padding-right: 10px;color: #686664;"
                           placeholder="محصول،دسته یا برند مورد نظر خود را سرچ کنید..."/>

                    <span
                        style="width: 42px;height:40px;background:url(public/images/search.png) no-repeat center #61398F;display: block;position: absolute;left:-12px;top:3px"></span>

                </div>
        </div>
        <div id="header_left" style="float: left;height: 100px;">
            <div id="header_left_top" style="height: 40px;">

                <?php
                Model::sessionInit();
                $userId = Model::sessionGet('userId');
                $model=new Model;
                $basket = $model->getBasket();
                $all = 0;
                foreach ($basket[0] as $row) {
                    $all = $all + $row['tedad'];
                }

                if ($userId == false) {

                    ?>

                    <span
                        style="width: 20px;height: 20px;background: url(public/images/lock.png);display: block;float: left;"></span>
                    <a class=" fontsm" href="<?= URL ?>login" style="float: left;margin-right: 25px;">
                    وارد شوید
                    </a>
                    <span
                        style="width: 20px;height: 20px;background: url(public/images/signup.png);display: block;float: left;"></span>
                    <a class=" fontsm" href="<?= URL ?>register" style="float: left;">
                        ثبت نام کنید
                    </a>

                <?php } else { ?>

                    <a class=" fontsm" href="<?= URL ?>panel/logout" style="float: left;margin-right: 10px;">

خروج
                    </a>
                    <span
                        style="width: 20px;height: 20px;background: url(public/images/signup.png);display: block;float: left;margin-left: 12.5px;"></span>
                    <a class=" fontsm" href="<?= URL ?>panel" style="float: left;">

                        مشاهده پنل کاربری
                    </a>
                    <span
                        style="width: 20px;height: 20px;background: url(public/images/lock.png);display: block;float: left;margin-left: 12.5px;"></span>
                    <a class=" fontsm"  style="float: left;color:#61398F;">
                        خوش آمدید!
                    </a>






                <?php } ?>


            </div>
            <div id="header_left_bottom" style="height: 50px;">
                <div id="basket_top" style="width: 190px;height: 40px;float: left;">

                    <div id="basket_top_right"
                         style="width: 54px;height: 100%;background: #8B5FBF url(public/images/basket.png) no-repeat center;float: right;"></div>

                    <a href="showcart" id="basket_top_left"
                         style="width: 96px;height: 100%;background: #61398F;float: right;padding: 0 20px;line-height: 35px;">

                        <span class=" fontsm" style="color: #fff;">سبد خرید</span>

                        <span class="fontsm"
                              style="width: 25px;height: 25px;background: #eee;text-align: center;display: block;float: left;margin-top: 7px;border-radius: 100%;line-height: 25px;" id="basketTotal"><?= $all ?></span>

                    </a>


                </div>
            </div>
        </div>

    </div>
</header>
<nav style="background: #<?= menu_color ?>;" id="menu_top_nav">

    <div id="menu_top" style="width: 1200px;height: 40px;margin: auto;">

        <ul><!--level1-->

            <?php
            $model = new Model;
            $Menu = $model->getMenu();

            foreach ($Menu as $level1) {

                ?>

                <li data-time="<?= $level1['id'] ?>">
                    <a class="">

                        <?= $level1['title'] ?>
                        <span class="menu_down_icon"></span>
                    </a>

                    <ul> <!--level2-->

                        <?php
                        if(isset($level1['children'])){
                        $children1 = $level1['children'];

                        foreach ($children1 as $level2) {

                            ?>

                            <li data-time="<?= $level2['id'] ?>">
                                <a class=" fontsm">
                                    <?= $level2['title'] ?>
                                </a>

                                <div class="submenu3" style="width: 1200px;height: 300px;background: #fff;border-top: 1px solid #eee;position: absolute;right: 0;">


                                    <ul style="padding-right: 10px;" class="top_menu3_col top_menu3_col_ul">
                                        <?php
                                        if(isset($level2['children'])){
                                        $children2 = $level2['children'];
                                        $i = 1;
                                        foreach ($children2 as $level3) {

                                        ?>
                                        <?php
                                        if ($i % 10 == 0) {
                                        ?>

                                    </ul>
                                    <ul style="padding-right: 10px;" class="top_menu3_col top_menu3_col_ul">

                                        <?php } ?>

                                        <li class="level3  fontsm"><?= $level3['title']; ?></li>

                                        <?php
                                        $i++;

                                        if (isset($level3['children'])){
                                        $children3 = $level3['children'];
                                        foreach ($children3 as $level4) {
                                        ?>
                                        <?php
                                        if ($i % 10 == 0) {
                                        ?>

                                    </ul>
                                    <ul style="padding-right: 10px;" class="top_menu3_col top_menu3_col_ul">

                                        <?php } ?>

                                        <li class=" fontsm"><?= $level4['title'] ?></li>
                                        <?php
                                        $i++;
                                        }//level4

                                        ?>

                                        <?php

                                        }//if level3


                                        }//foreach

                                        }
                                        ?>

                                    </ul>
                                </div>
                            </li>

                        <?php }} ?>

                    </ul><!--level2-->

                </li>

            <?php } ?>

        </ul><!--level1-->

    </div>

</nav>
