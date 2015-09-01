<!-- File: src/Template/Stores/add.ctp -->

<h1>Agregar una Tienda</h1>
<?php
    echo $this->Form->create($store);
    echo $this->Form->input('name',array('label'=>'Nombre de la tienda'));
    echo $this->Form->input('address',array('label'=>'Dirección'));
    //echo $this->Form->input('city_id',array('type'=>'select', 'label'=>'Ciudad'));
    echo $this->Form->label('city_id', 'Ciudad');
    echo $this->Form->select('city_id',$cities,['empty'=>'(Elige una ciudad)','label'=>'Ciudad']);
    //echo $this->Form->label('user_id', 'Promotor');
    echo $this->Form->input('user_id',array('type'=>'select', 'label'=>'Promotor'));
    echo "<h2>Contacto en Tienda</h2>";
    echo $this->Form->input('contact_name',array('label'=>'Nombre'));
    echo $this->Form->input('contact_phone',array('label'=>'Teléfono'));
    echo "<br><p>Formulario MAPS</p>";
    echo $this->Form->button(__('Guardar Ciudad'));
    echo $this->Form->end();
?>