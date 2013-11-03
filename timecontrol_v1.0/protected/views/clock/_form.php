<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'clock-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'personid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'institutionid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'activityid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'starttime',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'endtime',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>600)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
