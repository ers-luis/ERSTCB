<?php
$this->breadcrumbs=array(
	'Activity Non Eus',
);

$this->menu=array(
	array('label'=>'Create ActivityNonEU','url'=>array('create')),
	array('label'=>'Manage ActivityNonEU','url'=>array('admin')),
);
?>

<h1>Activity Non Eus</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
