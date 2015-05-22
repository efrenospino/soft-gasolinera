<div class="costumers form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Agregar cliente'); ?></h1>
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
									<!--<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Points'), array('controller' => 'points', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Point'), array('controller' => 'points', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Sales'), array('controller' => 'sales', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Sale'), array('controller' => 'sales', 'action' => 'add'), array('escape' => false)); ?> </li>-->
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Costumer', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('licenseplate', array('class' => 'form-control', 'placeholder' => 'Licenseplate'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cc', array('class' => 'form-control', 'placeholder' => 'Cc'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nombre', array('class' => 'form-control', 'placeholder' => 'Nombre'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('apellido', array('class' => 'form-control', 'placeholder' => 'Apellido'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Agregar'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
