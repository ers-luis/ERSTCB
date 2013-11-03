<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('activityid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->activityid),array('view','id'=>$data->activityid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personid')); ?>:</b>
	<?php echo CHtml::encode($data->personid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institutionid')); ?>:</b>
	<?php echo CHtml::encode($data->institutionid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anetype')); ?>:</b>
	<?php echo CHtml::encode($data->anetype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anename')); ?>:</b>
	<?php echo CHtml::encode($data->anename); ?>
	<br />


</div>