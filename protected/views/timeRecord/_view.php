<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personid')); ?>:</b>
	<?php echo CHtml::encode($data->personid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institutionid')); ?>:</b>
	<?php echo CHtml::encode($data->institutionid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activityid')); ?>:</b>
	<?php echo CHtml::encode($data->activityid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trdate')); ?>:</b>
	<?php echo CHtml::encode($data->trdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seconds')); ?>:</b>
	<?php echo CHtml::encode($data->seconds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>