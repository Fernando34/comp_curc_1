<?php 
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
   class User extends AppModel {
    public $name = 'User';
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
}
	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}
	
	public function generateHashChangePassword()
  {
    $salt = Configure::read('Security.salt');
    $salt_v2 = Configure::read('Security.cipherSeed');
    $rand = mt_rand(1,999999999);
    $rand_v2 = mt_rand(1,999999999);

    $hash = hash('sha256',$salt.$rand.$salt_v2.$rand_v2);

    return $hash;
  }   
}



?>