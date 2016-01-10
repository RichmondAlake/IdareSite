


<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Pulls in the title
<h1><?php the_title(); ?></h1>
-->

<?php the_content();?>

<!-- Home page creation -->
<div class = "container" style = "width:100%; margin-top:50px width:100%">
    <!-- Insert banner image here or carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
         </ol>
    <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src= "<?php bloginfo('template_url'); ?>/bootstrap/img/orange.png" alt="ornage">
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/bootstrap/img/black.jpg" alt="black">
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/bootstrap/img/notorange.jpg" alt="Chania">
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/bootstrap/img/notorange.jpg" alt="Chania">
            </div>
        </div>
  <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
</div>

 <!-- JQuery CDN -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>