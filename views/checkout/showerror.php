<?php
$Error = $data['Error'];
?>
<div id="main" style="width: 1200px;margin:10px auto;padding: 5px;background: #fff;">

    <p class="error">
        <?php
        echo $Error;
        ?>
    </p>
    <p style="text-align: center;">
        <a class="btn_green" href="checkout/index/<?= $data['orderId'] ?>">
            بازگشت
        </a>
    </p>

</div>




















