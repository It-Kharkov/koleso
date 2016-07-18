<?php get_template_part('head'); ?>
<body>

<div class="container-fluid">

    <div class="row">
        <?php get_template_part('header'); ?>
    </div>



        <div class="row">
            <div class="col-lg-12 line_blue" style="margin-bottom:0px;">
                <?php the_title(); ?>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-4 hot_tour_div" id="service_1">
                <img class="hot_tour_img" src="/wp-content/uploads/2016/06/авиабилеты.jpg">
                <div class="hot_tour_text">
                     Авиабилеты <br/>
                     <span id="span_service_1" style="display:none;">
                         В нашем агентстве Вы можете приобрести авиа и ж/д билеты в любом направлении по выгодным тарифам.
                     </span>
                </div>
            </div>
            <div class="col-lg-4 hot_tour_div" id="service_2">
                <img class="hot_tour_img" src="/wp-content/uploads/2016/06/инд-туры.jpg">
                <div class="hot_tour_text">
                    Индивидуальные туры
                </div>
            </div>
            <div class="col-lg-4 hot_tour_div" id="service_3">
                <img class="hot_tour_img" src="/wp-content/uploads/2016/06/визовая-поддержка.jpg">
                <div class="hot_tour_text">
                    Визовая поддержка
                </div>
            </div>
            <div class="col-lg-4 hot_tour_div" id="service_4">
                <img class="hot_tour_img" src="/wp-content/uploads/2016/06/money-1439125_1280.jpg">
                <div class="hot_tour_text">
                    Страхование <br/>
                    <span id="span_service_4" style="display:none;">
                         Оказываем услуги по медицинскому страхованию для выезда за рубеж и участия в спортивных соревнованиях, оформляем "Грин карты" для поездок на своем авто.
                     </span>
                </div>
            </div>
            <div class="col-lg-4 hot_tour_div" id="service_5">
                <img class="hot_tour_img" src="/wp-content/uploads/2016/06/тревел-сим.jpg">
                <div class="hot_tour_text">
                    Пополнение Travel SIM <br/>
                    <span id="span_service_5" style="display:none;">
                          Чтобы всегда оставаться на связи и не переплачивать за роуминг  в нашем агентстве вы можете купить и пополнить туристические SIM карты: ГудЛайн, Simfortour, Altitel, Nova SIM, TezGSM.
                     </span>
                </div>
            </div>
            <div class="col-lg-4 hot_tour_div" id="service_6">
                <img class="hot_tour_img" src="/wp-content/uploads/2016/06/доставка-документов.jpg">
                <div class="hot_tour_text">
                    Доставка документов
                </div>
            </div>

        </div>


    <div class="row">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="col-lg-12">
                    <center><h3>Связаться с менеджером</h3></center>
                </div>
                <div class="col-lg-6">
                    <input type="text" placeholder="Ваше имя" id="call_name" class="form-control"><br/>
                </div>
                <div class="col-lg-6">
                    <input type="text" placeholder="Ваш e-mail" id="call_mail" class="form-control">
                </div>
                <div class="col-lg-12">
                    <textarea class="form-control" style="margin-top:20px; margin-bottom:20px;" placeholder="Сообщение" id="call_message"></textarea>
                </div>
                <div class="col-lg-12" id="send_b">
                    <a class="btn btn-success">Отправить</a>
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
<script>

    $('#service_1').mouseover(function(){

        $("#span_service_1").show("slow");

    });

    $('#service_1').mouseleave(function(){
        $("#span_service_1").hide("slow");
    });

    $('#service_4').mouseover(function(){
        $("#span_service_4").show("slow");
    });

    $('#service_4').mouseleave(function(){
        $("#span_service_4").hide("slow");
    });

    $('#service_5').mouseover(function(){
        $("#span_service_5").show("slow");
    });

    $('#service_5').mouseleave(function(){
        $("#span_service_5").hide("slow");
    });




    function send(){

        var name = $("#call_name").val();
        var mail = $("#call_mail").val();
        var message = $("#call_message").val();

        $.ajax({
            url: '/wp-content/themes/koleso-f/mail.php',
            type: "POST",
            data: {name: name,mail: mail,message:message},
            dataType: 'json'
        });

        $("#info").html("Ваше сообщение отправлено");

    }
</script>

<?php wp_footer(); ?>
</body>
</html>