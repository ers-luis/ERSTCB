<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::encode($data->projectid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wpname')); ?>:</b>
	<?php echo CHtml::encode($data->wpname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wpnumber')); ?>:</b>
	<?php echo CHtml::encode($data->wpnumber); ?>
	<br />


</div>