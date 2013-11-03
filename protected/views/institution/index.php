<?php
$this->breadcrumbs=array(
	'Institutions',
);

$this->menu=array(
	array('label'=>'Create Institution','url'=>array('create')),
	array('label'=>'Manage Institution','url'=>array('admin')),
);
?>

<h1>Institutions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
