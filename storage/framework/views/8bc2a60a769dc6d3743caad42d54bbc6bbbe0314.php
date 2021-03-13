<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <base href="<?php echo e(asset('')); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="screen" href="css/superfish.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="css/stylesheet.css" type="text/css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold,bolditalic" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    <script src="js/hoverIntent.js" type="text/javascript"></script>
    <script src="js/superfish.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/jquery.animate-shadow.js"></script>
    <script type='text/javascript' src='js/jquery.cycle.all.min.js'></script>
    <script type='text/javascript' src='nivo-slider/jquery.nivo.slider.pack.js'></script>
    <link rel="stylesheet" media="screen" href="nivo-slider/nivo-slider.css" type="text/css" />
    <style>
        #show-loading{
            position: absolute; 
            width: 100%; 
            z-index: 99999; 
            height: 100%; 
            background: white;
            display: flex;
            justify-content: center;
        }

        #hidden-loading{
            display: none;
        }
    </style>
    <?php echo $__env->yieldContent('css'); ?>
    <script>
        $(window).load(function () {
            $('#show-loading').css('display','none'); 
            $('#hidden-loading').fadeIn("slow");  
            
            $('#slider').nivoSlider({
                effect: 'slideInLeft', // Specify sets like: 'fold,fade,sliceDown'
                slices: 10,
                boxCols: 10, // For box animations
                boxRows: 5, // For box animations
                animSpeed: 1000, // Slide transition speed
                pauseTime: 4500, // How long each slide will show
                startSlide: 0, // Set starting Slide (0 index)
                directionNav: true, // Next & Prev navigation
                directionNavHide: true, // Only show on hover
                controlNav: true, // 1,2,3... navigation
                controlNavThumbs: true, // Use thumbnails for Control Nav
                controlNavThumbsFromRel: true, // Use image rel for thumbs
                pauseOnHover: true, // Stop animation while hovering
            });
        });

        jQuery('#featured_slider').cycle({
            fx: 'scrollHorz',
            speed: 800,
            timeout: 0,
            easing: 'easeInOutQuint',
            next: '#featured_slider_next',
            prev: '#featured_slider_prev'
        });
    </script>
</head>

<body>
    <div id="hiddenloading-">   
      <div id="container_wrapper">

          <?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <?php echo $__env->yieldContent('content'); ?>

          <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <?php echo $__env->yieldContent('script'); ?>

      </div>
  </div>

</body>
</html>
<?php /**PATH K:\xampp\htdocs\Duan\resources\views/layout/index.blade.php ENDPATH**/ ?>