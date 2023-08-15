<?php



function custom_theme_assets() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );

}



add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );





// Include custom template files

function include_template() {

   include( get_template_directory() . '/templates/about-us.php' );

   include( get_template_directory() . '/templates/php-training.php' );

   include( get_template_directory() . '/templates/webdev-training.php' );

   include( get_template_directory() . '/templates/android-training.php' );

   include( get_template_directory() . '/templates/java-training.php' );

   include( get_template_directory() . '/templates/bootstrap-training.php' );

   include( get_template_directory() . '/templates/python-training.php' );

   include( get_template_directory() . '/templates/advanced-python-training.php' );

   include( get_template_directory() . '/templates/wordpress-development-training.php' );

   include( get_template_directory() . '/templates/laravel-development-training.php' );

   include( get_template_directory() . '/templates/nodejs-training.php' );

   include( get_template_directory() . '/templates/angularjs-training.php' );

   include( get_template_directory() . '/templates/c-programming-training.php' );

   include( get_template_directory() . '/templates/cpp-programming-development-training.php' );

   include( get_template_directory() . '/templates/graphics-designing-training.php' );

   include( get_template_directory() . '/templates/website-designing-training.php' );

   include( get_template_directory() . '/templates/adobephotoshop-designing-training.php' );

   include( get_template_directory() . '/templates/adobe-illustrator-designing-training.php' );

   include( get_template_directory() . '/templates/ui-ux-designing-training.php' );

   include( get_template_directory() . '/templates/seo-training.php' );

   include( get_template_directory() . '/templates/digital-marketing-training.php' );

   include( get_template_directory() . '/templates/bca-intern.php' );

   include( get_template_directory() . '/templates/mca-intern.php' );

   include( get_template_directory() . '/templates/bscit-intern.php' );

   include( get_template_directory() . '/templates/mscit-intern.php' );

   include( get_template_directory() . '/templates/be-btech-intern.php' );

   include( get_template_directory() . '/templates/politechnic-training-intern.php' );

   include( get_template_directory() . '/templates/summer-training-intern.php' );

   include( get_template_directory() . '/templates/retail-ecommerce-app-development.php' );

   include( get_template_directory() . '/templates/healthcare.php' );

   include( get_template_directory() . '/templates/food-and-restaurant.php' );

   include( get_template_directory() . '/templates/sports.php' );

   include( get_template_directory() . '/templates/fleet-management.php' );

   include( get_template_directory() . '/templates/pos.php' );

   include( get_template_directory() . '/templates/startup.php' );

   include( get_template_directory() . '/templates/education.php' );

   include( get_template_directory() . '/templates/tour-and-travel.php' );

   include( get_template_directory() . '/templates/realestate.php' );

   include( get_template_directory() . '/templates/fintech.php' );

   include( get_template_directory() . '/templates/iot-app-development.php' );

   include( get_template_directory() . '/templates/android-app-development.php' );

   include( get_template_directory() . '/templates/react-native-app-development.php' );

   include( get_template_directory() . '/templates/swift-app-development.php' );

   include( get_template_directory() . '/templates/ios-app-development.php' );

   include( get_template_directory() . '/templates/xamarin-app-development.php' );

   include( get_template_directory() . '/templates/ionic-app-development.php' );

   include( get_template_directory() . '/templates/flutter-app-development.php' );

   include( get_template_directory() . '/templates/titanium-app-development.php' );

   include( get_template_directory() . '/templates/career.php' );

   include( get_template_directory() . '/templates/privacy-policy.php' );

   include( get_template_directory() . '/templates/vertical.php' );

   include( get_template_directory() . '/templates/technologies.php' );

   include( get_template_directory() . '/templates/cross-platformapp-development.php' );
   
   include( get_template_directory() . '/templates/enterprise-app-development.php' );
   
   include( get_template_directory() . '/templates/mobile-app-consulting.php' );

   include( get_template_directory() . '/templates/blog.php' );
   
   include( get_template_directory() . '/templates/request-quote.php' );

   include( get_template_directory() . '/templates/contact-us.php' );
}



