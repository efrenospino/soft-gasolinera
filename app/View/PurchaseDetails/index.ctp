<div class="purchaseDetails index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Detalle de compras'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Acciones</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Purchase Detail'), array('action' => 'add'), array('escape' => false)); ?></li>-->
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listado de productos'), array('controller' => 'products', 'action' => 'index'), array('escape' => false)); ?> </li>
		<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Product'), array('controller' => 'products', 'action' => 'add'), array('escape' => false)); ?> </li>-->
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listado de compras'), array('controller' => 'purchases', 'action' => 'index'), array('escape' => false)); ?> </li>
		<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Purchase'), array('controller' => 'purchases', 'action' => 'add'), array('escape' => false)); ?> </li>-->
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('producto'); ?></th>
						<th><?php echo $this->Paginator->sort('compra'); ?></th>
						<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
						<th><?php echo $this->Paginator->sort('total ($)'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($purchaseDetails as $purchaseDetail): ?>
					<tr>
						<td><?php echo h($purchaseDetail['PurchaseDetail']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($purchaseDetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $purchaseDetail['Product']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($purchaseDetail['Purchase']['id'], array('controller' => 'purchases', 'action' => 'view', $purchaseDetail['Purchase']['id'])); ?>
		</td>
						<td><?php echo h($purchaseDetail['PurchaseDetail']['quantity']); ?>&nbsp;</td>
						<td><?php echo h($purchaseDetail['PurchaseDetail']['totalprice']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $purchaseDetail['PurchaseDetail']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $purchaseDetail['PurchaseDetail']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $purchaseDetail['PurchaseDetail']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $purchaseDetail['PurchaseDetail']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->