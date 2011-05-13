<?php
$this->breadcrumbs=array(
	'Job Posting2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobPosting2', 'url'=>array('index')),
	array('label'=>'Create JobPosting2', 'url'=>array('create')),
	array('label'=>'View JobPosting2', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobPosting2', 'url'=>array('admin')),
);
?>

<h1>Update JobPosting2 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>