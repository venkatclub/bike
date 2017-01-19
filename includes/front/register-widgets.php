<?php

function bike_widget_init(){
  register_sidebar( array(
    'name' => 'right Sidebar',
    'id'   =>  'rightwidget',
    'description' => 'some description ..',
    'before_widget' => '<div>',
    'after_widget'  => '</div>'
  ) );

  register_sidebar(  array(
            'id'            => 'footerwidget',
            'name'          => __( 'footer Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));

}

function bike_custom_widget(){
  register_widget('bike_test_widget_one');
  register_widget('bike_test_widget_search');
}
add_action('widgets_init','bike_custom_widget');

?>
