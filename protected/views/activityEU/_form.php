<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'activity-eu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'activityid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'wpid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'aetype',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'aename',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
