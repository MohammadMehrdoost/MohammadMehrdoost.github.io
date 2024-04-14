<script src="public/slider/jquery-ui.min.js"></script>
<script src="public/slider/slider.js"></script>
<link href="public/slider/style.css" rel="stylesheet">

<div id="main" style="width: 1200px;margin:10px auto;padding: 5px;background: #fff;">
    <?php
    $productInfo = $data['productInfo'];

    ?>

    <form method="post" action="addcomment/savecomment/<?= $productInfo['id'] ?>">

        <div class="right">
            <img src="public/images/products/<?= $productInfo['id'] ?>/product_350.jpg">
        </div>

        <div class="left">
            <h4>
                امتیاز شما به این محصول
            </h4>

            <?php

            $commentInfo = $data['commentInfo'];
            $comment_result = unserialize($commentInfo['param']);


            $params = $data['params'];
            $number = sizeof($params);
            $right = ceil($number / 2);
            $left = $number - $right;

            $params_right = array_slice($params, 0, $right);
            $params_left = array_slice($params, $right, $left);


            ?>

            <div class="right">

                <?php
                foreach ($params_right as $row) {
                    ?>
                    <div class="row2">
                        <p>
                            <?= $row['title'] ?>
                        </p>
                        <input data-val="<?= $comment_result[$row['id']] ?>" name="param<?= $row['id'] ?>"
                               value="<?= $comment_result[$row['id']] ?>" type="hidden" class="flat-slider">
                    </div>
                <?php } ?>


            </div>

            <div class="left">

                <?php
                foreach ($params_left as $row) {
                    ?>
                    <div class="row2">
                        <p>
                            <?= $row['title'] ?>
                        </p>
                        <input data-val="<?= $comment_result[$row['id']] ?>" name="param<?= $row['id'] ?>"
                               value="<?= $comment_result[$row['id']] ?>" type="hidden" class="flat-slider">
                    </div>
                <?php } ?>

            </div>

        </div>
        <div class="comment">

            <h4>
                دیگران را با نوشتن نقد، بررسی و نظرات خود، برای انتخاب این محصول راهنمایی کنید.
            </h4>

            <div class="row2">
                <input class="commentinput" name="title" value="<?= $commentInfo['title'] ?>" placeholder="عنوان نقد و بررسی">
            </div>
            <div class="row2">
                <input class="commentinput" name="posotive" value="<?= $commentInfo['posotive'] ?>" placeholder="نقاط قوت">
            </div>
            <div class="row2">
                <input class="commentinput" name="negative" value="<?= $commentInfo['negative'] ?>" placeholder="نقاط ضعف">
            </div>

            <div class="row2">
                <textarea name="comment"><?= $commentInfo['matn'] ?></textarea>
            </div>
            <div class="row2">
            <span class="btn_green" onclick="submitForm()">
                ثبت نظر
            </span>
            </div>

        </div>

    </form>

</div>

<script>

    function submitForm() {
        $('form').submit();
    }

    $('.flat-slider').flatslider({
        min: 1,
        max: 5,
        step: 1,
        value: 3,
        range: 'min'
    });
</script>






































