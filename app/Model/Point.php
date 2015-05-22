<?php
App::uses('AppModel', 'Model');
$Sale = ClassRegistry::init('Sale');
/**
 * Point Model
 *
 * @property Costumer $Costumer
 * @property Sale $Sale
 */
class Point extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'costumer_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sale_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estado' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Costumer' => array(
			'className' => 'Costumer',
			'foreignKey' => 'costumer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sale' => array(
			'className' => 'Sale',
			'foreignKey' => 'sale_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public function beforeValidate($options = array()) {
		$specificallyThis = $this->Sale->find('first', array(
			'conditions' => array('Sale.id' => $this->data['Point']['sale_id'])));
		//debug(intval($specificallyThis['Sale']['totalprice']));
		if (intval($specificallyThis['Sale']['totalprice']>20000)) {
			//debug(intval($specificallyThis['Sale']['totalprice']/20000));
			$this->data['Point']['valor'] = intval($specificallyThis['Sale']['totalprice']/20000);
			$this->data['Point']['costumer_id'] = $specificallyThis['Costumer']['id'];
		}
		return true;
	}
}
