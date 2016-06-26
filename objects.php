<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'booking';

// Table's primary key
$primaryKey = 'id_book';

// Array of dae columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
	array( 'db' => 'id_book', 'dt' => 'id_book' ),
	array(
		'db'        => 'tanggal',
		'dt'        => 'tanggal',
		'formatter' => function( $d, $row ) {
			return date( 'jS M y', strtotime($d));
		}
	),    
	array( 'db' => 'ktp',   'dt' => 'ktp' ),
	array( 'db' => 'nopol',     'dt' => 'nopol' ),
    array( 'db' => 'jam',     'dt' => 'jam' ),
    array( 'db' => 'status',     'dt' => 'status' ),
	
);

// SQL server connection information
$sql_details = array(
	'user' => 'root',
	'pass' => '',
	'db'   => 'suzuki',
	'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

