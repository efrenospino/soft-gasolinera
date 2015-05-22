<?php
App::uses('AppController', 'Controller');
/**
 * Purchases Controller
 *
 * @property Purchase $Purchase
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PurchasesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

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
		$this->Purchase->recursive = 0;
		$this->set('purchases', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Purchase->exists($id)) {
			throw new NotFoundException(__('Compra inválida'), 'alert', array('class' => 'alert-danger'));
		}
		$options = array('conditions' => array('Purchase.' . $this->Purchase->primaryKey => $id));
		$this->set('purchase', $this->Purchase->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Purchase->create();
			if ($this->Purchase->save($this->request->data)) {
				$this->Session->setFlash(__('La compra ha sido guardada correctamente.'), 'alert', array('class' => 'alert-success'));
				return $this->redirect(array('controller' => 'purchasedetails',
					'action' => 'add'));
			} else {
				$this->Session->setFlash(__('La compra no pudo ser guardada. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Purchase->exists($id)) {
			throw new NotFoundException(__('Compra inválida'), 'alert', array('class' => 'alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Purchase->save($this->request->data)) {
				$this->Session->setFlash(__('La compra ha sido guardada correctamente.'), 'alert', array('class' => 'alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La compra no pudo ser guardada. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Purchase.' . $this->Purchase->primaryKey => $id));
			$this->request->data = $this->Purchase->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Purchase->id = $id;
		if (!$this->Purchase->exists()) {
			throw new NotFoundException(__('Compra inválida'), 'alert', array('class' => 'alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Purchase->delete()) {
			$this->Session->setFlash(__('La compra ha sido eliminada correctamente.'), 'alert', array('class' => 'alert-success'));
		} else {
			$this->Session->setFlash(__('La compra no pudo ser eliminada. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
