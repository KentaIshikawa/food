<?php if(!is_home()): ?>
    <?php if(function_exists('bcn_display')): ?>
        <div class="breadcrumb">
            <div class="breadcrumb_inner">
                <?php bcn_display(); ?>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>