<!-- File: src/Template/Stores/index.ctp -->

<h1>Lista de Tiendas</h1>
<?= $this->Html->link('+ Agregar una tienda', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Ciudad</th>
        <th>Promotor</th>
        <th>Action</th>
    </tr>

    <?php foreach ($stores as $store): ?>
    <tr>
        <td><?= $store->id ?></td>
        <td> <?= $this->Html->link($store->name, ['action' => 'view', $store->id]) ?> </td>
        <td> <?= $this->Html->link($store->city_id, ['controller' => 'Cities','action' => 'view', $store->city_id]) ?> </td>
        <td> <?= $this->Html->link($store->user_id, ['controller' => 'Users','action' => 'view', $store->user_id]) ?> </td>
        <td>
            <?= $this->Html->link('Editar', ['action' => 'edit', $store->id]) ?>
            &nbsp;
            <?= $this->Form->postLink(
                'Eliminar',
                ['action' => 'delete', $store->id],
                ['confirm' => '¿Seguro de eliminar esta tienda?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>