<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LOGIC</title>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <img src="<?php  echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                </div>
            </div>


            <div class="mainmenu_area">


                <div class="col-md-8">
                    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_id' => 'nav')); ?>
                </div>

            </div>



        </div>
    </div>
</div>


<?php get_template_part('template/slider');?>
<?php get_template_part('template/about-logic');?>
<?php get_template_part('template/featured-work');?>
<?php get_template_part('template/video');?>
<?php get_template_part('template/service');?>
<?php get_template_part('template/accordian');?>
<?php get_template_part('template/team');?>
<?php get_template_part('template/latest-project');?>
<?php get_template_part('template/contact');?>


<div class="footer-area">



    <div class="container">
        <div class="row">

            <div class="col-md-3">

                <img src="<?php  echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
            </div>
            <div class="footer-menu">
                <div class="col-md-3">
                    <h4>SITEMAP</h4>
                    <ul id="footernav">
                        <li><a href="">Services</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Our Team</a></li>
                        <li><a href="">Portfolio</a></li>

                    </ul>

                    <ul id="footernav1">

                        <li><a href="">Blog</a></li>
                        <li><a href="">Testimonial</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-menu">
                <div class="col-md-3">
                    <h4>ACHIVES</h4>
                    <ul id="footernav">
                        <li><a href="">January 2015</a></li>
                        <li><a href="">February 2015</a></li>
                        <li><a href="">March 2015</a></li>
                        <li><a href="">April 2015</a></li>
                    </ul>

                    <ul id="footernav1">
                        <li><a href="">May 2015</a></li>
                        <li><a href="">May 2015</a></li>
                        <li><a href="">May 2015</a></li>
                    </ul>




                </div>
            </div>
            <div class="col-md-3">
                <h4>NEWSLETTER</h4>

                <p>Sign up for our mailing list to get latest
                    updates and offers.</p>

                <input type="email" placeholder="Email address" class="form-control">


            </div>


        </div>


    </div>
</div>

<div class="blackfooter-area">



    <div class="container">
        <div class="row">

            <div class="copy-text">
                <div class="col-md-6">
                    <p class="copy-right-text">Copyright © 2015 theme_express</p>
                </div>
            </div>
            <div class="social-icon">
                <div class="col-md-6">
                    <p class="social-icons-footer"><a href=""><i class="fa fa-facebook"></i></a><a href=""><i class="fa fa-twitter"></i></a><a href=""><i class="fa fa-dribbble"></i></a><a href=""><i class="fa fa-google-plus"></i></a><a href=""><i class="fa fa-youtube"></i></a><a href=""><i class="fa fa-skype"></i></a></p>

                </div>
            </div>

        </div>


    </div>
</div>


<?php wp_footer(); ?>
</body>
</html>



