<?php
App::uses('AppModel', 'Model');
/**
 * Inventario Model
 *
 */
class Inventario extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'inventario';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'transaccion';

}
