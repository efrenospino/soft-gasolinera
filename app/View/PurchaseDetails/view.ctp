<div class="purchaseDetails view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Detalle de compra'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar'), array('action' => 'edit', $purchaseDetail['PurchaseDetail']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $purchaseDetail['PurchaseDetail']['id']), array('escape' => false), __('¿Esta seguro(a) de eliminar # %s?', $purchaseDetail['PurchaseDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listado'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Purchase Detail'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Products'), array('controller' => 'products', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Product'), array('controller' => 'products', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Purchases'), array('controller' => 'purchases', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Purchase'), array('controller' => 'purchases', 'action' => 'add'), array('escape' => false)); ?> </li>-->
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
			<?php echo h($purchaseDetail['PurchaseDetail']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Producto'); ?></th>
		<td>
			<?php echo $this->Html->link($purchaseDetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $purchaseDetail['Product']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Compra'); ?></th>
		<td>
			<?php echo $this->Html->link($purchaseDetail['Purchase']['id'], array('controller' => 'purchases', 'action' => 'view', $purchaseDetail['Purchase']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cantidad'); ?></th>
		<td>
			<?php echo h($purchaseDetail['PurchaseDetail']['quantity']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Precio'); ?></th>
		<td>
			<?php echo h($purchaseDetail['PurchaseDetail']['totalprice']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

