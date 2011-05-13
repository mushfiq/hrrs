<?php
$this->breadcrumbs=array(
	'Js Infos',
);

$this->menu=array(
	array('label'=>'Create JsInfo', 'url'=>array('create')),
	array('label'=>'Manage JsInfo', 'url'=>array('admin')),
);
?>

<h1>Js Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
