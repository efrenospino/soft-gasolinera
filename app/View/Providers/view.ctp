<div class="providers view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Proveedor'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Acciones</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar'), array('action' => 'edit', $provider['Provider']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $provider['Provider']['id']), array('escape' => false), __('¿Esta seguro(a) de eliminar # %s?', $provider['Provider']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listado'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo'), array('action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($provider['Provider']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Razon social'); ?></th>
		<td>
			<?php echo h($provider['Provider']['razonsocial']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fecha de creación'); ?></th>
		<td>
			<?php echo h($provider['Provider']['created']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Compras'); ?></h3>
	<?php if (!empty($provider['Purchase'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<!--<th><?php echo __('Created'); ?></th>-->
		<!--<th><?php echo __('Costumer Id'); ?></th>-->
		<!--<th><?php echo __('Puntos'); ?></th>-->
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($provider['Purchase'] as $purchase): ?>
		<tr>
			<td><?php echo $purchase['id']; ?></td>
			<td><?php echo $purchase['totalprice']; ?></td>
			<!--<td><?php echo $purchase['created']; ?></td>
			<td><?php echo $purchase['costumer_id']; ?></td>
			<td><?php echo $purchase['puntos']; ?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'purchases', 'action' => 'view', $purchase['id']), array('escape' => false)); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nueva compra'), array('controller' => 'purchases', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>

