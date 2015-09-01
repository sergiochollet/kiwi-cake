<?php 

	// src/Controller/StoresController.php

	namespace App\Controller;

	class StoresController extends AppController{
		//...
		public function initialize(){
        	parent::initialize();
        	$this->loadComponent('Flash'); // Include the FlashComponent
    	}

		public function index(){
        	$stores = $this->Stores->find('all');
        	$this->set(compact('stores'));
    	}

    	public function view($id = null){
        	$store = $this->Stores->get($id);
        	$this->set(compact('store'));
    	}

    	public function add(){
	        $store = $this->Stores->newEntity();
	        if ($this->request->is('post')) {
	            $store = $this->Stores->patchEntity($store, $this->request->data);
	            if ($this->Stores->save($store)) {
	                $this->Flash->success(__('Tienda agregada exitosamente.'));
	                return $this->redirect(['action' => 'index']);
	            }
	            $this->Flash->error(__('No se pudo agregar la tienda.'));
	        }
	        $this->set('store', $store);
	        $this->set('cities', $this->Stores->Cities->find('list',array('fields'=>array('id','name') ) ) );
	    }

	    public function edit($id = null){
		    $store = $this->Stores->get($id);
		    if ($this->request->is(['post', 'put'])) {
		        $this->Stores->patchEntity($store, $this->request->data);
		        if ($this->Stores->save($store)) {
		            $this->Flash->success(__('Tienda editada exitosamente.'));
		            return $this->redirect(['action' => 'index']);
		        }
		        $this->Flash->error(__('No se pudo editar la tienda.'));
		    }

		    $this->set('store', $store);
		}

		public function delete($id){
		    $this->request->allowMethod(['post', 'delete']);
		    $store = $this->Stores->get($id);
		    if ($this->Stores->delete($store)){
		        $this->Flash->success(__('La tienda ha sido eliminada.'));
		        return $this->redirect(['action' => 'index']);
		    }
		}
	}
?>