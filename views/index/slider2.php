
<div id="slider2">

    <div class="flipTimer">

        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>

    <div class="slider2_finished yekan">

        تمام شد!
    </div>

    <div id="slider2_content">

        <?php

        $slider2 = $data[1];
        $date_end = $data[2];
        foreach ($slider2 as $row) {

            ?>

            <a class="item" href="<?= URL ?>product/index/<?= $row['id']; ?>">
                <div class="slider2_content_right">

                    <p class="title">
                        پیشنهاد شگفت انگیز
                    </p>
                    <div class="price_info">

                        <div class="price_info_old yekan">
                            <?= $row['price'] ?>
                        </div>
                        <div class="price_info_new yekan">
                            <?= $row['price_total']; ?>
                           تومان
                        </div>

                        <p class="yekan fontsm" style="float: right;width: 100%;margin: 2px;">
                            توان: 2 و نیم وات
                        </p>
                        <p class="yekan fontsm" style="float: right;width: 100%;margin: 2px;">
                            مقاوم در برابر ضربه
                        </p>

                    </div>

                </div>
                <div class="slider2_content_left">

                    <p class="yekan" style="font-size: 15pt;text-align: center;">
                        <?= $row['title']; ?>
                    </p>

                    <img src="public/images/products/<?= $row['id']; ?>/product_220.jpg">

                </div>
            </a>


        <?php } ?>


    </div>
    <div id="slider2_navigator">

        <ul>
            <?php

            $slider2 = $data[1];
            foreach ($slider2 as $row) {

                ?>
                <li>
                    <a>
                        <?= $row['title']; ?>
                    </a>
                </li>
            <?php } ?>

        </ul>

    </div>


</div>


<script>


    $('.flipTimer').flipTimer({

        direction: 'down',
        date: '<?php echo $date_end; ?>',
        callback: function () {
            $('.slider2_content_right').css('opacity', .4);
            $('.slider2_content_left').css('opacity', .4);
            $(".slider2_finished").fadeIn(200);
        }
    });


    var sliderTag2 = $('#slider2');
    var sliderItems2 = sliderTag2.find('.item');
    var numItems2 = sliderItems2.length;
    var nextSlide2 = 1;
    var timeOut2 = 5000;
    var sliderNavigators2 = sliderTag2.find("#slider2_navigator ul li");

    function slider2() {

        if (nextSlide2 > numItems2) {
            nextSlide2 = 1;
        }

        if (nextSlide2 < 1) {
            nextSlide2 = numItems2;
        }

        sliderItems2.fadeOut(0);
        sliderItems2.eq(nextSlide2 - 1).fadeIn(100);
        sliderNavigators2.removeClass('active');
        sliderNavigators2.eq(nextSlide2 - 1).addClass('active');
        nextSlide2++;

    }

    slider2();
    var sliderInterval2 = setInterval(slider2, timeOut);

    sliderTag2.mouseleave(function () {
        clearInterval(sliderInterval2);
        sliderInterval2 = setInterval(slider2, timeOut2);
    });


    function goToSlide2(index) {
        nextSlide2 = index;
        slider2();
    }

    $('#slider2 #slider2_navigator li').click(function () {

        clearInterval(sliderInterval2);
        var index = $(this).index();
        goToSlide2(index + 1);
    });

    /*slider2*/

</script>