<div class="points form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Asignar puntos por venta'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<!--<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Points'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Costumers'), array('controller' => 'costumers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Costumer'), array('controller' => 'costumers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Sales'), array('controller' => 'sales', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Sale'), array('controller' => 'sales', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>	-->		
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Point', array('role' => 'form')); ?>

				<!--<div class="form-group">
					<?php echo $this->Form->input('costumer_id', array('class' => 'form-control', 'placeholder' => 'Costumer Id'));?>
				</div> -->
				<div class="form-group">
					<?php echo $this->Form->input('sale_id', array('class' => 'form-control', 'placeholder' => 'Sale Id'));?>
				</div>
				<!-- <div class="form-group">
					<?php echo $this->Form->input('valor', array('class' => 'form-control', 'placeholder' => 'Valor'));?>
				</div> -->
				<!--<div class="form-group">
					<?php echo $this->Form->input('estado', array('class' => 'form-control', 'placeholder' => 'Estado'));?>
				</div>-->
				<div class="form-group">
					<?php echo $this->Form->submit(__('Confirmar'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
