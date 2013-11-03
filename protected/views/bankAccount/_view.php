<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institutionid')); ?>:</b>
	<?php echo CHtml::encode($data->institutionid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accountnumber')); ?>:</b>
	<?php echo CHtml::encode($data->accountnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>