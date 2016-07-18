<?php get_template_part('head'); ?>
<body>

<div class="container-fluid">

    <div class="row">
        <?php get_template_part('header'); ?>
    </div>


    <div class="row">
        <div class="col-lg-12 line_blue">
            <?php the_title(); ?>
        </div>
    </div>

    <div class="row">

        <div class="container">

            <div class="col-lg-10 col-lg-offset-1">

                <div class="col-lg-6">

                    <div class="col-lg-12" style="margin-bottom:20px;">

                    <strong><i class="fa fa-map-marker" aria-hidden="true"></i> Адрес:</strong> Харьков, пр. Гагарина, 17 <br/>
                    <strong><i class="fa fa-phone" aria-hidden="true"></i> Телефоны:</strong> (057) 78-00-551, 094-976-35-51<br/>
                    <strong><i class="fa fa-envelope-o" aria-hidden="true"></i> Email:</strong> tour@koleso-f.com.ua<br/>
                    <strong><i class="fa fa-skype" aria-hidden="true"></i> Skype:</strong> Татьяна SHS

                    </div>

                    <div class="col-lg-12">


                        <div class="col-lg-6" style="padding-left:0px">
                            <input type="text" placeholder="Ваш телефон" class="form-control"><br/>
                        </div>
                        <div class="col-lg-6" style="padding-left:0px">
                            <input type="text" placeholder="Ваш e-mail" class="form-control">
                        </div>
                        <div class="col-lg-12" style="padding-left:0px">
                            <textarea class="form-control" style="margin-top:20px; margin-bottom:20px;" placeholder="Сообщение" ></textarea>
                        </div>
                        <div class="col-lg-12" style="padding-left:0px">
                            <a class="btn btn-success">Отправить</a><br/><br/>
                        </div>
                    </div>


                </div>

                <div class="col-lg-6">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Kg5ut9jSeSJQSJT-cglgFzuOlSeycclj&width=auto&height=400&lang=ru_UA&sourceType=constructor&scroll=true"></script>

                </div>





            </div>

        </div>

    </div>



    <div class="row">
        <div class="footer">
            All right reserved (c) 2016
        </div>
    </div>
</div>








<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/wp-content/themes/koleso-f/js/jquery.js"></script>
<script src="/wp-content/themes/koleso-f/js/bootstrap.js"></script>

<?php wp_footer(); ?>
</body>
</html>