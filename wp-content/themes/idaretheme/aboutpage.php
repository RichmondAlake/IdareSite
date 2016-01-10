<?php
/**
 * Template Name: About Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>
 
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content();?>


<div class = "container">
<center>
<h1 class = "text animated slideInUp">About Us</h1>
<hr style = "height:2px; color:#333; background-color:#333 "/>
<div class = "row">
    <div class = "col-md-6" style = "padding:0px;">
        <h3 class = "text-muted animated zoomInUp" style = "font-size:18px; margin-top:50px; margin-left:60px;">
            
             I DARE clothing is an independant clothing company started in  January 2011 as a means of funding my addiction to skating.
             The designs were becoming increasingly popular so i put together a team to help promote the brand as well as teach myself 
             everything there is to know about skating and the industry from all angles.
             
        </h3>
    </div>
    <div class = "col-md-6" style = "padding:0px;">
        <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/brooklyn.jpg" style = "max-height:100%; width:300px;" style = "position:relative;" class = "animated slideInRight"/>
        
    </div>
</div>

<h1 class = "text animated slideInUp" style = "margin-top:50px;">Mission Statement</h1>
<hr style = "height:2px; color:#333; background-color:#333 "/>
<div class = "row">
    <div class = "col-md-6" style = "">
        
            <img src = "<?php bloginfo('template_url'); ?>/bootstrap/img/coolperson.jpg" style = "max-height:100%; width:300px;" style = "position:relative;" class = "animated slideInRight"/>
                
    </div>
    <div class = "col-md-6" style "">
        <h3 class = "text-muted animated zoomInUp" style = "font-size:18px; margin-top:30px; margin-right:50px;">
            
            Providing good quality, hardwearing Clothing for all, clothes with swagger and style for men and women throughout the UK and beyond...
            Designs and colours are coming to you in abundance, so flick through the gallery and take your pick, you'll be amazed at our affordable prices... 
            Watch out for special offers, tour info and team edits; including comps and jams list. Also be sure to follow the I DARE upskate blog for news, reviews & interviews...
           
        </h3>
    </div>
</div>
<h1 class = "text animated slideInUp">Contact Us</h1>
<hr style = "height:2px; color:#333; background-color:#333 "/>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class = "text">Email: idare@live.co.uk</h3>
                    <p class= "text">Telephone: 07903582397</h3>
                </div>
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">OR</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        


</center>
</div>


<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>