<?php
App::uses('Costumer', 'Model');

/**
 * Costumer Test Case
 *
 */
class CostumerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.costumer',
		'app.point',
		'app.sale',
		'app.sale_detail',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Costumer = ClassRegistry::init('Costumer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Costumer);

		parent::tearDown();
	}

}
