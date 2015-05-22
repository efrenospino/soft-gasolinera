<div class="saleDetails view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Sale Detail'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Sale Detail'), array('action' => 'edit', $saleDetail['SaleDetail']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Sale Detail'), array('action' => 'delete', $saleDetail['SaleDetail']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $saleDetail['SaleDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Sale Details'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Sale Detail'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Products'), array('controller' => 'products', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Product'), array('controller' => 'products', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Sales'), array('controller' => 'sales', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Sale'), array('controller' => 'sales', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($saleDetail['SaleDetail']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Product'); ?></th>
		<td>
			<?php echo $this->Html->link($saleDetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $saleDetail['Product']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sale'); ?></th>
		<td>
			<?php echo $this->Html->link($saleDetail['Sale']['id'], array('controller' => 'sales', 'action' => 'view', $saleDetail['Sale']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Quantity'); ?></th>
		<td>
			<?php echo h($saleDetail['SaleDetail']['quantity']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Totalprice'); ?></th>
		<td>
			<?php echo h($saleDetail['SaleDetail']['totalprice']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

