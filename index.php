<?php
// this template for displaying the header
?>
<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <h1>Hello Wordpress</h1>
<?php wp_footer(); ?>
</body>
</html>