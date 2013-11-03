<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

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
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
