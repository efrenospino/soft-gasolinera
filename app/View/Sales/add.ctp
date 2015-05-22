<div class="sales form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Agregar venta'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listado'), array('action' => 'index'), array('escape' => false)); ?></li>
									<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Costumers'), array('controller' => 'costumers', 'action' => 'index'), array('escape' => false)); ?> </li>-->
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo cliente'), array('controller' => 'costumers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Sale Details'), array('controller' => 'sale_details', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Sale Detail'), array('controller' => 'sale_details', 'action' => 'add'), array('escape' => false)); ?> </li>-->
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Sale', array('role' => 'form')); ?>

				<!--<div class="form-group">
					<?php echo $this->Form->input('totalprice', array('class' => 'form-control', 'placeholder' => 'Totalprice'));?>
				</div>-->
				<div class="form-group">
					<?php echo $this->Form->input('costumer_id', array('class' => 'form-control', 'placeholder' => 'Costumer Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Agregar'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
