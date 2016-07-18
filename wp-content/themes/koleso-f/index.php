<?php get_template_part('head'); ?>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php get_template_part('header'); ?>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12" style="padding:0px;">

                <?php $posts = get_pages("child_of=993&sort_column=menu_order&sort_order=ASC"); ?>
                <?php if ($posts) : ?>
                    <?php  $i=0;  foreach ($posts as $post) : setup_postdata ($post); ?>

                        <?php $i++;  $num="3"; if($i==1){$num="6"; $style="style='bottom: 0px;'"; } else { $style=null; }  ?>

                        <div class="col-lg-<?=$num;?> col-md-<?=$num;?> hot_tour_div">
                            <?php  $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(),'full', true); ?>
                            <a href="<?php the_permalink(); ?>">
                                <img class="hot_tour_img" src="<?php echo $image_attributes[0] ?>">
                            </a>
                            <div class="hot_tour_text" <?php echo $style; ?>>
                                <?php  echo $post->post_title;  ?>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
                <?php endif; ?>
            </div>

            <div class="call-hunter" onClick="$('#call-hunter').modal();">
                <img src="/wp-content/themes/koleso-f/img/call-hunter.png">
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 line_blue" id="tour"></div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="padding-top: 9px;">
                <div id="tour_search_module"></div><script src="http://module.ittour.com.ua/tour_search.jsx?id=522150D17250G04M06116&ver=1&type=2974"></script>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12">
                <?php $posts = get_posts ("category=95&orderby=date&numberposts=3"); ?>
                <?php if ($posts) : ?>
                    <?php foreach ($posts as $post) : setup_postdata ($post); ?>

                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="news_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                            <div class="news_tools"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $post->post_date; ?></div>
                            <p><?php the_content(); ?></p>
                        </div>

                    <?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding-top: 9px">
                <ul class="list-group">
                    <?php $posts = get_posts ("category=95&orderby=date&offset=3&numberposts=7"); ?>
                    <?php if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata ($post); ?>

                            <li class="list-group-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br/><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $post->post_date; ?></li>

                        <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>
                    <?php endif; ?>
                </ul>


            </div>
        </div>

        <div class="row" style="clear: both;">
            <div class="footer">
                All right reserved (c) 2016
            </div>
        </div>
    </div>



    <div id="call-hunter" class="modal fade in" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Мы перезвоним вам в ближайшее время</h4>
                </div>
                <div class="modal-body">
                    <p><input type="text" id="call_name" class="form-control" placeholder="Ваше имя" /></p>
                    <p><input type="text" id="call_phone" class="form-control" placeholder="Ваш номер телефона" /></p>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" onclick="send();" class="btn btn-primary">Отправить</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div>




<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/wp-content/themes/koleso-f/js/jquery.js"></script>
<script src="/wp-content/themes/koleso-f/js/bootstrap.js"></script>
<script>
    function send(){

        var name = $("#call_name").val();
        var phone = $("#call_phone").val();

        $.ajax({
            url: '/wp-content/themes/koleso-f/mail.php',
            type: "POST",
            data: {phone: phone,name: name},
            dataType: 'json'
        });

        $("#call-hunter").modal('hide');

    }


    $("#tour_search_module").css("margin-left","auto");
    $("#tour_search_module").css("margin-right","auto");
    $("#tour_search_module").css("display","table");

    $(".btn-search input").css("cssText","background-color: #2e98d6 !important");
    $(".btn-search input").css("cssText","color: white !important");

</script>
<div class="row" style="margin-right:0px;">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top_info">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

            <span class="top_info_social">
                <a href="https://www.facebook.com/iskolesi"><span id="fb" class="social"></span></a>
                <a href="https://vk.com/club16117273"><span id="vk" class="social"></span></a>
                <a href="https://www.instagram.com/kolesotur"><span id="in" class="social"></span></a>
            </span>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >


                <div class="top_info_mail">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i> tour@koleso-f.com.ua
                </div>


                <div class="top_info_mail">
                    <i class="fa fa-phone" aria-hidden="true"></i> (057) 78-00-551
                </div>




        </div>

    </div>

</div>
<?php wp_footer(); ?>
</body>
</html>
