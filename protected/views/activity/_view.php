<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aname')); ?>:</b>
	<?php echo CHtml::encode($data->aname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atype')); ?>:</b>
	<?php echo CHtml::encode($data->atype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>