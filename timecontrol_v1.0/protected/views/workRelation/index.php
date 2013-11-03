<?php
$this->breadcrumbs=array(
	'Work Relations',
);

$this->menu=array(
	array('label'=>'Create WorkRelation','url'=>array('create')),
	array('label'=>'Manage WorkRelation','url'=>array('admin')),
);
?>

<h1>Work Relations</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
