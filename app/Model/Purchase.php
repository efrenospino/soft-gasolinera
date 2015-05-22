<?php
App::uses('AppModel', 'Model');
$PurchaseDetail = ClassRegistry::init('PurchaseDetail');
/**
 * Purchase Model
 *
 * @property PurchaseDetail $PurchaseDetail
 */
class Purchase extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
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
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'PurchaseDetail' => array(
			'className' => 'PurchaseDetail',
			'foreignKey' => 'purchase_id',
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
		$specificallyThis = $this->PurchaseDetail->find('list', array(
			'fields' => array('PurchaseDetail.totalprice'),
			'conditions' => array('PurchaseDetail.purchase_id' => $this->data['Purchase']['id'])));
		debug(array_sum($specificallyThis));
		//$productprice = $specificallyThisOne['Product']['price'];
		$this->data['Purchase']['totalprice'] = array_sum($specificallyThis);
		return true;
	}



}
