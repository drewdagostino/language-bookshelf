<?php

class AboutController extends AppController {
    public $name = 'About';
    public $helpers = array('Html', 'Form');
	public $components = array('Session');

	public function index() {
	        $this->set('aboutpages', $this->About->find('all'));
	    }
	
	public function admin() {
			$this->set('aboutpages', $this->About->find('all'));
	}
	
	public function view($id = null) {
		$this->About->id = $id;
		$this->set('aboutpage', $this->About->read());
	}
	
	public function contact(){
		
	}
	
	public function add() {
		if($this->request->is('post')){
			if($this->Book->save($this->request->data)){
				$this->Session->setFlash('Your book has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to save your book.');
			}
		}
	}
	
	public function edit($id = null) {
		$this->Book->id = $id;
		$this->set('book', $this->Book->read());
		$this->set('pages', $this->Book->Page->find('all'));
		if($this->request->is('get')){
			$this->request->data = $this->Book->read();
		} 
		else {
			if($this->Book->save($this->request->data)){
				$this->Session->setFlash('Your book has been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your book.');
			}
		}
	}
	
	public function editpage($id = null) {
		$this->Page->id = $id;
		$this->set('page', $this->Page->read());
		if($this->request->is('get')){
			$this->request->data = $this->Page->read();
		} 
		else {
			if($this->Book->save($this->request->data)){
				$this->Session->setFlash('Your book has been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your book.');
			}
		}
	}
	
	public function delete($id) {
		if($this->request->is('get')){
			throw new MethodNotALlowedException();
		}
		if($this->Book->delete($id)){
			$this->Session->setFlash('Book: '.$id.' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}
	
	function beforeFilter(){
		$this->Auth->allow('*');
	}
}

?>