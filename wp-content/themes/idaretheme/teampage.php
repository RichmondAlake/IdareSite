<?php
/**
 * Template Name: Team Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>
 
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content();?>

<div class = "container team animated fadeInUp" style = "margin-bottom:100px;   -webkit-animation-duration: 3s;
  -webkit-animation-delay: 0.3s;
  -webkit-animation-iteration-count: 1;">
    
    <div style = "margin-bottom:80px">
    <center><h1>Meet the Team</h1></center>
    <hr style = "height:2px; color:#333; background-color:#333 "/>
    <p> Team text Team text Team text Team text Team text Team text Team text Team text Team text Team text
    Team text Team text Team text Team text Team textTeam text Team textTeam textTeam textTeam text Team text 
    Team textTeam text Team text Team text Team text Team textTeam text Team text Team textTeam text Team text
    </p>
    </div>
    
     <div class = "row">
        <!-- About -->
        <a href = "https://idare-richmondrich.c9.io/about/" style = "text-decoration:none !important;">
        <div class = "col-md-4 animated slideInLeft" style = "border-style:solid; border-width: 5px; height:50%; border-color: #fff;" id = "#divtrans">
             <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/avatar.png" style = "max-height:100%; width:450px; margin-left:-15px" style = "position:relative;"/>
             <center><h4 class = "textoverlayteam" style = ><span>Person Name</span></h4></center>
             
             <!-- Add social media icons -->
             <center>
             <ul class = "iconslist animated bounceIn">
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/facebook48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/twitter48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/youtube48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/instagram48.png">
            </ul>
        </div>
       
         <!-- Store -->
        <a href = "https://idare-richmondrich.c9.io/store/" style = "text-decoration:none !important;">
        <div class = "col-md-4 animated slideInLeft" style = "border-style:solid; border-width: 5px; height:50%; border-color: #fff;" id = "#divtrans">
            <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/avatar.png" style = "max-height:100%; width:450px; margin-left:-15px"/>
            <center><h4 class = "textoverlayteam"><span>Person Name</span></h4></center>
             
             <!-- Add social media icons -->
             <center>
             <ul class = "iconslist animated bounceIn" >
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/facebook48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/twitter48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/youtube48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/instagram48.png">
            </ul>
        </div>
        </a>
         <!-- Team -->
        <a href = "https://idare-richmondrich.c9.io/team/" style = "text-decoration:none !important;">
        <div class = "col-md-4 animated slideInLeft" style = "border-style:solid; border-width: 5px; height:50%; border-color: #fff;" id = "#divtrans">
            <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/avatar.png" style = "max-height:100%; width:400px; margin-left:-15px"/>
            <center><h4 class = "textoverlayteam"><span>Person Name</span></h4></center>
             
             <!-- Add social media icons -->
             <center>
             <ul class = "iconslist animated bounceIn">
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/facebook48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/twitter48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/youtube48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/instagram48.png">
            </ul>
        </div>
        </a>
    </div>
    
    <hr/>
    
    <div class = "row">
        <!-- About -->
        <a href = "https://idare-richmondrich.c9.io/about/" style = "text-decoration:none !important;">
        <div class = "col-md-4 animated slideInRight" style = "border-style:solid; border-width: 5px; height:50%; border-color: #fff" id = "#divtrans">
             <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/avatar.png" style = "max-height:100%; width:450px; margin-left:-15px" style = "position:relative;"/>
             <center><h4 class = "textoverlayteam"><span>Person Name</span></h4></center>
             
             <!-- Add social media icons -->
             <center>
             <ul class = "iconslist animated bounceIn">
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/facebook48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/twitter48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/youtube48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/instagram48.png">
            </ul>
        </a>
             
        </div>
       
         <!-- Store -->
        <a href = "https://idare-richmondrich.c9.io/store/" style = "text-decoration:none !important;">
        <div class = "col-md-4 animated slideInRight" style = "border-style:solid; border-width: 5px; height:50%; border-color: #fff" id = "#divtrans">
            <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/avatar.png" style = "max-height:100%; width:450px; margin-left:-15px"/>
            <center><h4 class = "textoverlayteam"><span>Person Name</span></h4></center>
             
             <!-- Add social media icons -->
             <center>
             <ul class = "iconslist animated bounceIn">
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/facebook48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/twitter48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/youtube48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/instagram48.png">
            </ul>
        </div>
        </a>
         <!-- Team -->
        <a href = "https://idare-richmondrich.c9.io/team/" style = "text-decoration:none !important;">
        <div class = "col-md-4 animated slideInRight" style = "border-style:solid; border-width: 5px; height:50%; border-color: #fff" id = "#divtrans">
            <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/avatar.png" style = "max-height:100%; width:400px; margin-left:-15px"/>
           <center><h4 class = "textoverlayteam"><span>Person Name</span></h4></center>
             
             <!-- Add social media icons -->
             <center>
             <ul class = "iconslist animated bounceIn">
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/facebook48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/twitter48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/youtube48.png">
                    </a>
                </li>
                <li>
                    <a href = "https//:www.facebook.com/idareupskate"><img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/smallicons/instagram48.png">
            </ul>
        </div>
        </a>
    </div>
</div>



<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>