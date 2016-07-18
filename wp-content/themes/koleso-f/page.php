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

                <div class="col-lg-8 col-lg-offset-2">
                    <?php
                    global $more;
                    while( have_posts() ) : the_post();
                        $more = 1; // отображаем полностью всё содержимое поста
                        ?>


                    <?php
                    the_content(); // выводим контент
                    endwhile;
                    ?>

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
                    <input type="text" placeholder="Ваш телефон" class="form-control"><br/>
                </div>
                <div class="col-lg-6">
                    <input type="text" placeholder="Ваш e-mail" class="form-control">
                </div>
                <div class="col-lg-12">
                    <textarea class="form-control" style="margin-top:20px; margin-bottom:20px;" placeholder="Сообщение" ></textarea>
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

<?php wp_footer(); ?>
</body>
</html>