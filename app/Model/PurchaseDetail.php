<?php
App::uses('AppModel', 'Model');
$Product = ClassRegistry::init('Product');
/**
 * PurchaseDetail Model
 *
 * @property Product $Product
 * @property Purchase $Purchase
 */
class PurchaseDetail extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'product_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'purchase_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'seller')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
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
		'Purchase' => array(
			'className' => 'Purchase',
			'foreignKey' => 'purchase_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function beforeValidate($options = array()) {
		$specificallyThisOne = $this->Product->findById($this->data['PurchaseDetail']['product_id']);
		$productprice = $specificallyThisOne['Product']['price'];
		$this->data['PurchaseDetail']['totalprice'] = $productprice * $this->data['PurchaseDetail']['quantity'];
		return true;
	}

}

