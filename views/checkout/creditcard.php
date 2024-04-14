<?php

$orderInfo=$data['orderInfo'];

?>

<div id="main" style="width: 1200px;margin:10px auto;background: #fff;padding: 10px;">

    <form action="checkout/creditcard/<?= $orderInfo['id'] ?>" method="post">

        <div class="row2">
            <h3>
                اطلاعات واریز کارت به کارت
            </h3>
        </div>

        <div class="row2">

        <span class="title w120">
            تاریخ واریز:
        </span>

            <span class="title">
روز:
        </span>
            <select name="day">
                <?php
                for ($i = 1; $i < 32; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                <?php } ?>
            </select>
            <span class="title">
ماه:
        </span>
            <select name="month">
                <?php
                for ($i = 1; $i < 13; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                <?php } ?>
            </select>
            <span class="title">
سال:
        </span>
            <select name="year">

                <option value="1400">
                    1400
                </option>
                <option value="1399">
                    1399
                </option>

            </select>

        </div>

        <div class="row2">

        <span class="title w120">
شماره کارت:
        </span>

            <input name="creditcard" type="text">

        </div>


        <div class="row2">

        <span class="title w120">
نام بانک صادرکننده:
        </span>

            <input name="bank" type="text">

        </div>


        <div class="row2">

        <span class="title w120">
            زمان واریز:
        </span>

            <span class="title">
ساعت:
          </span>
            <select name="hour">
                <?php
                for ($i = 0; $i < 24; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?php
                        if ($i == 0) {
                            echo '00';
                        } else {
                            echo $i;
                        }

                        ?>
                    </option>
                <?php } ?>
            </select>
            <span class="title">
دقیقه:
        </span>
            <select name="minute">
                <?php
                for ($i = 1; $i < 60; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                <?php } ?>
            </select>

        </div>

        <div class="row2">
            <a class="btn_green" onclick="submitForm()">
                ثبت اطلاعات
            </a>
        </div>

    </form>

    <script>
        function submitForm()
        {
            $('form').submit()
        }
    </script>

</div>














