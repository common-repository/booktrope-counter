<?php
/*
Plugin Name: BookTrope - Counter
Plugin URI: http://note15.com/
Description: Shortcode to add an apple style counter to your page
Version: 0.1
Author: booktrope.com
Author URI: http://booktrope.com/
*/
/* 	num - starting number
	date - seed date (date on which the number was valid)
	increment - how many to add each time the counter fires
	pace - how long to wait until adding the increment
*/
function bt_rolling_counter( $atts ){
    extract( shortcode_atts( array(
		'num' => '9103782',
		'date' => '',
        'increment' => '2',
        'pace' => '600',
	), $atts ) );
	
	$date_format = 'Y-m-d';
	$date = trim($date);
	$time = strtotime($date);

	// check for valid seed date and if so, add the increment at the correct pace from then until now
	if (date($date_format, $time) == $date) {
		$to_time = (time());
		$from_time = strtotime($date);
		$min_since = round(abs($to_time - $from_time) / 60,2);
		$newnum = round(abs($num) + ($min_since * $increment * ($pace / 1000) ),0);
	} else {
		$newnum = $newnum = round(abs($num),0);
	}     
    $output = '<div id="wrapper"><div id="flip-counter" class="flip-counter"></div></div>';
    
     ob_start();
    ?> <script type="text/javascript"><!--//--><![CDATA[//><!--
	jQuery(document).ready(function ($) {
            // Initialize a new counter
            var myCounter = new flipCounter('flip-counter', {value:<?php echo $newnum; ?>, inc:<?php echo round($increment,0); ?>, pace:<?php echo abs(round($pace,0)); ?>, auto:true});
        });
           //--><!]]>
        </script> 
  <?php
    $output .= ob_get_contents();
    ob_end_clean();
    
    return $output;
}
add_shortcode( 'thecounter', 'bt_rolling_counter' );
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function enqueue_scripts() {
    wp_enqueue_script('bt_counter_js', plugins_url('/js/flipcounter.min.js',__FILE__) );
    wp_enqueue_style('bt_counter_css', plugins_url('/css/counter.css',__FILE__) );
}