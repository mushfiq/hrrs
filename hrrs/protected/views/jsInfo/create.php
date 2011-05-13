<?php
$this->breadcrumbs=array(
	'Js Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JsInfo', 'url'=>array('index')),
	array('label'=>'Manage JsInfo', 'url'=>array('admin')),
);
?>

<h1>Create JsInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>