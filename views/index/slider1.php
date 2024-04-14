<div id="slider" style="position: relative;">

            <span id="prev">

            </span>

             <span id="next">

            </span>

    <div id="slider_img">

        <?php

        $slider1=$data[0];
        foreach ($slider1 as $slider) {

            ?>
            <a href="<?= $slider['link']; ?>" class="item">
                <img src="<?= $slider['img']; ?>">

            </a>


            <?php
        }
        ?>

    </div>

    <div id="slider_navigator">
        <ul>

            <?php

            foreach ($slider1 as $slider) {

                ?>

                <li>

                    <a class="yekan fontsm">

                        <?= $slider['title'] ?>
                    </a>

                </li>


                <?php
            }
            ?>


        </ul>

    </div>

</div>


<script>

    $('.next').click(function () {
        sliderscroll('left');
    });

    $('.prev').click(function () {
        sliderscroll('right');
    });


    var sliderTag = $('#slider');
    var sliderItems = sliderTag.find('.item');
    var numItems = sliderItems.length;
    var nextSlide = 1;
    var timeOut = 5000;
    var sliderNavigators = sliderTag.find("#slider_navigator ul li");

    function slider() {

        if (nextSlide > numItems) {
            nextSlide = 1;
        }

        if (nextSlide < 1) {
            nextSlide = numItems;
        }

        sliderItems.fadeOut(0);
        sliderItems.eq(nextSlide - 1).fadeIn(100);
        sliderNavigators.removeClass('active');
        sliderNavigators.eq(nextSlide - 1).addClass('active');
        nextSlide++;

    }

    slider();
    var sliderInterval = setInterval(slider, timeOut);

    sliderTag.mouseleave(function () {
        clearInterval(sliderInterval);
        sliderInterval = setInterval(slider, timeOut);
    });


    function goTonext() {
        slider();
    }

    $('#slider #next').click(function () {
        clearInterval(sliderInterval);
        goTonext();

    });

    function goToprev() {
        nextSlide = nextSlide - 2;
        slider();
    }

    $('#slider #prev').click(function () {
        clearInterval(sliderInterval);
        goToprev();

    });


    function goToSlide(index) {
        nextSlide = index;
        slider();
    }

    $('#slider #slider_navigator li').hover(function () {

        clearInterval(sliderInterval);
        var index = $(this).index();
        goToSlide(index + 1);
    }, function () {


    });

    $('button').click(function () {
        slider();
    });


    /*main_slider*/
</script>