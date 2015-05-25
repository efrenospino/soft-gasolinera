<div class="inventarios index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Inventario'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('fecha'); ?></th>
						<th><?php echo $this->Paginator->sort('producto'); ?></th>
						<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
						<th><?php echo $this->Paginator->sort('total'); ?></th>
						<th><?php echo $this->Paginator->sort('transaccion'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($inventarios as $inventario): ?>
					<tr>
						<td><?php echo h($inventario['Inventario']['fecha']); ?>&nbsp;</td>
						<td><?php echo h($inventario['Inventario']['producto']); ?>&nbsp;</td>
						<td><?php echo h($inventario['Inventario']['cantidad']); ?>&nbsp;</td>
						<td><?php echo h($inventario['Inventario']['total']); ?>&nbsp;</td>
						<td><?php echo h($inventario['Inventario']['transaccion']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $inventario['Inventario']['transaccion']), array('escape' => false)); ?>
							
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