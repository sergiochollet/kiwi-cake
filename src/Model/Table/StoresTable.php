<?php 
	// src/Model/Table/StoresTable.php

	namespace App\Model\Table;

	use Cake\ORM\Table;

	class StoresTable extends Table{
		public function initialize(array $config){
			$this->belongsTo('Cities');
			$this->belongsTo('Users');
		}
	}
?>