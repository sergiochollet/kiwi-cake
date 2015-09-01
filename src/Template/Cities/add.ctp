<!-- File: src/Template/Cities/add.ctp -->

<h1>Agregar una Ciudad</h1>
<?php
    echo $this->Form->create($city);
    echo $this->Form->input('name');
    echo $this->Form->button(__('Guardar Ciudad'));
    echo $this->Form->end();
?>