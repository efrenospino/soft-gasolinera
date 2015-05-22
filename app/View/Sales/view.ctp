<div class="sales view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Venta'); ?></h1>
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
									<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Sale'), array('action' => 'edit', $sale['Sale']['id']), array('escape' => false)); ?> </li>-->
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $sale['Sale']['id']), array('escape' => false), __('¿Esta seguro(a) de eliminar # %s?', $sale['Sale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listado'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nueva'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Costumers'), array('controller' => 'costumers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Costumer'), array('controller' => 'costumers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Sale Details'), array('controller' => 'sale_details', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Sale Detail'), array('controller' => 'sale_details', 'action' => 'add'), array('escape' => false)); ?> </li>-->
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
			<?php echo h($sale['Sale']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Totalprice'); ?></th>
		<td>
			<?php echo h($sale['Sale']['totalprice']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($sale['Sale']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Costumer'); ?></th>
		<td>
			<?php echo $this->Html->link($sale['Costumer']['licenseplate'], array('controller' => 'costumers', 'action' => 'view', $sale['Costumer']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Puntos'); ?></th>
		<td>
			<?php echo h($sale['Sale']['puntos']); ?>
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
	<h3><?php echo __('Detalle de la venta'); ?></h3>
	<?php if (!empty($sale['SaleDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Producto'); ?></th>
		<!--<th><?php echo __('Sale Id'); ?></th>-->
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($sale['SaleDetail'] as $saleDetail): ?>
		<tr>
			<td><?php echo $saleDetail['id']; ?></td>
			<td><?php echo $saleDetail['product_id']; ?></td>
			<!--<td><?php echo $saleDetail['sale_id']; ?></td>-->
			<td><?php echo $saleDetail['quantity']; ?></td>
			<td><?php echo $saleDetail['totalprice']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'sale_details', 'action' => 'view', $saleDetail['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'sale_details', 'action' => 'edit', $saleDetail['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'sale_details', 'action' => 'delete', $saleDetail['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $saleDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Sale Detail'), array('controller' => 'sale_details', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>-->
	</div><!-- end col md 12 -->
</div>
