<!-- File: src/Template/Stores/view.ctp -->

<h1>Detalle de Tienda: <?= h($store->name) ?></h1>
<?= $this->Html->link('Editar', ['action' => 'edit', $store->id]) ?>
<p>
	<b>ID</b>: <?= h($store->id) ?>
	<b>Nombre</b>: <?= h($store->name) ?>
	<b>Promotor (Usuario)</b>: <?= h($store->user_id) ?>
	<b>Dirección</b>: <?= h($store->address) ?>
	<b>Ciudad</b>: <?= h($store->city_id) ?>
	<b>Contacto</b>: <?= h($store->contact_name) ?>
	<b>Teléfono</b>: <?= h($store->contact_phone) ?>
	<b>Localización</b>: (polígono GMaps)
</p>
<?= $this->Html->link('Volver a listado', ['action' => 'index']) ?>