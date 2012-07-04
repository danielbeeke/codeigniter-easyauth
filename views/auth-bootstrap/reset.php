<div class="reset">

    <?php echo $messages; ?>

    <div class="page-header">
        <?php echo heading(__('Reset password')); ?>
    </div>

	<?php echo form_open(); ?>

    <div class="control-group">
    <?php
        echo form_label(__('New password'), 'password');
        echo form_password('password', '');
    ?>
    </div>

    <div class="control-group">
    <?php
        echo form_label(__('Password confirmation'), 'passconf');
        echo form_password('passconf', '');
    ?>
    </div>

    <div class="form-actions">
    <?php
        echo anchor('/', __('Cancel'), 'class="btn"');
        echo nbs();
        echo form_submit('action', __('Reset password'), 'class="btn btn-primary"');
    ?>
    </div>

	<?php echo form_close(); ?>

</div>


