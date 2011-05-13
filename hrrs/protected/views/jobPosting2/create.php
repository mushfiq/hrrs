<?php
$this->breadcrumbs=array(
	'Job Posting2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobPosting2', 'url'=>array('index')),
	array('label'=>'Manage JobPosting2', 'url'=>array('admin')),
);
?>

<h1>Create JobPosting2</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>