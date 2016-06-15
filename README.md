

StyleMe - Bootstrap Wordpress Starter Theme
===



Getting Started
---------------


Final Step
----------

When you theme is 100% done navigate to /inc/scripts.php and change the call to your stylesheet to use the minified version that Gulp create with the following code:

wp_enqueue_style( 'strapped-style', get_template_directory_uri() . '/style.min.css' );

What's next
- Add scheme
- Style the comments
- General style
- Single Posts and Pages
- Archive
- 404
- Menu Style
- Header and Footer Style
