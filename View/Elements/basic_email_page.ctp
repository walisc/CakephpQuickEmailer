<h4>
    Compose Email
</h4>
<?php echo $this->Form->create('EmailMessage', array('id' => 'quick_emailer_basic_page')); ?>

<div class="form-group">
    <div class="col-sm-10">
        <?php echo $this->Form->input('from:',array('type' => 'text', 'class' =>'form-control', 'label' => 'From:' )); ?>


        <?php echo $this->Form->input('to:',array('type' => 'text', 'class' =>'form-control', 'label' => 'To:' )); ?>

        <?php echo $this->Form->input('subject:',array('type' => 'text', 'class' =>'form-control', 'label' => 'Subject:' )); ?>

        <?php echo $this->Form->input('body:',array('type' => 'textarea', 'class' =>'form-control', 'label' => 'Content' )); ?>
    <div>
</div>
<br>

<div class="btn-group pull-right" >

    <?php echo $this->Form->input('Save as Template', array('type' => 'submit', 'id' => 'quick_emailer_basic_st','div' => false, 'label' => false, 'class' => 'btn btn-default'));?>
    <?php echo $this->Form->input('Save as Draft', array('type' => 'submit', 'div' => false, 'label' => false, 'class' => 'btn btn-default')) ?>
    <?php echo $this->Form->input('Send Now', array('type' => 'submit', 'id' => 'quick_emailer_basic_send2', 'div' => false, 'label' => false, 'class' => 'btn btn-primary"')) ?>

    <?php
    $this->Helpers->load('QuickEmailer.QuickEmailerUtilities');

    echo $this->QuickEmailerUtilities->SetPostURL('quick_emailer_basic_page',
        'quick_emailer_basic',
        array('controller' => 'EventAttendee', 'action' => 'view'));

    echo $this->QuickEmailerUtilities->SetPostURL('quick_emailer_basic_page',
        'quick_emailer_basic_send',
        array('plugin' => 'QuickEmailer', 'controller' => 'Email', 'action' => 'process_send')); ?>




</div>


<?php echo $this->Form->end(); ?>


