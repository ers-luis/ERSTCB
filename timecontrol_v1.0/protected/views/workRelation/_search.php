<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'personid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'institutionid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'projectid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'startdate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'enddate',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
