<?php

class PagesController extends AppController {
	public $name = 'Pages';
    public $helpers = array('Html', 'Form');
	public $components = array('Session');
	
	public function index() {
	        $this->set('pages', $this->Page->find('all'));
	    }
	/*
	public function add() {
		if($this->request->is('post')){
			if($this->Page->save($this->request->data)){
				$this->Session->setFlash('Your page has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to save your page.');
			}
		}
	}
	*/
	
	public function add($id = null) {
		$this->Page->id = $id;
		$this->set('page', $this->Page->read());
		if($this->request->is('get')){
			$this->request->data = $this->Page->read();
		} 
		else {
			if($this->Page->save($this->request->data)){
				$this->Session->setFlash('Your page has been updated.');
			} else {
				$this->Session->setFlash('Unable to update your page.');
			}
		}
	}
	
	public function edit($id = null) {
		$this->Page->id = $id;
		$this->set('page', $this->Page->read());
		if($this->request->is('get')){
			$this->request->data = $this->Page->read();
		} 
		else {
			if($this->Page->save($this->request->data)){
				$this->Session->setFlash('Your page has been updated.');
			} else {
				$this->Session->setFlash('Unable to update your page.');
			}
		}
	}
	
	public function delete($id) {
		if($this->request->is('get')){
			throw new MethodNotALlowedException();
		}
		if($this->Page->delete($id)){
			$this->Session->setFlash('Page: '.$id.' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}
	
	function beforeFilter(){
		$this->Auth->allow('*');
	}
}
