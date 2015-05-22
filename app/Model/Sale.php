<?php
App::uses('AppModel', 'Model');
$SaleDetail = ClassRegistry::init('SaleDetail');
$Point = ClassRegistry::init('Point');
/**
 * Sale Model
 *
 * @property Costumer $Costumer
 * @property SaleDetail $SaleDetail
 */
class Sale extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'totalprice' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SaleDetail' => array(
			'className' => 'SaleDetail',
			'foreignKey' => 'sale_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


	public function beforeValidate($options = array()) {
		$specificallyThis = $this->SaleDetail->find('list', array(
			'fields' => array('SaleDetail.totalprice'),
			'conditions' => array('SaleDetail.sale_id' => $this->data['Sale']['id'])));
		//debug(array_sum($specificallyThis));
		//$productprice = $specificallyThisOne['Product']['price'];
		$this->data['Sale']['totalprice'] = array_sum($specificallyThis);
		if ($this->data['Sale']['totalprice']>20000) {
			$this->data['Sale']['puntos'] = variant_int($this->data['Sale']['totalprice']/20000);
		}
		return true;
	}

}
