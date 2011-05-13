<?php
$this->breadcrumbs=array(
	'Educations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Education', 'url'=>array('index')),
	array('label'=>'Create Education', 'url'=>array('create')),
	array('label'=>'Update Education', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Education', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Education', 'url'=>array('admin')),
);
?>

<h1>View Education #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'js_id',
		'degree',
		'institute',
		'start_date',
		'end_date',
		'subject',
		'duration',
		'result',
		'outof',
		'degree_type',
	),
)); ?>
