<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <?php echo $this->element('QuickEmailer.email_menus'); ?>
        </div>
        <div class="col-md-10">
            <?php

            if ($type == 'basic')
            {
                echo $this->element('QuickEmailer.basic_email_page');
            }
            else if ($type == 'advance')
            {
                echo $this->element('QuickEmailer.advance_email_page');
            }

            ?>

        </div>
    </div>
</div>