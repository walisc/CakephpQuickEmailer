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

    <!-- TODO: Refactor id names -->
    <button class="btn btn-default" id="qe_basic_save_tmplt"  type="button">Save as Template</button>
    <button class="btn btn-default" id="qe_basic_save_draft"  type="button">Save as Draft</button>
    <button class="btn btn-primary" id="qe_basic_send" type="button">Send Now</button>


    <?php
    $this->Helpers->load('QuickEmailer.QuickEmailerUtilities');

    echo $this->QuickEmailerUtilities->SetPostURL('quick_emailer_basic_page33',
        'qe_basic_save_draft',
        array('plugin' => 'QuickEmailer', 'controller' => 'Email', 'action' => 'process_save_draft'));

    echo $this->QuickEmailerUtilities->SetPostURL('quick_emailer_basic_page',
        'qe_basic_send',
        array('plugin' => 'QuickEmailer', 'controller' => 'Email', 'action' => 'process_send')); ?>




</div>


<?php echo $this->Form->end(); ?>


