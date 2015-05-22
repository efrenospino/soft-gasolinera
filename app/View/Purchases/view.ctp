<div class="purchases view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Compra'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar'), array('action' => 'edit', $purchase['Purchase']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $purchase['Purchase']['id']), array('escape' => false), __('¿Esta seguro(a) de eliminar # %s?', $purchase['Purchase']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listado'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nueva'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Purchase Details'), array('controller' => 'purchase_details', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Purchase Detail'), array('controller' => 'purchase_details', 'action' => 'add'), array('escape' => false)); ?> </li>-->
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
			<?php echo h($purchase['Purchase']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Precio total'); ?></th>
		<td>
			<?php echo h($purchase['Purchase']['totalprice']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fecha'); ?></th>
		<td>
			<?php echo h($purchase['Purchase']['date']); ?>
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
	<h3><?php echo __('Detalle de la compra'); ?></h3>
	<?php if (!empty($purchase['PurchaseDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<!--<th><?php echo __('Id'); ?></th> -->
		<th><?php echo __('Producto'); ?></th>
		<!--<th><?php echo __('Purchase Id'); ?></th>-->
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($purchase['PurchaseDetail'] as $purchaseDetail): ?>
		<tr>
			<!--<td><?php echo $purchaseDetail['id']; ?></td>-->
			<td><?php echo $purchaseDetail['product_id']; ?></td>
			<!--<td><?php echo $purchaseDetail['purchase_id']; ?></td>-->
			<td><?php echo $purchaseDetail['quantity']; ?></td>
			<td><?php echo $purchaseDetail['totalprice']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'purchase_details', 'action' => 'view', $purchaseDetail['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'purchase_details', 'action' => 'edit', $purchaseDetail['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'purchase_details', 'action' => 'delete', $purchaseDetail['id']), array('escape' => false), __('¿Esta seguro(a) de eliminar # %s?', $purchaseDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Purchase Detail'), array('controller' => 'purchase_details', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>-->
	</div><!-- end col md 12 -->
</div>
