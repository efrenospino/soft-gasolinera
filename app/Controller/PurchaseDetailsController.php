<?php
App::uses('AppController', 'Controller');
/**
 * PurchaseDetails Controller
 *
 * @property PurchaseDetail $PurchaseDetail
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PurchaseDetailsController extends AppController {

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
		$this->PurchaseDetail->recursive = 0;
		$this->set('purchaseDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PurchaseDetail->exists($id)) {
			throw new NotFoundException(__('Detalle de compra inválido'), 'alert', array('class' => 'alert-danger'));
		}
		$options = array('conditions' => array('PurchaseDetail.' . $this->PurchaseDetail->primaryKey => $id));
		$this->set('purchaseDetail', $this->PurchaseDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PurchaseDetail->create();
			if ($this->PurchaseDetail->save($this->request->data)) {
				$this->Session->setFlash(__('El detalle de compra ha sido guardado correctamente.'), 'alert', array('class' => 'alert-success'));
				return $this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('El detalle de la compra no pudo ser guardado. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
			}
		}
		$products = $this->PurchaseDetail->Product->find('list');
		$purchases = $this->PurchaseDetail->Purchase->find('list', array(
                               'order' => array('id' => 'DESC'),
								'limit' => 1));
		$this->set(compact('products', 'purchases'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PurchaseDetail->exists($id)) {
			throw new NotFoundException(__('Detalle de compra inválido'), 'alert', array('class' => 'alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PurchaseDetail->save($this->request->data)) {
				$this->Session->setFlash(__('El detalle de compra ha sido guardado correctamente.'), 'alert', array('class' => 'alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El detalle de la compra no pudo ser guardado. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
			}
		} else {
			$options = array('conditions' => array('PurchaseDetail.' . $this->PurchaseDetail->primaryKey => $id));
			$this->request->data = $this->PurchaseDetail->find('first', $options);
		}
		$products = $this->PurchaseDetail->Product->find('list');
		$purchases = $this->PurchaseDetail->Purchase->find('list');
		$this->set(compact('products', 'purchases'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PurchaseDetail->id = $id;
		if (!$this->PurchaseDetail->exists()) {
			throw new NotFoundException(__('Detalle de compra inválido'), 'alert', array('class' => 'alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PurchaseDetail->delete()) {
			$this->Session->setFlash(__('El detalle de compra ha sido eliminado correctamente.'), 'alert', array('class' => 'alert-success'));
		} else {
			$this->Session->setFlash(__('El detalle de la compra no pudo ser guardado. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
