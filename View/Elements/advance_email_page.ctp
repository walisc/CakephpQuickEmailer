<? echo $this->Html->script('QuickEmailer.ckeditor/ckeditor'); ?>
<h4>
    Compose Email
</h4>
<?php echo $this->Form->create('EmailMessage'); ?>

<div class="form-group">
    <div class="col-sm-10">
        <?php echo $this->Form->input('from:',array('type' => 'text', 'class' =>'form-control', 'label' => 'From:' )); ?>


        <?php echo $this->Form->input('to:',array('type' => 'text', 'class' =>'form-control', 'label' => 'To:' )); ?>

        <?php echo $this->Form->input('subject:',array('type' => 'text', 'class' =>'form-control', 'label' => 'Subject:' )); ?>

        <?php echo $this->Form->input('body:',array('type' => 'textarea', 'class' =>'form-control', 'label' => 'Content', 'id'=>'advance_email_editor' )); ?>
        <script type="text/javascript">
            CKEDITOR.replace('advance_email_editor');
        </script>
    <div>
</div>
<br>

<div class="btn-group pull-right" >

    <button class="btn btn-default" type="button">Save as Template</button>
    <button class="btn btn-default" type="button">Save as Draft</button>
    <button class="btn btn-primary" type="button">Send Now</button>

</div>


<?php echo $this->Form->end(); ?>


