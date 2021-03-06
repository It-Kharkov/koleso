<?php
global $more;
while( have_posts() ) : the_post();
$more = 1; // отображаем полностью всё содержимое поста
?>
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
                the_content(); // выводим контент
                endwhile;
                ?>

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