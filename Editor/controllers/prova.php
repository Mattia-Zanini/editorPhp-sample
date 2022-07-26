<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "../lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;
use DeliciousBrains\WPMDB\Container\Dotenv\Validator;
use Illuminate\Support\Str;

// Build our Editor instance and process the data coming from _POST

$db->sql( 'set names utf8' );
Editor::inst( $db, 'objects', 'data_id' )
      ->fields(
	      Field::inst( 'objects.data_id', 'data_id' ),
	      Field::inst( 'objects.data_name', 'data_name' ),
	      Field::inst( 'objects.data_position', 'data_position' ),
	      Field::inst( 'objects.data_salary', 'data_salary' ),
	      Field::inst( 'objects.data_start_date', 'data_start_date' ),
	      Field::inst( 'objects.data_office', 'data_office' ),
	      Field::inst( 'objects.data_extn', 'data_extn' ),

      )
	->debug(true)
      ->process( $_POST )
      ->json();