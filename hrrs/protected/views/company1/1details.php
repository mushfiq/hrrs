<?php
$this->breadcrumbs=array(
	'Companys'=>array('index'),
	$model->com_id=>array('view','id'=>$model->com_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Login Info', 'url'=>array('index')),
	array('label'=>'Company Details', 'url'=>array('details', 'id'=>$model->com_id)),
	array('label'=>'Post new job', 'url'=>array('jobposting1/create')),
	array('label'=>'Post new job', 'url'=>array('http://google.com')),
);
?>

<h1><?php echo $model->com_name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>