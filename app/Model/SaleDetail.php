<?php
App::uses('AppModel', 'Model');
$Product = ClassRegistry::init('Product');
/**
 * SaleDetail Model
 *
 * @property Product $Product
 * @property Sale $Sale
 */
class SaleDetail extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'quantity' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
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
		$specificallyThisOne = $this->Product->findById($this->data['SaleDetail']['product_id']);
		$productprice = $specificallyThisOne['Product']['price'];
		$this->data['SaleDetail']['totalprice'] = $productprice * $this->data['SaleDetail']['quantity'];
		return true;
	}
}
