<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'Points');
$Points = new PointsController;
$Points->constructClasses();
/**
 * Sales Controller
 *
 * @property Sale $Sale
 * @property PaginatorComponent $Paginator
 */
class SalesController extends AppController {

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
		$this->Sale->recursive = 0;
		$this->set('sales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sale->exists($id)) {
			throw new NotFoundException(__('Venta inválida'), 'alert', array('class' => 'alert-danger'));
		}
		$options = array('conditions' => array('Sale.' . $this->Sale->primaryKey => $id));
		$this->set('sale', $this->Sale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sale->create();
			if ($this->Sale->save($this->request->data)) {
				$this->Session->setFlash(__('La venta ha sido guardada correctamente.'), 'alert', array('class' => 'alert-success'));
				return $this->redirect(array('controller' => 'saledetails',
					'action' => 'add'));
			} else {
				$this->Session->setFlash(__('La venta no pudo ser guardada. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
			}
		}
		$costumers = $this->Sale->Costumer->find('list');
		$this->set(compact('costumers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sale->exists($id)) {
			throw new NotFoundException(__('Compra inválida'), 'alert', array('class' => 'alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sale->save($this->request->data)) {
				$this->Session->setFlash(__('La venta ha sido guardada correctamente.'), 'alert', array('class' => 'alert-success'));
				return $this->redirect(array('controller' => 'points', 'action' => 'add'));
			} else {
				$this->Session->setFlash(__('La venta no pudo ser guardada. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Sale.' . $this->Sale->primaryKey => $id));
			$this->request->data = $this->Sale->find('first', $options);
		}
		$costumers = $this->Sale->Costumer->find('list');
		$this->set(compact('costumers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sale->id = $id;
		if (!$this->Sale->exists()) {
			throw new NotFoundException(__('Compra inválida'), 'alert', array('class' => 'alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sale->delete()) {
			$this->Session->setFlash(__('La venta ha sido eliminada correctamente.'), 'alert', array('class' => 'alert-success'));
		} else {
			$this->Session->setFlash(__('La venta no pudo ser eliminada. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
