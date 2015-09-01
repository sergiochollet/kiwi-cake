<?php 

	// src/Controller/CitiesController.php

	namespace App\Controller;

	class CitiesController extends AppController{
		//...
		public function initialize(){
        	parent::initialize();
        	$this->loadComponent('Flash'); // Include the FlashComponent
    	}

		public function index(){
        	$cities = $this->Cities->find('all');
        	$this->set(compact('cities'));
    	}

    	public function view($id = null){
        	$city = $this->Cities->get($id);
        	$this->set(compact('city'));
    	}

    	public function add(){
	        $city = $this->Cities->newEntity();
	        if ($this->request->is('post')) {
	            $city = $this->Cities->patchEntity($city, $this->request->data);
	            if ($this->Cities->save($city)) {
	                $this->Flash->success(__('Ciudad agregada exitosamente.'));
	                return $this->redirect(['action' => 'index']);
	            }
	            $this->Flash->error(__('No se pudo agregar la ciudad.'));
	        }
	        $this->set('city', $city);
	    }

	    public function edit($id = null){
		    $city = $this->Cities->get($id);
		    if ($this->request->is(['post', 'put'])) {
		        $this->Cities->patchEntity($city, $this->request->data);
		        if ($this->Cities->save($city)) {
		            $this->Flash->success(__('Ciudad editada exitosamente.'));
		            return $this->redirect(['action' => 'index']);
		        }
		        $this->Flash->error(__('No se pudo editar la ciudad.'));
		    }

		    $this->set('city', $city);
		}

		public function delete($id){
		    $this->request->allowMethod(['post', 'delete']);
		    $city = $this->Cities->get($id);
		    if ($this->Cities->delete($city)){
		        $this->Flash->success(__('La ciudad con id: {0} ha sido eliminada.', h($id)));
		        return $this->redirect(['action' => 'index']);
		    }
		}
	}
?>