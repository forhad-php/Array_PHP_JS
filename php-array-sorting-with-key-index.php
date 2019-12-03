<?php

/**
 * @snippet       Show HTML elements order by sortable array key index.
 * @how-to        Sort any child array and see the result.
 * @tested-with   Codestar Framework 2.1.2
 */
$sortable_array = array(
	'category'    => [
		'show'      => '1',
		'animation' => 'fade',
		'duration'  => '500',
	],
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
	'author'      => [
		'show'      => '1',
		'animation' => 'zoom',
		'duration'  => '400',
	],
);

function category() {
	echo '<div>Category</div>' . "\n"; }
function title() {
	echo '<div>Title</div>' . "\n"; }
function description() {
	echo '<div>Description</div>' . "\n"; }
function author() {
	echo '<div>Author</div>' . "\n"; }

if ( ! empty( $sortable_array ) ) {

	foreach ( $sortable_array as $key => $value ) {

		if ( '1' === reset( $value ) ) {

			switch ( $key ) {
				case 'category':
					category();
					break;
				case 'title':
					title();
					break;
				case 'description':
					description();
					break;
				case 'author':
					author();
					break;
			}
		}
	}
}

/*
 Output =>

<div>Category</div>
<div>Description</div>
<div>Author</div> */
