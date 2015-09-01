<!-- File: src/Template/Cities/edit.ctp -->

<h1>Editar una Ciudad</h1>
<?php
    echo $this->Form->create($city);
    echo $this->Form->input('name');
    echo $this->Form->button(__('Guardar ciudad'));
    echo $this->Form->end();
?>