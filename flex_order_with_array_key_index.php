<?php

/**
 * @snippet       Show HTML elements order by flex.
 * @based-on      Array key index.
 * @how-to        Sort any parent array and see the result.
 * @tested-with   Codestar Framework 2.1.2
 */
$sortable_array = [
	'title'       => [
		'show'      => '0',
		'animation' => 'drop',
		'duration'  => '800',
	],
	'description' => [
		'show'      => '1',
		'animation' => 'jello',
		'duration'  => '1000',
	],
	'category'    => [
		'show'      => '1',
		'animation' => 'fade',
		'duration'  => '500',
	],
	'author'      => [
		'show'      => '1',
		'animation' => 'zoom',
		'duration'  => '400',
	],
];

$order_array  = [];
$order_assign = 1;
if ( ! empty( $sortable_array ) ) {

	foreach ( $sortable_array as $key => $value ) {

		$order_array[ $key ] = $order_assign;
		$order_assign++;
	}
}

/* // Or you can go through this way →
$nth_title       = array_search( 'title', array_keys( $sortable_array ), true );
$nth_description = array_search( 'description', array_keys( $sortable_array ), true );
$nth_category    = array_search( 'category', array_keys( $sortable_array ), true );
$nth_author      = array_search( 'author', array_keys( $sortable_array ), true ); */
?>

<style>
.wrapper { display: flex; flex-flow: column; }
<?php
echo '.wrapper div:nth-of-type(1) { order: ' . $order_array['category'] . '; }';
echo '.wrapper div:nth-of-type(2) { order: ' . $order_array['title'] . '; }';
echo '.wrapper div:nth-of-type(3) { order: ' . $order_array['description'] . '; }';
echo '.wrapper div:nth-of-type(4) { order: ' . $order_array['author'] . '; }';
?>
</style>

<div class="wrapper" style="margin-top:10px;">

	<div>Category</div>
	<div>Title</div>
	<div>Description</div>
	<div>Author</div>

</div>
