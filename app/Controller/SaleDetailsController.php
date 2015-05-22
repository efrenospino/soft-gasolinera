<?php
App::uses('AppController', 'Controller');
/**
 * SaleDetails Controller
 *
 * @property SaleDetail $SaleDetail
 * @property PaginatorComponent $Paginator
 */
class SaleDetailsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->layout = 'system';
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SaleDetail->recursive = 0;
		$this->set('saleDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SaleDetail->exists($id)) {
			throw new NotFoundException(__('Invalid sale detail'));
		}
		$options = array('conditions' => array('SaleDetail.' . $this->SaleDetail->primaryKey => $id));
		$this->set('saleDetail', $this->SaleDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SaleDetail->create();
			if ($this->SaleDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The sale detail has been saved.'));
				return $this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('The sale detail could not be saved. Please, try again.'));
			}
		}
		$products = $this->SaleDetail->Product->find('list');
		$sales = $this->SaleDetail->Sale->find('list', array(
                               'order' => array('id' => 'DESC'),
								'limit' => 1));
		$this->set(compact('products', 'sales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SaleDetail->exists($id)) {
			throw new NotFoundException(__('Invalid sale detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SaleDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The sale detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SaleDetail.' . $this->SaleDetail->primaryKey => $id));
			$this->request->data = $this->SaleDetail->find('first', $options);
		}
		$products = $this->SaleDetail->Product->find('list');
		$sales = $this->SaleDetail->Sale->find('list');
		$this->set(compact('products', 'sales'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SaleDetail->id = $id;
		if (!$this->SaleDetail->exists()) {
			throw new NotFoundException(__('Invalid sale detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SaleDetail->delete()) {
			$this->Session->setFlash(__('The sale detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sale detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
