<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $this->Html->url('/pages/home-admin'); ?>">Sistema Estación de Servicios</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><?php echo $this->Html->link('Servicios', array('controller' => 'services', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'swf_actiongeturl(url, target)on' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Productos', array('controller' => 'products', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Compras', array('controller' => 'purchases', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Clientes', array('controller' => 'costumers', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Proveedores', array('controller' => 'providers', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Ventas', array('controller' => 'sales', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Puntos', array('controller' => 'points', 'action' => 'index')); ?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href='' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mi Cuenta <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php $user = $this->Session->read('Auth.User'); echo $this->Html->link(__('<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;&nbsp;Informacion del usuario'), array('controller' => 'Users', 'action' => 'view', $user['id']), array('escape' => false)); ?></li>
            <li class="divider"></li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Salir'), array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>