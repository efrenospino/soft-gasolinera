<div class="users form">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User',  array('role' => 'form')); ?>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="background: #E6E6E6;">
            <fieldset>
                <legend>
                    <h2 class="form-signin-heading">Ingrese su nombre de usuario y contraseña</h2>
                </legend>
                <div class="form-group">
                    <?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username')); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>
                </div>
            </fieldset>
            <div class="form-group">
                <?php echo $this->Form->submit(__('Login'), array('class' => 'btn btn-lg btn-primary btn-block')); ?>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>