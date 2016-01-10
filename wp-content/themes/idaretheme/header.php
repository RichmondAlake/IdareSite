<head>
    <meta charset="utf-8">
    <title>Idare Clothing Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!-- Bootstrap css cdn -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    
    
    <?php wp_enqueue_script('jquery', 'wp-content/themes/idaretheme/js/jquery.js', array('jquery')); ?>
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    
    <!-- Calling custom javascript file -->
     <script type="text/javascript"
      src="<?php bloginfo("template_url"); ?>/bootstrap/js/bootstrap.js">
    </script>
    <script type="text/javascript"
      src="<?php bloginfo("template_url"); ?>/bootstrap/js/customjquery.js">
    </script>
    <script type="text/javascript"
      src="<?php bloginfo("template_url"); ?>/bootstrap/js/contact_me.js">
    </script>
    <script type="text/javascript"
      src="<?php bloginfo("template_url"); ?>/bootstrap/js/jqBootstrapValidation.js">
    </script>
  </head>
  <body> <!-- add class = "container" to solve the responsiveness issue -->
    <!-- Navigation Bar -->
    <div class = "nav animated fadeIn">
      <div>
        <center>
        <div id = "myGallery">
        <img class = "animated bounceIn"  src = "<?php bloginfo('template_url'); ?>/bootstrap/img/idarelogo.png">
        <img class = "animated bounceIn"  src = "<?php bloginfo('template_url'); ?>/bootstrap/img/logo.png" style="height:30%;">
        </div>
        </center>
      </div>
      <ul style = "">
        
         <?php wp_list_pages(array('title_li' => '', 'exclude' => 5)) ?>
         
         
      </ul>
    </div>
    