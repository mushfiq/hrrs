<?php
$this->breadcrumbs=array(
	'Job Posting1s'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List JobPosting1', 'url'=>array('index')),
	array('label'=>'Create JobPosting1', 'url'=>array('create')),
	array('label'=>'Update JobPosting1', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobPosting1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobPosting1', 'url'=>array('admin')),
);
?>

<h1>View JobPosting1 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'category',
		'responsibility',
		'description',
		'experience',
		'recruit_number',
		'deadline',
		'skills_req',
		'salary_min',
		'salary_max',
	),
)); ?>
