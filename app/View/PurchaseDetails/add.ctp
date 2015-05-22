<div class="purchaseDetails form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Agregar detalle de compra'); ?></h1>
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

																<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listado'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Products'), array('controller' => 'products', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Product'), array('controller' => 'products', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Purchases'), array('controller' => 'purchases', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Purchase'), array('controller' => 'purchases', 'action' => 'add'), array('escape' => false)); ?> </li>-->
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Finalizar'), array('controller' => 'purchases', 'action' => 'edit', reset($purchases)), array('escape' => false)); ?></li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('PurchaseDetail', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('product_id', array('class' => 'form-control', 'placeholder' => 'Product Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('purchase_id', array('class' => 'form-control', 'placeholder' => 'Purchase Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('quantity', array('class' => 'form-control', 'placeholder' => 'Cantidad'));?>
				</div>
				<!--<div class="form-group">
					<?php echo $this->Form->input('totalprice', array('class' => 'form-control', 'placeholder' => 'Totalprice'));?>
				</div> -->
				<div class="form-group">
					<?php echo $this->Form->submit(__('Agregar'), array('class' => 'btn btn-default')); ?>
				</div>
			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
