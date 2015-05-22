    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $this->Html->url('/'); ?>">Sistema Estación de Servicios</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo $this->Html->url('/'); ?>">Inicio</a></li>
            <li><a href="<?php echo $this->Html->url('/pages/about'); ?>">Acerca de</a></li>
            <li><a href="<?php echo $this->Html->url('contact'); ?>">Contacto</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>