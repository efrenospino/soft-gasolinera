<div class="inventarios view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Detalle'); ?></h1>
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
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listado'), array('action' => 'index'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Fecha'); ?></th>
		<td>
			<?php echo h($inventario['Inventario']['fecha']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Producto'); ?></th>
		<td>
			<?php echo h($inventario['Inventario']['producto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cantidad'); ?></th>
		<td>
			<?php echo h($inventario['Inventario']['cantidad']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total'); ?></th>
		<td>
			<?php echo h($inventario['Inventario']['total']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Transaccion'); ?></th>
		<td>
			<?php echo h($inventario['Inventario']['transaccion']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

