<div class="points view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Point'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Point'), array('action' => 'edit', $point['Point']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Point'), array('action' => 'delete', $point['Point']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $point['Point']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Points'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Point'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Costumers'), array('controller' => 'costumers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Costumer'), array('controller' => 'costumers', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($point['Point']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Costumer'); ?></th>
		<td>
			<?php echo $this->Html->link($point['Costumer']['licenseplate'], array('controller' => 'costumers', 'action' => 'view', $point['Costumer']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sale'); ?></th>
		<td>
			<?php echo $this->Html->link($point['Sale']['id'], array('controller' => 'sales', 'action' => 'view', $point['Sale']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Valor'); ?></th>
		<td>
			<?php echo h($point['Point']['valor']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Estado'); ?></th>
		<td>
			<?php echo h($point['Point']['estado']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

