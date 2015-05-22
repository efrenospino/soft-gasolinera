<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    public $validate = array(
        'fullname' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'El nombre completo es requerido'
            )
        ),
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'El nombre de usuario es requerido'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'la contraseña es requerida'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'cashier', 'employee')),
                'message' => 'Por favor, seleccione un rol',
                'allowEmpty' => false
            )
        )
    );

    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new BlowfishPasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
}

}

?>