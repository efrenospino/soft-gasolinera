<div class="costumers view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Cliente'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar'), array('action' => 'edit', $costumer['Costumer']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $costumer['Costumer']['id']), array('escape' => false), __('¿Esta seguro(a) de eliminar # %s?', $costumer['Costumer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listado'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Points'), array('controller' => 'points', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Point'), array('controller' => 'points', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Sales'), array('controller' => 'sales', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Sale'), array('controller' => 'sales', 'action' => 'add'), array('escape' => false)); ?> </li>-->
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
			<?php echo h($costumer['Costumer']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Placa del vehículo'); ?></th>
		<td>
			<?php echo h($costumer['Costumer']['licenseplate']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fecha de creación'); ?></th>
		<td>
			<?php echo h($costumer['Costumer']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('CC'); ?></th>
		<td>
			<?php echo h($costumer['Costumer']['cc']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nombre'); ?></th>
		<td>
			<?php echo h($costumer['Costumer']['nombre']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Apellido'); ?></th>
		<td>
			<?php echo h($costumer['Costumer']['apellido']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<!--<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Puntos'); ?></h3>
	<?php if (!empty($costumer['Point'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Costumer Id'); ?></th>
		<th><?php echo __('Compra'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($costumer['Point'] as $point): ?>
		<tr>
			<td><?php echo $point['id']; ?></td>
			<td><?php echo $point['costumer_id']; ?></td>
			<td><?php echo $point['sale_id']; ?></td>
			<td><?php echo $point['valor']; ?></td>
			<td><?php echo $point['estado']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'points', 'action' => 'view', $point['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'points', 'action' => 'edit', $point['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'points', 'action' => 'delete', $point['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $point['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Point'), array('controller' => 'points', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div> end col md 12 
</div>-->
	<?php 
		$totalpuntos = array('controller' => 'points', 'action' => 'userspoints', $costumer['Costumer']['id']); ?>
		<h4><?php echo ('Total puntos: ').$totalpuntos[0]; ?><h4>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Ventas'); ?></h3>
	<?php if (!empty($costumer['Sale'])): ?>
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
	<?php foreach ($costumer['Sale'] as $sale): ?>
		<tr>
			<td><?php echo $sale['id']; ?></td>
			<td><?php echo $sale['totalprice']; ?></td>
			<!--<td><?php echo $sale['created']; ?></td>
			<td><?php echo $sale['costumer_id']; ?></td>
			<td><?php echo $sale['puntos']; ?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'sales', 'action' => 'view', $sale['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'sales', 'action' => 'edit', $sale['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'sales', 'action' => 'delete', $sale['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $sale['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nueva venta'), array('controller' => 'sales', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
