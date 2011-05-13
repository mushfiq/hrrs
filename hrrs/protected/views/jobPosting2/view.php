<?php
$this->breadcrumbs=array(
	'Job Posting2s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JobPosting2', 'url'=>array('index')),
	array('label'=>'Create JobPosting2', 'url'=>array('create')),
	array('label'=>'Update JobPosting2', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobPosting2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobPosting2', 'url'=>array('admin')),
);
?>

<h1>View JobPosting2 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'gender',
		'accademic_req',
		'age_from',
		'age_to',
		'additional_req',
		'job_type',
		'job_level',
		'interview_location',
		'job_location',
	),
)); ?>
