<?php
/**
 * InventarioFixture
 *
 */
class InventarioFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'inventario';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'fecha' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'producto' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'cantidad' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'total' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'transaccion' => array('type' => 'string', 'null' => false, 'length' => 5, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'indexes' => array(
			
		),
		'tableParameters' => array('comment' => 'VIEW')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'fecha' => '2015-05-25 21:50:45',
			'producto' => 1,
			'cantidad' => 1,
			'total' => 1,
			'transaccion' => 'Lor'
		),
	);

}
