<?php
App::uses('AppController', 'Controller');
/**
 * Costumers Controller
 *
 * @property Costumer $Costumer
 * @property PaginatorComponent $Paginator
 */
class CostumersController extends AppController {

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
		$this->Costumer->recursive = 0;
		$this->set('costumers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Costumer->exists($id)) {
			throw new NotFoundException(__('Cliente inválido'), 'alert', array('class' => 'alert-danger'));
		}
		$options = array('conditions' => array('Costumer.' . $this->Costumer->primaryKey => $id));
		$this->set('costumer', $this->Costumer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Costumer->create();
			if ($this->Costumer->save($this->request->data)) {
				$this->Session->setFlash(__('El cliente ha sido guardado correctamente.'), 'alert', array('class' => 'alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cliente no ha sido guardado. Intente otra vez.'), 'alert', array('class' => 'alert-success'));
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
		if (!$this->Costumer->exists($id)) {
			throw new NotFoundException(__('Cliente inválido'), 'alert', array('class' => 'alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Costumer->save($this->request->data)) {
				$this->Session->setFlash(__('El cliente ha sido guardado correctamente.'), 'alert', array('class' => 'alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cliente no ha sido guardado. Intente otra vez.'), 'alert', array('class' => 'alert-success'));
			}
		} else {
			$options = array('conditions' => array('Costumer.' . $this->Costumer->primaryKey => $id));
			$this->request->data = $this->Costumer->find('first', $options);
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
		$this->Costumer->id = $id;
		if (!$this->Costumer->exists()) {
			throw new NotFoundException(__('Cliente inválido'), 'alert', array('class' => 'alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Costumer->delete()) {
			$this->Session->setFlash(__('El cliente ha sido eliminado correctamente.'), 'alert', array('class' => 'alert-success'));
		} else {
			$this->Session->setFlash(__('El cliente no pudo ser eliminado. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
