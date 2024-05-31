<?php 

    /*
    Plugin Name: [Sinapsis] profile
    Plugin URI: https://sinapsis.com
    Description: Plugin para contenido de página perfil de usuario
    Version: 1.0
    Author: Diego Baeza
    Author URI: https://sisnapsis.com
    License: GPL2
    */

    require dirname(__FILE__) . '/public/assets/smarty/libs/Smarty.class.php';
    require(dirname(__FILE__) .'../../../../wp-load.php');


    add_action( 'wp_enqueue_scripts', 'ajax_enqueue_scripts_profile' );

    function ajax_enqueue_scripts_profile() {

        wp_enqueue_script(
        'courses-profile',
        plugins_url( '/public/js/courses.js', __FILE__ ), 
        array('jquery'),
        rand(0, 99),
        true
        );

        wp_enqueue_style( 
        'css-profile-sinapsis',
        plugins_url( '/public/css/profile.css', __FILE__ ),
        array(),
        rand(0, 99)
        );


        // wp_localize_script(
        //     'courses-profile',
        //     'wp_ajax_sinapsis_profile',
        //     array(
        //       'ajax_url_courses_profile' => plugins_url( '/public/courses.php' , __FILE__ )
        //     )
        // );

    }


    function shortcode_coursesbyuser($atts){

        $smarty = new Smarty;

        $smarty->setTemplateDir(dirname(__FILE__) . '/public/partials/');
        $smarty->setCompileDir(dirname(__FILE__) .'/public/compile/');

        $user_id = get_current_user_id();
        $token   = get_user_meta($user_id, 'tokensinapsisplatform', true);
        $id      = get_user_meta($user_id, 'idusersinapsisplatform', true);

        $courses = RfCoreCurl::curl('/api/course/get_course_by_id_user/'.$id , 'GET' , $token, null);

        $smarty->assign('curso', $courses->response);

        return $smarty->fetch('courses.tpl');

    }

    add_shortcode("shortcodecoursesbyuser" , "shortcode_coursesbyuser");


?>