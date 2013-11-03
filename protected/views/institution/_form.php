<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institution-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'iname',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'acronym',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'pic',array('class'=>'span5','maxlength'=>9)); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>600)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
