<?php

function bike_register_menus(){

    // just register theree menu , when ever need add this ..
    register_nav_menus(array(
        'primary'   => __('primary menu' ,'bike'),
        'secondary' => __('secondary menu', 'bike'),
        'social'    => __('social menu', 'bike'),
    ));
}



?>
