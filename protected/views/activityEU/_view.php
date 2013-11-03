<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('activityid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->activityid),array('view','id'=>$data->activityid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wpid')); ?>:</b>
	<?php echo CHtml::encode($data->wpid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aetype')); ?>:</b>
	<?php echo CHtml::encode($data->aetype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aename')); ?>:</b>
	<?php echo CHtml::encode($data->aename); ?>
	<br />


</div>