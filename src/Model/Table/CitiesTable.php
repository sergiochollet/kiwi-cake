<?php 
	// src/Model/Table/CitiesTable.php

	namespace App\Model\Table;

	use Cake\ORM\Table;

	class CitiesTable extends Table{
		public function initialize(array $config){
			//$this->addBehaviour('Timestamp');
		}

		/*
		public function validationDefault(Validator $validator){
	        $validator->notEmpty('name');
	        return $validator;
	    }
	    */
	}
?>