<?php
$this->breadcrumbs=array(
	'Project Accounts',
);

$this->menu=array(
	array('label'=>'Create ProjectAccount','url'=>array('create')),
	array('label'=>'Manage ProjectAccount','url'=>array('admin')),
);
?>

<h1>Project Accounts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
