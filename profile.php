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

        $token = get_option('tokensinapsisplatform');
        $id    = get_option('idusersinapsisplatform');

        $courses = RfCoreCurl::curl('/api/course/get_course_by_id_user/'.$id , 'GET' , $token, null);

        $smarty->assign('cursos', $courses);

        return $smarty->fetch('courses.tpl');

    }

    add_shortcode("shortcodecoursesbyuser" , "shortcode_coursesbyuser");


?>