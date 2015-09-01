<!-- File: src/Template/Stores/edit.ctp -->

<h1>Editar una Tienda</h1>
<?php
    echo $this->Form->create($store);
    echo $this->Form->input('name',array('label'=>'Nombre de la tienda'));
    echo $this->Form->input('address',array('label'=>'Dirección'));
    echo $this->Form->input('city_id',array('type'=>'select', 'label'=>'Ciudad'));
    echo $this->Form->input('user_id',array('type'=>'select', 'label'=>'Promotor'));
    echo "<b>Contacto en Tienda</b>";
    echo $this->Form->input('contact_name',array('label'=>'Nombre'));
    echo $this->Form->input('contact_phone',array('label'=>'Teléfono'));
    echo "<br><p>Formulario MAPS</p>";
    echo $this->Form->button(__('Guardar Ciudad'));
    echo $this->Form->end();
?>