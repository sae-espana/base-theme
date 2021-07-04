<?php

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function footer_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="rounded">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'footer_widgets_init' );

function hstngr_register_widget() {
  register_widget( 'hstngr_widget' );
  }
  add_action( 'widgets_init', 'hstngr_register_widget' );
  class hstngr_widget extends WP_Widget {
  function __construct() {
  parent::__construct(
  // widget ID
  'hstngr_widget',
  // widget name
  __('Hostinger Sample Widget', ' hstngr_widget_domain'),
  // widget description
  array( 'description' => __( 'Hostinger Widget Tutorial', 'hstngr_widget_domain' ), )
  );
  }
  public function widget( $args, $instance ) {
  $title = apply_filters( 'widget_title', $instance['title'] );
  echo $args['before_widget'];
  //if title is present
  if ( ! empty( $title ) )
  echo $args['before_title'] . $title . $args['after_title'];
  //output
  echo __( 'Greetings from Hostinger.com!', 'hstngr_widget_domain' );
  echo $args['after_widget'];
  }
  public function form( $instance ) {
  if ( isset( $instance[ 'title' ] ) )
  $title = $instance[ 'title' ];
  else
  $title = __( 'Default Title', 'hstngr_widget_domain' );
  ?>
  <p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
  </p>
  <?php
  }
  public function update( $new_instance, $old_instance ) {
  $instance = array();
  $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
  return $instance;
  }
  }