<?php
/**
 * Template Name: Home Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>
 
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content();?>

<div id = "pagebody" style = "margin-bottom:100px; margin-top:0px;" >
    <div class = "container-fluid">
     <div class = "row">
        <!-- About -->
        <div class = "homediv animated slideInLeft" style = "background-color:#fff;">
        
        <div class = "col-md-4 col-xs-12" style = "height:50%;" id = "#divtrans" > <!-- style = "border-style:solid; border-width: 5px; height:50%; border-color: #fff " -->
            <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/pedestrians.jpg" style = "max-height:100%; width:450px; margin-left:-15px;"/>
            <a href = "https://idare-richmondrich.c9.io/about/">
                <h4 class = "textoverlay"><span>About</span></h4>
                
            </a>
            
             
        </div>
        </div>
       
         <!-- Store -->
        <div class = "homediv animated slideInRight">
        <a href = "https://idare-richmondrich.c9.io/store/">
        <div class = "col-md-4 col-xs-12" style = "height:50%;";  id = "#divtrans"> <!-- style = "border-style:solid; border-width: 5px; height:50%; border-color: #000" -->
            <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/street.jpg" style = "max-height:100%; margin-left:-15px; width:450px; " /> <!--width:450px;-->
            <a href = "https://idare-richmondrich.c9.io/store/">
                <h4 class = "textoverlay"><span style = "color:#3EA055">Store</span></h4>
            </a>
        </div>
        </div>
        
         <!-- Team -->
        <div class = "homediv animated slideInRight">
        
        <div class = "col-md-4 col-xs-12"  style = "height:50%;" id = "#divtrans"> <!--  style = "border-style:solid; border-width: 5px; height:50%; border-color: #fff" -->
            <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/people.jpg" style = "max-height:100%; width:450px; margin-left:-15px"/>
            <a href = "https://idare-richmondrich.c9.io/team/"> 
                <h4 class = "textoverlay"><span>Team</span></h4>
            </a>
        </div>
        </div>
        
    </div>
    </div>
        
        <div class = "container-fluid">
        <div class = "row">
        <!-- About -->
        <div class = "homediv animated slideInRight">
        
        <div class = "col-md-4  col-xs-12" style = "height:50%;" id = "#divtrans"> <!-- style = "border-style:solid; border-width: 5px; height:50%; border-color: #000" -->
            <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/crowd.jpg" style = "max-height:100%; width:450px; margin-left:-15px" style = "position:relative;"/>
            <a href = "https://idare-richmondrich.c9.io/about/">
                <h4 class = "textoverlay"><span>Events</span></h4>
            </a>
             
        </div>
        </div>
       
         <!-- Store -->
        <div class = "homediv animated slideInLeft">
        
        <div class = "col-md-4 col-xs-12"  style = "height:50%;"  id = "#divtrans"> <!-- style = "border-style:solid; border-width: 5px; height:50%; border-color: #fff" -->
            <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/male.jpg" style = "max-height:100%; width:450px; margin-left:-15px"/>
            <a href = "#lookbookmodal" data-toggle = "modal">
                <h4 class = "textoverlay"><span>Gallery</span></h4>
            </a>
        </div>
        </div>
        
       
            <div class = "modal" id  = "modal-1">
                <div class = "modal-dialog">
                    <div class = "modal-content">
                        <div class = "modal-header">
                            <button class = "button" type = "close" data-dismiss = "modal">&times;</button>
                        </div>
                    </div>
                </div>
            </div>
          
        
         <!-- Team -->
        <div class = "homediv animated slideInRight">
        
        <div class = "col-md-4 col-xs-12" style = "height:50%;"  id = "#divtrans"> <!-- style = "border-style:solid; border-width: 5px; height:50%; border-color: #000" -->
            <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/pedestrians.jpg" style = "max-height:100%; width:450px; margin-left:-15px"/>
            <a href = "https://idare-richmondrich.c9.io/team/">
                <h4 class = "textoverlay"><span>More +</span></h4>
            </a>
        </div>
        </div>
        <!--
        <div>
            <center>
            <p>
                <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/icons/downarrow-icon(s).png">
            </p>
            </center>
        </div>
        -->
        
        
    </div>
    </div>
    
    <!-- Creating Modal for look book -->
    <div class = "modal fade" id = "lookbookmodal" role = "dialog">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-body">
                       <!-- creating image carousel look book-->
                        <div id = "myCarousel" class = "carousel slide">
                            <ol class = "carousel-indicators">
                                <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
                                <li data-target = "#myCarousel" data-slide-to = "1"></li>
                                <li data-target = "#myCarousel" data-slide-to = "2"></li>
                                <li data-target = "#myCarousel" data-slide-to = "3"></li>
                                <li data-target = "#myCarousel" data-slide-to = "4"></li>
                            </ol>
                            
                            <div class = "carousel-inner">
                                <div class = "item active">
                                    <!-- images 1920 by 740 -->
                                    <center>
                                    <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/idarepictures/vblack.jpg" alt = "img" class = "img-responsive">
                                    </center>
                                    <div class = "carousel-caption">
                                        <h3 style = "color:#fff;">Varsity Jacket Black</h3>
                                        <!-- Button should link to appropriate store section -->
                                        <button class = "btn btn-success">Buy</button>
                                    </div>
                                </div>
                                
                                 <div class = "item">
                                    <!-- images 1920 by 740 -->
                                    <center>
                                    <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/idarepictures/vblue.jpg" alt = "img" class = "img-responsive">
                                    </center>
                                    <div class = "carousel-caption">
                                        <h3 style = "color:#fff;">Varsity Jacket Blue</h3>
                                        <button class = "btn btn-success">Buy</button>
                                    </div>
                                </div>
                                
                                 <div class = "item">
                                    <!-- images 1920 by 740 -->
                                    <center>
                                    <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/idarepictures/vgrey.jpg" alt = "img" class = "img-responsive">
                                    </center>
                                    <div class = "carousel-caption">
                                        <h3 style = "color:#fff;">Varsity Jacket Grey</h3>
                                        <button class = "btn btn-success">Buy</button>
                                    </div>
                                    </div>
                                
                                <div class = "item">
                                    <!-- images 1920 by 740 -->
                                    <center>
                                    <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/idarepictures/vred.jpg" alt = "img" class = "img-responsive">
                                    </center>
                                    <div class = "carousel-caption">
                                        <h3 style = "color:#fff;">Varsity Jacket Red</h3>
                                        <button class = "btn btn-success">Buy</button>
                                    </div>
                                    </div>
                                    
                                <div class = "item">
                                    <!-- images 1920 by 740 -->
                                    <center>
                                    <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/idarepictures/vpurple.jpg" alt = "img" class = "img-responsive">
                                    </center>
                                    <div class = "carousel-caption">
                                        <h3 style = "color:#fff;">Varsity Jacket Purple</h3>
                                        <button class = "btn btn-success">Buy</button>
                                    </div>
                                    </div>
                                    
                                </div>
                                <a class = "carousel-control left" href = "#myCarousel" data-slide = "prev">
                                    <span class = "icon-prev"></span>    
                                </a>
                                
                                 <a class = "carousel-control right" href = "#myCarousel" data-slide = "next">
                                    <span class = "icon-next"></span>    
                                </a>
                                
                            </div>
                            
                    
                        </div>
                </div>
            </div>
        </div>
    </div>
    



<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>