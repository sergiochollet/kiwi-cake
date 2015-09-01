<!-- File: src/Template/Cities/index.ctp -->

<h1>Lista de Ciudades</h1>
<?= $this->Html->link('+ Agregar una ciudad', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Action</th>
    </tr>

    <?php foreach ($cities as $city): ?>
    <tr>
        <td><?= $city->id ?></td>
        <td>
            <?= $this->Html->link($city->name, ['action' => 'view', $city->id]) ?>
        </td>
        <td>
            <?= $this->Html->link('Editar', ['action' => 'edit', $city->id]) ?>
            &nbsp;
            <?= $this->Form->postLink(
                'Eliminar',
                ['action' => 'delete', $city->id],
                ['confirm' => '¿Seguro de eliminar ciudad?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>