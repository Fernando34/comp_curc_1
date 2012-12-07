<?php
	class Casa extends AppModel {
 		 public $name = 'Casa';
	}
	
	public function isOwnedBy($post, $user) {
    return $this->field('id', array('id' => $post, 'user_id' => $user)) === $post;
}
?>