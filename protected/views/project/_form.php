<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'pnumber',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'pname',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'acronym',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'startdate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'enddate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>600)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
