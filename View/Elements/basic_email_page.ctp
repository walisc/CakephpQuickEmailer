<h4>
    Compose Email
</h4>
<?php echo $this->Form->create('EmailMessage'); ?>

<div class="form-group">
    <div class="col-sm-10">
        <?php echo $this->Form->input('from:',array('type' => 'text', 'class' =>'form-control', 'label' => 'From:' )); ?>


        <?php echo $this->Form->input('to:',array('type' => 'text', 'class' =>'form-control', 'label' => 'To:' )); ?>

        <?php echo $this->Form->input('subject:',array('type' => 'text', 'class' =>'form-control', 'label' => 'Subject:' )); ?>

        <?php echo $this->Form->input('body:',array('type' => 'textarea', 'class' =>'form-control', 'label' => 'Content' )); ?>
    <div>
</div>


<?php echo $this->Form->end(); ?>


