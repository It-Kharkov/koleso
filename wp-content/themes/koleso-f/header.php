
<style>
    .social {
        height: 28px;
        width: 29px;
        display: block;
        background-image: url('/wp-content/themes/koleso-f/img/main_tools.png');
        float: left;
        margin-right: 2px;
        opacity: 0.5;
    }

    #fb { background-position: 617px; } #fb:hover { opacity: 1; }
    #vk { background-position: 256px; } #vk:hover { opacity: 1; }
    #in { background-position: 217px; } #in:hover { opacity: 1; }


</style>

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

<div class="col-lg-12" style="padding:0px;">

    <nav class="navbar navbar-inverse" style="border-radius:0px; margin-bottom:0px;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="logo-text" href="/">
                    Koleso-f
                </a>
            </div>




            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



                <?php

                $menu=wp_nav_menu(array(
                    'menu' => 'Main menu', // название меню
                    'container' => '', // контейнер для меню, по умолчанию 'div', в нашем случае ставим 'nav', пустая строка - нет контейнера
                    'container_class' => '', // класс для контейнера
                    'container_id' => '', // id для контейнера
                    'menu_class' => 'nav navbar-nav navbar-right', // класс для меню
                    'menu_id' => ' ', // id для меню
                    'echo'=> 0
                ));

                $menu=str_replace('<ul class="sub-menu">','<ul class="dropdown-menu">',$menu);
              //  $menu=str_replace('<a href="#">Услуги</a>','<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Услуги <span class="caret"></span></a>',$menu);
                $menu=str_replace('<a href="#">Полезно знать</a>','<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Полезно знать <span class="caret"></span></a>',$menu);

                $menu=str_replace('menu-item-has-children','dropdown',$menu);


                echo $menu;

                ?>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>