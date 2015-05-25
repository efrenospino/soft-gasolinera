<?php
App::uses('AppController', 'Controller');
/**
 * Inventarios Controller
 *
 * @property Inventario $Inventario
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InventariosController extends AppController {

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
		$this->Inventario->recursive = 0;
		$this->set('inventarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Inventario->exists($id)) {
			throw new NotFoundException(__('Invalid inventario'));
		}
		$options = array('conditions' => array('Inventario.' . $this->Inventario->primaryKey => $id));
		$this->set('inventario', $this->Inventario->find('first', $options));
	}

}