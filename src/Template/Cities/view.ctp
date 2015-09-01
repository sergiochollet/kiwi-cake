<!-- File: src/Template/Cities/view.ctp -->

<h1>Detalle de Ciudad</h1>
<p>
	<b>Nombre</b>: <?= h($city->name) ?> &nbsp; | &nbsp;
	<?= $this->Html->link('Editar', ['action' => 'edit', $city->id]) ?>
</p>
<?= $this->Html->link('Volver a listado', ['action' => 'index']) ?>