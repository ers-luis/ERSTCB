<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institutionid')); ?>:</b>
	<?php echo CHtml::encode($data->institutionid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aliasname')); ?>:</b>
	<?php echo CHtml::encode($data->aliasname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aliasacronym')); ?>:</b>
	<?php echo CHtml::encode($data->aliasacronym); ?>
	<br />


</div>