<div id="main" style="width: 1200px;margin:10px auto;height: 500px;background: #fff;box-shadow: 0 1px 3px #eee;">

    <div class="header">

        <i></i>
        <h2>
            ورود به سایت
        </h2>
        <div class="right">

            <form class="signin_inputs signup_inputs" action="login/checkuser" method="post">

                <div class="email">
                    <label>

                        پست الکترونیک
                    </label>
                    <input type="text" name="email">
                </div>
                <div class="pass">
                    <label>

                        رمز عبور
                    </label>
                    <input type="password" name="password">
                </div>


                <div>

                    <span style="cursor: pointer;" class="btn" onclick="submitForm();">
                        ورود
                    </span>
                </div>

            </form>

        </div>

        <script>
            function submitForm() {
                $('form').submit();
            }
        </script>
        <div class="left">

            <ul>
                <li>
                    <i style="background-position: -980px -330px;"></i>
                    سریع تر و ساده تر خرید کنید
                </li>
                <li>
                    <i style="background-position: -980px -286px;"></i>
                    به سادگی سوابق خرید و فعالیت های خود را مدیریت کنید
                </li>
                <li>
                    <i style="background-position: -980px -243px;"></i>
                    لیست علاقمندی های خود را بسازید و تغییرات آنها را دنبال کنید
                </li>
            </ul>

        </div>

    </div>


</div>