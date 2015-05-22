<?php
App::uses('AppController', 'Controller');
/**
 * Services Controller
 *
 * @property Service $Service
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ServicesController extends AppController {

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
		$this->Service->recursive = 0;
		$this->set('services', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Servicio invalido'), 'alert', array('class' => 'alert-danger'));
		}
		$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
		$this->set('service', $this->Service->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Service->create();
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('El servicio ha sido guardado correctamente.'), 'alert', array('class' => 'alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El servicio no pudo ser guardado. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
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
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Servicio invalido'), 'alert', array('class' => 'alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('El servicio ha sido guardado correctamente.'), 'alert', array('class' => 'alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El servicio no pudo ser guardado. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
			$this->request->data = $this->Service->find('first', $options);
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
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Servicio invalido'), 'alert', array('class' => 'alert-danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Service->delete()) {
			$this->Session->setFlash(__('El servicio ha sido eliminado correctamente.'), 'alert', array('class' => 'alert-success'));
		} else {
			$this->Session->setFlash(__('El servicio no pudo ser eliminado. Intente otra vez.'), 'alert', array('class' => 'alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function isAuthorized($user) {
	    // All registered users can add posts
	    if ($this->action === 'add' && $this->action === 'delete' && $this->action === 'edit') {
	        return true;
	    }

	    return parent::isAuthorized($user);
	}

}
