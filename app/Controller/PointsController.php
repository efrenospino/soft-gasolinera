<?php
App::uses('AppController', 'Controller');
/**
 * Points Controller
 *
 * @property Point $Point
 * @property PaginatorComponent $Paginator
 */
class PointsController extends AppController {

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
		$this->Point->recursive = 0;
		$this->set('points', $this->Paginator->paginate());
	}

	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Point->exists($id)) {
			throw new NotFoundException(__('Invalid point'));
		}
		$options = array('conditions' => array('Point.' . $this->Point->primaryKey => $id));
		$this->set('point', $this->Point->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Point->create();
			$this->request->data['Point']['estado'] = 1;
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$costumers = $this->Point->Costumer->find('list');
		$sales = $this->Point->Sale->find('list', array(
                               'order' => array('id' => 'DESC'),
								'limit' => 1));
		$this->set(compact('costumers', 'sales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Point->exists($id)) {
			throw new NotFoundException(__('Invalid point'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Point.' . $this->Point->primaryKey => $id));
			$this->request->data = $this->Point->find('first', $options);
		}
		$costumers = $this->Point->Costumer->find('list');
		$sales = $this->Point->Sale->find('list');
		$this->set(compact('costumers', 'sales'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Point->id = $id;
		if (!$this->Point->exists()) {
			throw new NotFoundException(__('Invalid point'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Point->delete()) {
			$this->Session->setFlash(__('The point has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The point could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
