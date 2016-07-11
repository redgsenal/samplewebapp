<?php

namespace App\Helpers;

class Common {
	/**
	 * dump it here
	 * @param object $v
	 */
	public static function log($v) {
		var_dump ( $v );
	}
	
	/**
	 * convert to html ul list
	 * @param array $list
	 * @param string $title
	 */
	public static function listitems($list, $title) {
		if ($title) {
			echo '<h4>' . $title . '</h4>';
		}
		if ($list) {
			echo '<ul>';
			foreach ( $list as $item ) {
				echo '<li>' . $item . '</li>';
			}
			echo '</ul>';
		}
	}
	
	public static function image($imgpath){
		echo '<img src="'.$imgpath.'"/>';
	}
	
	public static function dummytext($limit){
		for($i = 0; $i < $limit; $i++){
			echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis finibus sapien. Curabitur sagittis libero neque, sit amet bibendum leo tempus eu. Maecenas venenatis urna et urna porta auctor. Aenean sit amet augue et ex hendrerit porta vel eget purus. Cras in odio blandit, aliquam neque vitae, volutpat tellus. Quisque ac nulla semper, feugiat dolor a, volutpat ante. Duis dignissim at quam a ornare.
Proin et felis eget tellus ullamcorper condimentum. Quisque eu malesuada nisl, cursus suscipit mi. Mauris sed velit ut sem porttitor viverra. Donec magna nisi, convallis vitae lobortis et, sagittis ac tortor. Etiam dignissim lorem posuere, dignissim lectus eget, malesuada lectus. Nullam suscipit metus at aliquam hendrerit. Nullam maximus vitae metus ut sollicitudin. Maecenas feugiat justo eu ornare feugiat. Sed tincidunt, purus id tristique consequat, elit magna fringilla diam, ut efficitur mi libero ut odio. Maecenas egestas justo ac ipsum congue fermentum. Praesent at pharetra odio. Cras ut accumsan sapien, at dignissim nibh. Suspendisse convallis, felis vitae aliquet aliquam, orci sem molestie lorem, finibus ornare quam nunc sit amet tortor. Cras ac tincidunt augue. Phasellus at dui vitae quam fringilla semper. Proin dolor nunc, vestibulum iaculis euismod vitae, elementum vitae orci.
Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus a tincidunt justo. Ut fringilla quam vel mi aliquet, vel convallis erat tempor. Curabitur ut pulvinar turpis. Aliquam suscipit arcu eu lacus molestie aliquam. Nam est tortor, fermentum in enim sed, pulvinar dignissim nunc. Nullam pretium ante eu iaculis facilisis. Phasellus mollis ultrices risus, non suscipit purus venenatis vitae. Sed vulputate ligula a facilisis commodo. Etiam dignissim, diam at aliquet placerat, nibh mi vestibulum metus, eget lacinia lorem enim ac dui. Maecenas dapibus velit nunc, aliquam dapibus dolor efficitur vitae.</p>';
		}
	}
}
