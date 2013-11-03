<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'activityid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'wpid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'aetype',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'aename',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
