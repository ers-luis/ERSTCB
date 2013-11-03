<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'activity-non-eu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'activityid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'personid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'institutionid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'anetype',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'anename',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
