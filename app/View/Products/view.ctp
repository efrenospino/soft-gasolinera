<div class="products view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Producto'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar'), array('action' => 'edit', $product['Product']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $product['Product']['id']), array('escape' => false), __('¿Esta seguro(a) de eliminar # %s?', $product['Product']['id'])); ?> </li>
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
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nombre'); ?></th>
		<td>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descripción'); ?></th>
		<td>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Precio'); ?></th>
		<td>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Unidad de medida'); ?></th>
		<td>
			<?php echo h($product['Product']['measure']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

