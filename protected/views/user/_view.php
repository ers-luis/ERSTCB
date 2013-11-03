<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('personid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->personid),array('view','id'=>$data->personid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roleid')); ?>:</b>
	<?php echo CHtml::encode($data->roleid); ?>
	<br />


</div>